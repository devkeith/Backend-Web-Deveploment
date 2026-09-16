<?php

namespace FoodFusion\Services;

use FoodFusion\Config\Database;
use PDO;
use PDOException;

class AuthService
{
    protected $pdo;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->pdo = $db->getConnection();
    }

    public function registerUser($firstName, $lastName, $username, $email, $password)
    {
        try {
            $firstName = trim($firstName);
            $lastName = trim($lastName);
            $username = trim($username);
            $email = trim($email);
            $password = trim($password);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return ['success' => false, 'message' => 'Invalid email format.'];
            }

            $checkStmt = $this->pdo->prepare('SELECT user_id FROM users WHERE email = :email LIMIT 1');
            $checkStmt->execute([':email' => $email]);
            $existingUser = $checkStmt->fetch();

            if ($existingUser) {
                return ['success' => false, 'message' => 'This email address is already registered.'];
            }

            $usernameCheckStmt = $this->pdo->prepare('SELECT user_id FROM users WHERE username = :username LIMIT 1');
            $usernameCheckStmt->execute([':username' => $username]);
            $existingUsername = $usernameCheckStmt->fetch();

            if ($existingUsername) {
                return ['success' => false, 'message' => 'This username is already taken.'];
            }

            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            $insertStmt = $this->pdo->prepare(
                'INSERT INTO users (first_name, last_name, username, email, password_hash) 
                 VALUES (:first_name, :last_name, :username, :email, :password_hash)'
            );
            $insertStmt->execute([
                ':first_name' => $firstName,
                ':last_name' => $lastName,
                ':username' => $username,
                ':email' => $email,
                ':password_hash' => $passwordHash,
            ]);

            return ['success' => true, 'message' => 'Registration successful.'];
        } catch (PDOException $e) {
            error_log('Database exception in registerUser: ' . $e->getMessage());
            return ['success' => false, 'message' => 'An internal database exception occurred.'];
        }
    }

    public function loginUser($email_or_username, $password)
    {
        try {
            $identifier = trim($email_or_username);
            $password = trim($password);

            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :search_email OR username = :search_username LIMIT 1');
            $stmt->execute([':search_email' => $identifier, ':search_username' => $identifier]);
            $user = $stmt->fetch();

            if (!$user) {
                return ['success' => false, 'message' => 'Invalid username or password.'];
            }

            if ($user['lockout_until'] !== null && new \DateTime() < new \DateTime($user['lockout_until'])) {
                return [
                    'success' => false,
                    'message' => 'Account temporarily locked. Please try again after 3 minutes.',
                    'code' => 'ACCOUNT_LOCKED'
                ];
            }

            if (password_verify($password, $user['password_hash'])) {
                if ($user['failed_login_attempts'] > 0) {
                    $resetStmt = $this->pdo->prepare('UPDATE users SET failed_login_attempts = 0, lockout_until = NULL WHERE user_id = :user_id');
                    $resetStmt->execute([':user_id' => $user['user_id']]);
                }

                return [
                    'success' => true,
                    'message' => 'Login successful.',
                    'user' => [
                        'user_id' => $user['user_id'],
                        'first_name' => $user['first_name'],
                        'last_name' => $user['last_name'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role' => $user['role'],
                    ]
                ];
            }

            $newAttempts = $user['failed_login_attempts'] + 1;

            if ($newAttempts >= 3) {
                $lockoutTime = date('Y-m-d H:i:s', strtotime('+3 minutes'));

                $lockStmt = $this->pdo->prepare('UPDATE users SET failed_login_attempts = :attempts, lockout_until = :lockout_time WHERE user_id = :user_id');
                $lockStmt->execute([
                    ':attempts' => $newAttempts,
                    ':lockout_time' => $lockoutTime,
                    ':user_id' => $user['user_id'],
                ]);

                return [
                    'success' => false,
                    'message' => 'Account temporarily locked. Please try again after 3 minutes.',
                    'code' => 'ACCOUNT_LOCKED'
                ];
            }

            $updateStmt = $this->pdo->prepare('UPDATE users SET failed_login_attempts = :attempts WHERE user_id = :user_id');
            $updateStmt->execute([
                ':attempts' => $newAttempts,
                ':user_id' => $user['user_id'],
            ]);

            $remainingAttempts = 3 - $newAttempts;

            return [
                'success' => false,
                'message' => "Invalid username or password. You have {$remainingAttempts} attempt(s) remaining before account lockout.",
                'remaining_attempts' => $remainingAttempts
            ];
        } catch (PDOException $e) {
            error_log('Database exception in loginUser: ' . $e->getMessage());
            return ['success' => false, 'message' => 'An internal database exception occurred.'];
        }
    }
}

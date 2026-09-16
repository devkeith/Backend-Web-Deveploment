<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/Services/AuthService.php';

use FoodFusion\Config\Database;
use FoodFusion\Services\AuthService;

$auth_error = '';

if (isset($_GET['auth_action']) && $_GET['auth_action'] === 'logout') {
    session_destroy();
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action'])) {
    $authService = new AuthService();
    
    if ($_POST['auth_action'] === 'register') {
        $result = $authService->registerUser(
            $_POST['first_name'] ?? '',
            $_POST['last_name'] ?? '',
            $_POST['username'] ?? '',
            $_POST['email'] ?? '',
            $_POST['password'] ?? ''
        );
        if (!$result['success']) {
            $auth_error = $result['message'];
        } else {
            $_SESSION['flash_success'] = 'Registration Successful! Welcome to FoodFusion.';
            header('Location: ' . ($_SERVER['PHP_SELF'] ?? 'index.php'));
            exit;
        }
    } elseif ($_POST['auth_action'] === 'login') {
        $result = $authService->loginUser(
            $_POST['email'] ?? '',
            $_POST['password'] ?? ''
        );
        if ($result['success']) {
            $_SESSION['user_id'] = $result['user']['user_id'];
            $_SESSION['username'] = $result['user']['username'];
            $_SESSION['first_name'] = $result['user']['first_name'];
            $_SESSION['flash_success'] = 'Login Successful! Welcome back.';
            header('Location: ' . ($_SERVER['PHP_SELF'] ?? 'index.php'));
            exit;
        } else {
            $auth_error = $result['message'];
        }
    }
}
?>

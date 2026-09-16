<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/Services/AuthService.php';

use FoodFusion\Config\Database;
use FoodFusion\Services\AuthService;

$recipe_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action']) && $_POST['auth_action'] === 'submit_recipe') {
    if (!isset($_SESSION['user_id'])) {
        $recipe_error = 'You must be logged in to submit a recipe.';
    } else {
        $recipeName = trim($_POST['recipe_name'] ?? '');
        $cuisineType = $_POST['cuisine_type'] ?? '';
        $dietaryPreference = $_POST['dietary_preference'] ?? '';
        $cookingDifficulty = $_POST['cooking_difficulty'] ?? '';
        $description = trim($_POST['description'] ?? '');
        $ingredients = trim($_POST['ingredients'] ?? '');
        $instructions = trim($_POST['instructions'] ?? '');
        $prepTime = $_POST['prep_time'] ?? '';
        $cookTime = $_POST['cook_time'] ?? '';
        $servings = $_POST['servings'] ?? '';

        if (!$recipeName || !$cuisineType || !$dietaryPreference || !$cookingDifficulty || !$description || !$ingredients || !$instructions || $prepTime === '' || $cookTime === '' || $servings === '') {
            $recipe_error = 'All fields are required. Please fill out the entire form.';
        } else {
            $imagePath = null;

            if (isset($_FILES['recipe_image']) && $_FILES['recipe_image']['error'] === UPLOAD_ERR_OK) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                $fileType = $_FILES['recipe_image']['type'];
                $fileTmpPath = $_FILES['recipe_image']['tmp_name'];
                $fileName = uniqid() . '_' . basename($_FILES['recipe_image']['name']);
                $uploadDir = __DIR__ . '/../uploads/recipes/';
                $destPath = $uploadDir . $fileName;

                if (in_array($fileType, $allowedTypes)) {
                    if (move_uploaded_file($fileTmpPath, $destPath)) {
                        $imagePath = 'uploads/recipes/' . $fileName;
                    }
                }
            }

            try {
                $pdo = Database::getInstance()->getConnection();
                $stmt = $pdo->prepare(
                    'INSERT INTO recipes (recipe_name, cuisine_type, dietary_preference, cooking_difficulty, description, ingredients, instructions, prep_time, cook_time, servings, image_path, author_id, is_community_submitted, approval_status)
                     VALUES (:recipe_name, :cuisine_type, :dietary_preference, :cooking_difficulty, :description, :ingredients, :instructions, :prep_time, :cook_time, :servings, :image_path, :author_id, 1, "pending")'
                );
                $stmt->execute([
                    ':recipe_name' => $recipeName,
                    ':cuisine_type' => $cuisineType,
                    ':dietary_preference' => $dietaryPreference,
                    ':cooking_difficulty' => $cookingDifficulty,
                    ':description' => $description,
                    ':ingredients' => $ingredients,
                    ':instructions' => $instructions,
                    ':prep_time' => (int)$prepTime,
                    ':cook_time' => (int)$cookTime,
                    ':servings' => (int)$servings,
                    ':image_path' => $imagePath,
                    ':author_id' => $_SESSION['user_id'],
                ]);

                $_SESSION['flash_success'] = 'Recipe submitted successfully! It will be reviewed by a community manager shortly.';
                header('Location: ' . ($_SERVER['PHP_SELF'] ?? 'community-cookbook.php'));
                exit;
            } catch (PDOException $e) {
                error_log('Database exception in submit_recipe: ' . $e->getMessage());
                $recipe_error = 'An internal database exception occurred. Please try again later.';
            }
        }
    }
}
?>

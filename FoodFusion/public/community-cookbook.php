<?php include __DIR__ . '/../config/auth_controller.php'; ?>
<?php include __DIR__ . '/../config/recipe_controller.php'; ?>
<?php $activePage = 'community-cookbook'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Cookbook - FoodFusion</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main class="site-container cookbook-page">
    <div class="cookbook-intro">
        <h1>Share Your Recipe</h1>
        <p class="subtitle-lead">Have a recipe worth sharing? Add your favorite dish to our community cookbook.</p>
        <p class="review-notice">Note: To maintain catalog quality, all submitted recipes are reviewed by a community manager before becoming publicly visible.</p>
    </div>

    <?php if (isset($_SESSION['flash_success'])): ?>
        <div class="flash-popup-toast"><?php echo $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?></div>
    <?php endif; ?>

    <?php if (isset($recipe_error) && $recipe_error): ?>
        <div class="form-error-message"><?php echo htmlspecialchars($recipe_error); ?></div>
    <?php endif; ?>

    <form method="POST" action="community-cookbook.php" enctype="multipart/form-data" class="linear-submission-form">
        <input type="hidden" name="auth_action" value="submit_recipe">

        <div class="form-row">
            <label class="form-label" for="recipeName">Recipe Name</label>
            <input type="text" id="recipeName" name="recipe_name" class="form-control" placeholder="e.g., Grandma's Apple Pie" required>
        </div>

        <div class="form-row">
            <label class="form-label" for="cuisineType">Cuisine Type</label>
            <select id="cuisineType" name="cuisine_type" class="form-control" required>
                <option value="" disabled selected>Select cuisine</option>
                <option value="Italian">Italian</option>
                <option value="Asian">Asian</option>
                <option value="African">African</option>
                <option value="Mexican">Mexican</option>
            </select>
        </div>

        <div class="form-row">
            <label class="form-label" for="dietaryPreference">Dietary Preference</label>
            <select id="dietaryPreference" name="dietary_preference" class="form-control" required>
                <option value="" disabled selected>Select dietary preference</option>
                <option value="Vegan">Vegan</option>
                <option value="Vegetarian">Vegetarian</option>
                <option value="Gluten-Free">Gluten-Free</option>
            </select>
        </div>

        <div class="form-row">
            <label class="form-label" for="cookingDifficulty">Cooking Difficulty</label>
            <select id="cookingDifficulty" name="cooking_difficulty" class="form-control" required>
                <option value="" disabled selected>Select difficulty</option>
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
        </div>

        <div class="form-row">
            <label class="form-label" for="description">Recipe Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" placeholder="Briefly describe your dish..." required></textarea>
        </div>

        <div class="form-row">
            <label class="form-label" for="ingredients">Ingredients</label>
            <textarea id="ingredients" name="ingredients" class="form-control" rows="6" placeholder="List each ingredient on a new line..." required></textarea>
        </div>

        <div class="form-row">
            <label class="form-label" for="instructions">Cooking Instructions</label>
            <textarea id="instructions" name="instructions" class="form-control" rows="8" placeholder="Step-by-step cooking directions..." required></textarea>
        </div>

        <div class="form-row-inline">
            <div class="form-row">
                <label class="form-label" for="prepTime">Prep Time (minutes)</label>
                <input type="number" id="prepTime" name="prep_time" class="form-control" min="0" placeholder="e.g., 15" required>
            </div>
            <div class="form-row">
                <label class="form-label" for="cookTime">Cooking Time (minutes)</label>
                <input type="number" id="cookTime" name="cook_time" class="form-control" min="0" placeholder="e.g., 30" required>
            </div>
            <div class="form-row">
                <label class="form-label" for="servings">Servings</label>
                <input type="number" id="servings" name="servings" class="form-control" min="1" placeholder="e.g., 4" required>
            </div>
        </div>

        <div class="form-row">
            <label class="form-label" for="recipeImage">Recipe Image</label>
            <input type="file" id="recipeImage" name="recipe_image" class="form-control" accept="image/jpeg,image/png,image/webp,image/jpg">
        </div>

        <button type="submit" class="btn-submit-recipe">Submit</button>
    </form>
</main>

<?php include 'components/footer.php'; ?>
</body>
</html>

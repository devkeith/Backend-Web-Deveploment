<?php
include __DIR__ . '/../config/auth_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Hub - FoodFusion</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .recipe-hub-hero {
            background-color: #f8fafc;
            padding-top: 80px;
            padding-bottom: 40px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
        }

        .recipe-hub-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            letter-spacing: -0.03em;
        }

        .recipe-hub-hero p {
            font-size: 1.1rem;
            color: #64748a;
            max-width: 640px;
            margin: 0 auto 2rem;
        }

        .hero-controls {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-controls button {
            background-color: #f59e0b;
            color: #1e293b;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hero-controls button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .hero-controls button.active {
            background-color: #ffffff;
            color: #1e293b;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
        }

        .row-section {
            padding: 64px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .row-section h2 {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: #1e293b;
            letter-spacing: -0.02em;
        }

        .favorites-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .recipe-card {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .recipe-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .recipe-card-content {
            padding: 24px;
        }

        .recipe-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1e293b;
        }

        .recipe-card h3 a {
            color: inherit;
            text-decoration: none;
        }

        .recipe-card h3 a:hover {
            color: #f59e0b;
        }

        .recipe-card p {
            font-size: 0.9rem;
            color: #64748a;
            line-height: 1.5;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .news-placeholder {
            background-color: #f8fafc;
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .news-placeholder:hover {
            background-color: #f1f5f9;
            border-color: #94a3b8;
        }

        .news-placeholder .placeholder-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .news-placeholder h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .news-placeholder p {
            font-size: 0.875rem;
            color: #64748a;
        }

        .video-section {
            background-color: #0f172a;
            padding: 64px 0;
        }

        .video-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.4);
        }

        .video-aspect-ratio {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
        }

        .video-aspect-ratio iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        @media (max-width: 1024px) {
            .favorites-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .recipe-hub-hero h1 {
                font-size: 1.75rem;
            }

            .favorites-grid {
                grid-template-columns: 1fr;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .row-section {
                padding: 32px 0;
            }

            .recipe-hub-hero {
                padding-top: 48px;
                padding-bottom: 24px;
            }
        }
    </style>
</head>
<body>
<?php include 'components/header.php'; ?>

    <section class="recipe-hub-hero">
        <h1>Recipe Hub</h1>
        <p>Select a recipe below to watch the featured cooking video in cinema mode.</p>
        <div class="hero-controls">
            <button class="recipe-btn active" data-recipe-id="1" data-video-id="dQw4w9WgXcQ">Recipe #1</button>
            <button class="recipe-btn" data-recipe-id="2" data-video-id="5qap5p1hzKGY">Recipe #2</button>
            <button class="recipe-btn" data-recipe-id="3" data-video-id="9bZkp7q19f0">Recipe #3</button>
        </div>
    </section>

    <section class="row-section">
        <h2>Chef Favorites</h2>
        <div class="favorites-grid">
            <article class="recipe-card">
                <img src="assets/images/img1.webp" alt="Signature Garlic Butter Steak">
                <div class="recipe-card-content">
                    <h3><a href="recipe-detail.php?id=1">Signature Garlic Butter Steak</a></h3>
                    <p>A perfectly seared ribeye with aromatic garlic butter, served with roasted fingerling potatoes and seasonal greens.</p>
                </div>
            </article>

            <article class="recipe-card">
                <img src="assets/images/img1.webp" alt="Mediterranean Lemon Pesto Pasta">
                <div class="recipe-card-content">
                    <h3><a href="recipe-detail.php?id=2">Mediterranean Lemon Pesto Pasta</a></h3>
                    <p>Fresh basil pesto with a zesty lemon twist, tossed with al dente pasta and topped with parmesan crisps.</p>
                </div>
            </article>

            <article class="recipe-card">
                <img src="assets/images/img1.webp" alt="Spicy Coconut Curry Shrimp">
                <div class="recipe-card-content">
                    <h3><a href="recipe-detail.php?id=3">Spicy Coconut Curry Shrimp</a></h3>
                    <p>Plump shrimp simmered in a creamy coconut curry sauce with fresh ginger, lemongrass, and bird chilies.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="row-section">
        <h2>Food News &amp; Blogs</h2>
        <div class="news-grid">
            <div class="news-placeholder">
                <div class="placeholder-icon">&#9193;</div>
                <h3>Latest Article</h3>
                <p>News API integration placeholder — article title and summary will load here dynamically.</p>
            </div>

            <div class="news-placeholder">
                <div class="placeholder-icon">&#9193;</div>
                <h3>Featured Blog Post</h3>
                <p>News API integration placeholder — article title and summary will load here dynamically.</p>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-wrapper">
            <div class="video-aspect-ratio">
                <iframe id="featured-video" src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var videoIframe = document.getElementById("featured-video");
            var recipeButtons = document.querySelectorAll(".recipe-btn");

            recipeButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    recipeButtons.forEach(function(btn) {
                        btn.classList.remove("active");
                    });

                    this.classList.add("active");

                    var videoId = this.getAttribute("data-video-id");
                    videoIframe.src = "https://www.youtube.com/embed/" + videoId + "?rel=0";
                });
            });
        });
    </script>

<?php include 'components/footer.php'; ?>
</body>
</html>

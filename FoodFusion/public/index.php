<?php include __DIR__ . '/../config/auth_controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodFusion Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

    <!-- Floating Content-Card Overlay Hero Section -->
    <section class="hero-showcase">
        <div class="hero-image-wrapper">
            <img src="assets/images/img1.webp" alt="FoodFusion Featured Table Spread" class="hero-bg-img">
            <div class="hero-overlay-card">
                <span class="hero-tag">FEATURES</span>
                <h1 class="hero-title">The Freshman Class Is Taking Over Your Tailgate</h1>
                <p class="hero-lead">Five recent college grads with serious kitchen chops just joined our Allstar program, and their first assignment is your tailgate spread.</p>
            </div>
        </div>
    </section>

    <!-- Featured Culinary Trends News Feed -->
    <section class="culinary-trends-section">
        <h2 class="text-center mb-4">Featured Culinary Trends</h2>
        <div class="showcase-split-grid">
            <!-- Column A: Trends List -->
            <div class="trends-list-column">
                <div class="trend-mini-card active-selection" data-index="0" data-title="Carbonara Supremacy" data-image="assets/images/img1.webp" data-category="Italian" data-rating="4.8">
                    <img src="assets/images/img1.webp" alt="Carbonara Supremacy" class="trend-mini-img">
                    <div class="trend-mini-info">
                        <h4>Carbonara Supremacy</h4>
                        <span class="trend-mini-category">Italian</span>
                    </div>
                </div>
                <div class="trend-mini-card" data-index="1" data-title="Power Morning Bowl" data-image="assets/images/img1.webp" data-category="Vegan" data-rating="4.6">
                    <img src="assets/images/img1.webp" alt="Power Morning Bowl" class="trend-mini-img">
                    <div class="trend-mini-info">
                        <h4>Power Morning Bowl</h4>
                        <span class="trend-mini-category">Vegan</span>
                    </div>
                </div>
                <div class="trend-mini-card" data-index="2" data-title="Beef Wellington Masterclass" data-image="assets/images/img1.webp" data-category="British" data-rating="4.9">
                    <img src="assets/images/img1.webp" alt="Beef Wellington Masterclass" class="trend-mini-img">
                    <div class="trend-mini-info">
                        <h4>Beef Wellington Masterclass</h4>
                        <span class="trend-mini-category">British</span>
                    </div>
                </div>
                <div class="trend-mini-card" data-index="3" data-title="Spicy Thai Basil Chicken" data-image="assets/images/img1.webp" data-category="Thai" data-rating="4.7">
                    <img src="assets/images/img1.webp" alt="Spicy Thai Basil Chicken" class="trend-mini-img">
                    <div class="trend-mini-info">
                        <h4>Spicy Thai Basil Chicken</h4>
                        <span class="trend-mini-category">Thai</span>
                    </div>
                </div>
            </div>

            <!-- Column B: Spotlight Display -->
            <div class="trend-spotlight-card" id="trendSpotlight">
                <img src="assets/images/img1.webp" alt="Carbonara Supremacy" id="spotlightImg" class="spotlight-img">
                <div class="spotlight-content">
                    <span class="spotlight-category" id="spotlightCategory">Italian</span>
                    <h3 class="spotlight-title" id="spotlightTitle">Carbonara Supremacy</h3>
                    <div class="spotlight-rating" id="spotlightRating">
                        <span class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:middle;color:#ffc107;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:middle;color:#ffc107;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:middle;color:#ffc107;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:middle;color:#ffc107;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:middle;color:#ffc107;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </span>
                        <span class="rating-value">4.8</span>
                    </div>
                    <p class="spotlight-description">The authentic Roman carbonara recipe that will elevate your pasta game. From perfect guanciale to silky egg yolks - master the technique that separates amateurs from legends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Cooking Events Carousel -->
    <section class="events-carousel-section">
        <h2 class="text-center mb-4">Upcoming Cooking Events</h2>
        <div class="carousel-viewport">
            <button class="carousel-arrow carousel-prev" id="carouselPrev" aria-label="Previous Event">&lt;</button>
            <div class="carousel-gallery-container" id="carouselGallery">
                <div class="event-stack-card" data-index="0">
                    <img src="assets/images/img1.webp" alt="Summer Food Festival">
                </div>
                <div class="event-stack-card" data-index="1">
                    <img src="assets/images/img1.webp" alt="Italian Cooking Workshop">
                </div>
                <div class="event-stack-card" data-index="2">
                    <img src="assets/images/img1.webp" alt="Baking Masterclass Series">
                </div>
            </div>
            <button class="carousel-arrow carousel-next" id="carouselNext" aria-label="Next Event">&gt;</button>
        </div>
        <div class="carousel-info-display" id="carouselInfoDisplay">
            <h3 class="carousel-info-title" id="carouselInfoTitle">Summer estival</h3>
            <p class="carousel-info-description" id="carouselInfoDescription">Join us for a weekend of culinary delights featuring local chefs, cooking demonstrations, and food tastings. Perfect for families and food enthusiasts.</p>
        </div>
    </section>

<?php include 'components/footer.php'; ?>
</body>
</html>

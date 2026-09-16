<?php include __DIR__ . '/../config/auth_controller.php'; ?>
<?php $activePage = 'culinary-resources'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinary Resources - FoodFusion</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main class="site-container resources-page">
    <div class="resources-intro">
        <h1>Culinary Resources</h1>
        <p class="subtitle-lead">Learn new techniques, discover kitchen tips, and improve your cooking skills.</p>
    </div>

    <section class="resources-section">
        <h2>Printable Recipe Cards</h2>
        <div class="content-grid">
            <article class="resource-card">
                <img src="assets/images/img1.webp" alt="Recipe Card 01" class="resource-thumb">
                <h3>Recipe Card 01</h3>
                <p>A beautifully formatted printable card for your favorite weeknight pasta dish, complete with ingredient checklist and timing guide.</p>
                <div class="resource-actions">
                    <button class="btn-download" title="Download Recipe Card" aria-label="Download Recipe Card 01">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                    <span class="download-label">Download</span>
                </div>
            </article>

            <article class="resource-card">
                <img src="assets/images/img2.jpg" alt="Recipe Card 02" class="resource-thumb">
                <h3>Recipe Card 02</h3>
                <p>Keep your sourdough starter schedule and baking temperatures organized with this clean, printer-friendly kitchen card.</p>
                <div class="resource-actions">
                    <button class="btn-download" title="Download Recipe Card" aria-label="Download Recipe Card 02">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                    <span class="download-label">Download</span>
                </div>
            </article>

            <article class="resource-card">
                <img src="assets/images/img1.webp" alt="Recipe Card 03" class="resource-thumb">
                <h3>Recipe Card 03</h3>
                <p>Plan your weekly meal prep with this downloadable card, featuring sections for proteins, grains, and seasonal vegetables.</p>
                <div class="resource-actions">
                    <button class="btn-download" title="Download Recipe Card" aria-label="Download Recipe Card 03">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                    <span class="download-label">Download</span>
                </div>
            </article>
        </div>
    </section>

    <section class="resources-section">
        <h2>Cooking Tutorials</h2>
        <div class="content-grid">
            <article class="tutorial-entry">
                <img src="assets/images/img2.jpg" alt="Knife Skills Fundamentals" class="tutorial-cover">
                <h3>Knife Skills Fundamentals</h3>
                <p>Master the essential cuts every home cook should know. From brunoise to batonnet, this step-by-step tutorial builds confidence and speed at the cutting board.</p>
                <a href="#" class="tutorial-link">View Tutorial →</a>
            </article>

            <article class="tutorial-entry">
                <img src="assets/images/img1.webp" alt="Sourdough Starter Basics" class="tutorial-cover">
                <h3>Sourdough Starter Basics</h3>
                <p>Learn how to create, feed, and maintain a healthy sourdough starter from scratch. Includes troubleshooting tips, feeding schedules, and first-loaf guidance.</p>
                <a href="#" class="tutorial-link">View Tutorial →</a>
            </article>

            <article class="tutorial-entry">
                <img src="assets/images/img2.jpg" alt="Pan Sauce Techniques" class="tutorial-cover">
                <h3>Pan Sauce Techniques</h3>
                <p>Elevate every seared protein with a glossy, restaurant-quality pan sauce. Explore deglazing, mounting with butter, and balancing acid and salt.</p>
                <a href="#" class="tutorial-link">View Tutorial →</a>
            </article>
        </div>
    </section>

    <section class="resources-section">
        <h2>Kitchen Hacks</h2>
        <div class="content-grid">
            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img1.webp" alt="Kitchen Hack 01" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play Kitchen Hack 01 video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>Kitchen Hack 01</h3>
                <p>Learn how to keep herbs fresh for weeks using a simple glass-of-water method and a loose plastic cover.</p>
            </article>

            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img2.jpg" alt="Kitchen Hack 02" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play Kitchen Hack 02 video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>Kitchen Hack 02</h3>
                <p>Stop onion tears before they start. A quick chill technique and proper knife placement make all the difference.</p>
            </article>

            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img1.webp" alt="Kitchen Hack 03" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play Kitchen Hack 03 video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>Kitchen Hack 03</h3>
                <p>Rescue wilted greens with an ice bath and a dry-spin method that brings crisp texture back to life in minutes.</p>
            </article>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>
</body>
</html>

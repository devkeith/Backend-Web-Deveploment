<?php include __DIR__ . '/../config/auth_controller.php'; ?>
<?php $activePage = 'educational-resources'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resources - FoodFusion</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main class="educational-portal-wrapper">
    <div class="educational-intro">
        <h1>Renewable Energy & Sustainability</h1>
        <p class="subtitle-lead">Explore resources, educational materials, and insights about the technologies and issues shaping our energy future.</p>
    </div>

    <section class="educational-section">
        <h2>Educational Materials</h2>
        <div class="content-grid">
            <article class="topic-entry">
                <h3>Solar Energy</h3>
                <p>Photovoltaic technology converts sunlight directly into electricity. Learn about panel efficiency, grid-tie systems, and residential installation considerations.</p>
                <button class="btn-download" title="Download Solar Energy material" aria-label="Download Solar Energy material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>

            <article class="topic-entry">
                <h3>Wind Energy</h3>
                <p>Modern wind turbines capture kinetic energy from airflow. Discover turbine aerodynamics, offshore wind farms, and capacity factor optimization.</p>
                <button class="btn-download" title="Download Wind Energy material" aria-label="Download Wind Energy material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>

            <article class="topic-entry">
                <h3>Hydropower</h3>
                <p>Flowing water drives turbines to generate consistent baseload power. Explore run-of-river designs, pumped storage, and ecological impact mitigation.</p>
                <button class="btn-download" title="Download Hydropower material" aria-label="Download Hydropower material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>

            <article class="topic-entry">
                <h3>Geothermal Energy</h3>
                <p>Earth's internal heat provides steady, low-carbon energy. Review enhanced geothermal systems, direct-use applications, and reservoir management.</p>
                <button class="btn-download" title="Download Geothermal Energy material" aria-label="Download Geothermal Energy material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>

            <article class="topic-entry">
                <h3>Sustainable Development</h3>
                <p>Balancing economic growth, environmental protection, and social equity. Study UN SDGs, life-cycle assessment, and policy frameworks.</p>
                <button class="btn-download" title="Download Sustainable Development material" aria-label="Download Sustainable Development material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>

            <article class="topic-entry">
                <h3>Energy Storage</h3>
                <p>Battery systems, hydrogen, and thermal storage enable renewable integration. Compare lithium-ion, flow batteries, and green hydrogen pathways.</p>
                <button class="btn-download" title="Download Energy Storage material" aria-label="Download Energy Storage material">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </article>
        </div>
    </section>

    <section class="educational-section">
        <h2>Renewable Energy at a Glance</h2>
        <div class="infographic-gallery">
            <article class="infographic-item">
                <img src="assets/images/img1.webp" alt="Global Renewable Capacity Growth" class="infographic-img">
                <p class="infographic-caption">Global renewable electricity capacity has grown by over 50% in the past decade, driven by solar and wind deployment.</p>
            </article>

            <article class="infographic-item">
                <img src="assets/images/img2.jpg" alt="Carbon Emissions Reduction" class="infographic-img">
                <p class="infographic-caption">Renewable adoption avoided an estimated 2.5 gigatons of CO2 emissions globally in the most recent reporting year.</p>
            </article>

            <article class="infographic-item">
                <img src="assets/images/img1.webp" alt="Investment Trends" class="infographic-img">
                <p class="infographic-caption">Clean energy investment now exceeds fossil fuel investment, signaling a structural shift in global energy finance.</p>
            </article>
        </div>
    </section>

    <section class="educational-section">
        <h2>Educational Videos</h2>
        <div class="content-grid">
            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img2.jpg" alt="How Solar Panels Work" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play How Solar Panels Work video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>How Solar Panels Work</h3>
                <p>An animated walkthrough of photovoltaic cells, photon absorption, and electron flow from silicon wafer to home outlet.</p>
            </article>

            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img1.webp" alt="Wind Turbine Engineering" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play Wind Turbine Engineering video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>Wind Turbine Engineering</h3>
                <p>See how blade pitch, gearbox design, and nacelle sensors combine to maximize energy capture in variable wind conditions.</p>
            </article>

            <article class="video-container">
                <div class="video-thumb-wrap">
                    <img src="assets/images/img2.jpg" alt="Smart Grid Fundamentals" class="video-thumb">
                    <button class="play-overlay" title="Play Video" aria-label="Play Smart Grid Fundamentals video">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
                <h3>Smart Grid Fundamentals</h3>
                <p>Understand demand response, distributed energy resources, and the communication layers that make grids adaptive and resilient.</p>
            </article>
        </div>
    </section>

    <section class="educational-section">
        <h2>Reports & Publications</h2>
        <ul class="publications-list">
            <li class="publication-row">
                <span class="publication-title">Renewable Energy Fundamentals</span>
                <button class="btn-download" title="Download Publication" aria-label="Download Renewable Energy Fundamentals">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </li>
            <li class="publication-row">
                <span class="publication-title">Global Wind Report 2025</span>
                <button class="btn-download" title="Download Publication" aria-label="Download Global Wind Report 2025">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </li>
            <li class="publication-row">
                <span class="publication-title">Solar Photovoltaic Market Outlook</span>
                <button class="btn-download" title="Download Publication" aria-label="Download Solar Photovoltaic Market Outlook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </li>
            <li class="publication-row">
                <span class="publication-title">Hydropower Sustainability Guidelines</span>
                <button class="btn-download" title="Download Publication" aria-label="Download Hydropower Sustainability Guidelines">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </li>
            <li class="publication-row">
                <span class="publication-title">Community Microgrid Playbook</span>
                <button class="btn-download" title="Download Publication" aria-label="Download Community Microgrid Playbook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </li>
        </ul>
    </section>
</main>

<?php include 'components/footer.php'; ?>
</body>
</html>

<!-- Responsive Navigation Header -->
<header class="main-header">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">FoodFusion</a>
        
        <div class="nav-links-desktop">
            <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : '' ?>">About Us</a>
            <a href="recipes.php" class="<?= basename($_SERVER['PHP_SELF']) === 'recipes.php' ? 'active' : '' ?>">Recipes</a>
            <a href="community-cookbook.php" class="<?= basename($_SERVER['PHP_SELF']) === 'community-cookbook.php' ? 'active' : '' ?>">Community Cookbook</a>
            <a href="culinary-resources.php" class="<?= basename($_SERVER['PHP_SELF']) === 'culinary-resources.php' ? 'active' : '' ?>">Culinary Resources</a>
            <a href="educational-resources.php" class="<?= basename($_SERVER['PHP_SELF']) === 'educational-resources.php' ? 'active' : '' ?>">Educational Resources</a>
            <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : '' ?>">Contact Us</a>
        </div>
        
        <div class="nav-actions-desktop">
            <?php if (isset($_SESSION['user_id'])): ?>
                <?php
                $avatarSrc = isset($_SESSION['profile_image']) && !empty($_SESSION['profile_image'])
                    ? htmlspecialchars($_SESSION['profile_image'])
                    : 'assets/images/default-avatar.png';
                ?>
                <div class="user-profile-badge" id="userProfileDropdown">
                    <img src="<?php echo $avatarSrc; ?>" alt="<?php echo htmlspecialchars($_SESSION['first_name']); ?>'s profile avatar" class="profile-avatar-img" onerror="this.onerror=null;this.src='assets/images/img1.webp';">
                    <span class="profile-name-text"><?php echo htmlspecialchars($_SESSION['first_name']); ?></span>
                    <svg class="profile-chevron-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    <div class="profile-dropdown-menu">
                        <a href="profile.php" class="dropdown-menu-item">My Profile</a>
                        <a href="settings.php" class="dropdown-menu-item">Settings</a>
                        <a href="?auth_action=logout" class="dropdown-menu-item dropdown-logout-btn" title="Log Out">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="nav-auth-actions">
                    <svg class="nav-profile-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <button class="btn-login-trigger" id="loginBtnDesktop">Sign In</button>
                    <button class="btn-join" id="joinBtnDesktop">Join Us</button>
                </div>
            <?php endif; ?>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<?php if (isset($_SESSION['flash_success'])): ?>
    <div class="flash-popup-toast"><?php echo $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?></div>
<?php endif; ?>

<!-- Mobile Sidebar Menu -->
<div class="mobile-sidebar" id="mobileSidebar">
    <div class="sidebar-content">
        <div class="sidebar-header">
            <span class="sidebar-logo">FoodFusion</span>
            <button class="sidebar-close" id="sidebarClose" aria-label="Close Menu">&times;</button>
        </div>
        <nav class="sidebar-nav">
            <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : '' ?>">About Us</a>
            <a href="recipes.php" class="<?= basename($_SERVER['PHP_SELF']) === 'recipes.php' ? 'active' : '' ?>">Recipes</a>
            <a href="community-cookbook.php" class="<?= basename($_SERVER['PHP_SELF']) === 'community-cookbook.php' ? 'active' : '' ?>">Community Cookbook</a>
            <a href="culinary-resources.php" class="<?= basename($_SERVER['PHP_SELF']) === 'culinary-resources.php' ? 'active' : '' ?>">Culinary Resources</a>
            <a href="educational-resources.php" class="<?= basename($_SERVER['PHP_SELF']) === 'educational-resources.php' ? 'active' : '' ?>">Educational Resources</a>
            <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : '' ?>">Contact Us</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <?php
                $avatarSrc = isset($_SESSION['profile_image']) && !empty($_SESSION['profile_image'])
                    ? htmlspecialchars($_SESSION['profile_image'])
                    : 'assets/images/default-avatar.png';
                ?>
                <div class="user-profile-badge-mobile">
                    <img src="<?php echo $avatarSrc; ?>" alt="<?php echo htmlspecialchars($_SESSION['first_name']); ?>'s profile avatar" class="profile-avatar-img-mobile" onerror="this.onerror=null;this.src='assets/images/img1.webp';">
                    <span class="profile-name-text-mobile"><?php echo htmlspecialchars($_SESSION['first_name']); ?></span>
                    <a href="?auth_action=logout" class="btn-logout-mobile" title="Logout">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </a>
                </div>
            <?php else: ?>
                <button class="btn-login-trigger-mobile" id="loginBtnMobile">Sign In</button>
                <button class="btn-join-mobile" id="joinBtnMobile">Join Us</button>
            <?php endif; ?>
        </nav>
    </div>
</div>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Registration Modal -->
<div class="modal-overlay" id="registrationModal">
    <div class="modal-content">
        <div class="modal-split-card">
            <div class="modal-media-stage">
                <img src="assets/images/img1.webp" alt="Join FoodFusion" class="modal-media-image">
                <div class="modal-media-banner">
                    <h2 class="modal-banner-headline">Join Our Community</h2>
                    <p>Connect with food lovers, share recipes, and explore culinary events.</p>
                </div>
            </div>
            <div class="modal-form-panel">
                <button class="modal-close" id="modalClose" aria-label="Close modal">&times;</button>
                <h2 class="modal-registration-title">CREATE ACCOUNT</h2>
                <form id="registrationForm" method="POST" action="" novalidate>
                    <input type="hidden" name="auth_action" value="register">
                    <div class="form-group">
                        <label class="form-label" for="regFirstName">First Name</label>
                        <input class="form-control" type="text" id="regFirstName" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="regLastName">Last Name</label>
                        <input class="form-control" type="text" id="regLastName" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="regUsername">Username</label>
                        <input type="text" id="regUsername" name="username" class="form-control" placeholder="Choose a unique username" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="regEmail">Email</label>
                        <input class="form-control" type="email" id="regEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="regPassword">Password</label>
                        <input class="form-control" type="password" id="regPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn-modal-primary">Submit</button>
                    <?php if (isset($auth_error) && $auth_error): ?>
                        <div class="auth-error-message"><?php echo htmlspecialchars($auth_error); ?></div>
                    <?php endif; ?>
                </form>
                <div class="modal-login-switch">
                    Already have an account? <a href="#" id="switchToLogin">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal-overlay" id="loginModalOverlay">
    <div class="modal-content">
        <div class="modal-split-card">
            <div class="modal-media-stage">
                <img src="assets/images/img1.webp" alt="Welcome Back" class="modal-media-image">
                <div class="modal-media-banner">
                    <h2 class="modal-banner-headline">Welcome Back</h2>
                    <p>Sign in to access your saved recipes and event bookings.</p>
                </div>
            </div>
            <div class="modal-form-panel">
                <button class="modal-close" id="loginModalClose" aria-label="Close modal">&times;</button>
                <h2 class="modal-registration-title">SIGN IN</h2>
                <form id="loginForm" method="POST" action="" novalidate>
                    <input type="hidden" name="auth_action" value="login">
                    <div class="form-group">
                        <label class="form-label" for="loginEmail">Username or Email Address</label>
                        <input type="text" name="email" id="loginEmail" placeholder="Enter your username or email address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="loginPassword">Password</label>
                        <input type="password" name="password" id="loginPassword" placeholder="Enter your password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-modal-primary">Login</button>
                    <?php if (isset($auth_error) && $auth_error): ?>
                        <div class="auth-error-message"><?php echo htmlspecialchars($auth_error); ?></div>
                    <?php endif; ?>
                </form>
                <div class="modal-login-switch">
                    Do not have an account? <a href="#" id="switchToRegister">Join us</a>
                </div>
            </div>
        </div>
    </div>
</div>

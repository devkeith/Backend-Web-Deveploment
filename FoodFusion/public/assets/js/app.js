document.addEventListener('DOMContentLoaded', function() {
    // Component A: Global Registration Modal Tracker
    const joinBtnDesktop = document.getElementById('joinBtnDesktop');
    const joinBtnMobile = document.getElementById('joinBtnMobile');
    const registrationModal = document.getElementById('registrationModal');
    const modalClose = document.getElementById('modalClose');
    const registrationForm = document.getElementById('registrationForm');

    // Component A2: Login Modal Tracker
    const loginBtnDesktop = document.getElementById('loginBtnDesktop');
    const loginBtnMobile = document.getElementById('loginBtnMobile');
    const loginModalOverlay = document.getElementById('loginModalOverlay');
    const loginModalClose = document.getElementById('loginModalClose');
    const loginForm = document.getElementById('loginForm');
    const switchToLogin = document.getElementById('switchToLogin');
    const switchToRegister = document.getElementById('switchToRegister');

    function openRegistrationModal(e) {
        e.preventDefault();
        if (loginModalOverlay) {
            loginModalOverlay.classList.remove('active');
        }
        registrationModal.classList.add('active');
    }

    function openLoginModal(e) {
        e.preventDefault();
        if (registrationModal) {
            registrationModal.classList.remove('active');
        }
        loginModalOverlay.classList.add('active');
    }

    function closeModal(modal) {
        modal.classList.remove('active');
    }

    if (joinBtnDesktop) {
        joinBtnDesktop.addEventListener('click', openRegistrationModal);
    }

    if (joinBtnMobile) {
        joinBtnMobile.addEventListener('click', openRegistrationModal);
    }

    if (loginBtnDesktop) {
        loginBtnDesktop.addEventListener('click', openLoginModal);
    }

    if (loginBtnMobile) {
        loginBtnMobile.addEventListener('click', openLoginModal);
    }

    if (modalClose) {
        modalClose.addEventListener('click', function() {
            closeModal(registrationModal);
        });
    }

    if (loginModalClose) {
        loginModalClose.addEventListener('click', function() {
            closeModal(loginModalOverlay);
        });
    }

    if (switchToLogin) {
        switchToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            openLoginModal(e);
        });
    }

    if (switchToRegister) {
        switchToRegister.addEventListener('click', function(e) {
            e.preventDefault();
            openRegistrationModal(e);
        });
    }

    if (registrationModal) {
        registrationModal.addEventListener('click', function(e) {
            if (e.target === registrationModal) {
                closeModal(registrationModal);
            }
        });
    }

    if (loginModalOverlay) {
        loginModalOverlay.addEventListener('click', function(e) {
            if (e.target === loginModalOverlay) {
                closeModal(loginModalOverlay);
            }
        });
    }


    // Component B: Cookie Consent Notification
    const cookieConsent = document.getElementById('cookieConsent');
    const cookieAccept = document.getElementById('cookieAccept');
    const cookieDecline = document.getElementById('cookieDecline');

    function showCookieConsent() {
        if (cookieConsent && !sessionStorage.getItem('cookieConsentShown')) {
            cookieConsent.classList.add('visible');
            sessionStorage.setItem('cookieConsentShown', 'true');
        }
    }

    function hideCookieConsent() {
        if (cookieConsent) {
            cookieConsent.classList.remove('visible');
        }
    }

    if (cookieAccept) {
        cookieAccept.addEventListener('click', hideCookieConsent);
    }

    if (cookieDecline) {
        cookieDecline.addEventListener('click', hideCookieConsent);
    }

    setTimeout(showCookieConsent, 1500);

    // Component B2: Flash Popup Toast Auto-Close
    const flashToast = document.querySelector('.flash-popup-toast');
    if (flashToast) {
        setTimeout(function() {
            flashToast.classList.add('hidden');
        }, 3500);
    }

    // Component C: 3D Polaroid Stack Carousel
    const carouselPrev = document.getElementById('carouselPrev');
    const carouselNext = document.getElementById('carouselNext');
    const carouselGallery = document.getElementById('carouselGallery');
    const carouselInfoTitle = document.getElementById('carouselInfoTitle');
    const carouselInfoDescription = document.getElementById('carouselInfoDescription');
    const eventCards = document.querySelectorAll('.event-stack-card');

    const eventData = [
        {
            title: 'Summer Food Festival',
            description: 'Join us for a weekend of culinary delights featuring local chefs, cooking demonstrations, and food tastings. Perfect for families and food enthusiasts.'
        },
        {
            title: 'Italian Cooking Workshop',
            description: 'Learn authentic Italian techniques from a master chef. Includes hands-on pasta making, sauce preparation, and wine pairing.'
        },
        {
            title: 'Baking Masterclass Series',
            description: 'Three-part series covering everything from basic bread to elaborate wedding cakes. Perfect for beginners and experienced bakers.'
        }
    ];

    let currentIndex = 1;

    function updateCarousel() {
        if (!eventCards.length || !carouselInfoTitle || !carouselInfoDescription) return;

        eventCards.forEach(function(card, index) {
            card.classList.remove('active-center', 'active-left', 'active-right');

            const offset = (index - currentIndex + 3) % 3;

            if (offset === 0) {
                card.classList.add('active-center');
                carouselInfoTitle.textContent = eventData[index].title;
                carouselInfoDescription.textContent = eventData[index].description;
            } else if (offset === 1 || offset === -2) {
                card.classList.add('active-right');
            } else if (offset === 2 || offset === -1) {
                card.classList.add('active-left');
            }
        });
    }

    if (carouselNext) {
        carouselNext.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % 3;
            updateCarousel();
        });
    }

    if (carouselPrev) {
        carouselPrev.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + 3) % 3;
            updateCarousel();
        });
    }

    // Auto-rotate carousel every 4 seconds
    setInterval(function() {
        currentIndex = (currentIndex + 1) % 3;
        updateCarousel();
    }, 4000);

    updateCarousel();

    // Component D: Dynamic Tabbed News Feed Explorer
    const trendMiniCards = document.querySelectorAll('.trend-mini-card');
    const spotlightImg = document.getElementById('spotlightImg');
    const spotlightCategory = document.getElementById('spotlightCategory');
    const spotlightTitle = document.getElementById('spotlightTitle');
    const spotlightRating = document.getElementById('spotlightRating');

    trendMiniCards.forEach(function(card) {
        card.addEventListener('click', function(e) {
            e.preventDefault();

            trendMiniCards.forEach(function(c) {
                c.classList.remove('active-selection');
            });
            card.classList.add('active-selection');

            const title = card.getAttribute('data-title');
            const image = card.getAttribute('data-image');
            const category = card.getAttribute('data-category');
            const rating = card.getAttribute('data-rating');

            if (spotlightImg) {
                spotlightImg.src = image;
                spotlightImg.alt = title;
            }
            if (spotlightCategory) {
                spotlightCategory.textContent = category;
            }
            if (spotlightTitle) {
                spotlightTitle.textContent = title;
            }
            if (spotlightRating) {
                spotlightRating.querySelector('.rating-value').textContent = rating;
            }
        });
    });

    // Mobile Sidebar Toggle
    const navToggle = document.getElementById('navToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function openSidebar() {
        mobileSidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        mobileSidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (navToggle) {
        navToggle.addEventListener('click', function() {
            mobileSidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
            document.body.style.overflow = mobileSidebar.classList.contains('active') ? 'hidden' : '';
        });
    }

    if (sidebarClose) {
        sidebarClose.addEventListener('click', closeSidebar);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    // Component E: User Profile Dropdown Toggle (for touch devices)
    const userProfileBadge = document.getElementById('userProfileDropdown');

    if (userProfileBadge) {
        userProfileBadge.addEventListener('click', function(e) {
            const dropdownMenu = this.querySelector('.profile-dropdown-menu');
            if (!dropdownMenu) return;

            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                dropdownMenu.classList.remove('dropdown-open');
            } else {
                this.setAttribute('aria-expanded', 'true');
                dropdownMenu.classList.add('dropdown-open');

                // Close dropdown when clicking outside
                function closeProfileDropdown(event) {
                    if (!userProfileBadge.contains(event.target)) {
                        userProfileBadge.setAttribute('aria-expanded', 'false');
                        dropdownMenu.classList.remove('dropdown-open');
                        document.removeEventListener('click', closeProfileDropdown);
                    }
                }
                document.addEventListener('click', closeProfileDropdown);
            }
        });
    }
});
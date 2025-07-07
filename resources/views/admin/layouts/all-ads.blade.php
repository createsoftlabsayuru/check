<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LankaBuy Ads Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/admin/All ads.css') }}">
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fnimanthas5058back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.4"></script>
</head>
<body>
    <div class="main-container">
        <!-- Header -->
        <header class="header">
            <img src="../assets/images/img_headerlogo.png" alt="LankaBuy Logo" class="logo" />
            
            <div class="search-container">
                <input type="text" class="search-input" placeholder="What are you looking for ?" />
                <div class="search-divider"></div>
                <span class="location-text">Colombo, SriLanka</span>
                <button class="search-button" onclick="performSearch()"></button>
            </div>
            
            <nav class="header-menu">
                <a href="#" class="header-link">Add business</a>
                <a href="#" class="header-link underlined">Write a review</a>
                <a href="#" class="header-button login-button">Login In</a>
                <a href="#" class="header-button signup-button">Sign Up</a>
            </nav>
        </header>

        <div class="main-content">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="user-profile">
                    <div class="user-info">
                        <h2 class="user-name">M.A.N.Lakshan</h2>
                        <img src="../assets/images/img_mingcutenotificationfill.svg" alt="Notifications" class="notification-icon" />
                    </div>
                    <p class="join-date">Join 02 Jun 2025</p>
                </div>

                <nav class="sidebar-menu">
                    <div class="menu-item active">
                        <span class="menu-text">My Dashboard</span>
                    </div>
                    
                    <div class="menu-item highlighted" onclick="toggleSubmenu('listings')">
                        <img src="../assets/images/img_group.svg" alt="Listings" class="menu-icon" />
                        <span class="menu-text">ALL Listings</span>
                    </div>
                    
                    <div class="menu-item gradient" onclick="toggleSubmenu('leads')">
                        <span class="menu-text">LEADS & ENQUIRY</span>
                        <img src="../assets/images/img_group_white_a700.svg" alt="Arrow" class="menu-arrow" />
                    </div>
                    
                    <div class="menu-item gradient" onclick="toggleSubmenu('payment')">
                        <span class="menu-text">PAYMENT & PROMOTION</span>
                        <img src="../assets/images/img_group_white_a700.svg" alt="Arrow" class="menu-arrow" />
                    </div>
                    
                    <div class="menu-item gradient" onclick="toggleSubmenu('profile')">
                        <span class="menu-text">PROFILE PAGES</span>
                        <img src="../assets/images/img_group_white_a700.svg" alt="Arrow" class="menu-arrow" />
                    </div>
                    
                    <div class="menu-item gradient" onclick="toggleSubmenu('activities')">
                        <span class="menu-text">MY ACTIVITIES</span>
                        <img src="../assets/images/img_group_white_a700.svg" alt="Arrow" class="menu-arrow" />
                    </div>
                </nav>
            </aside>

            <!-- Content Area -->
            <main class="content-area">
                <!-- Ads Post Section -->
                <section class="section-header">
                    <h1 class="section-title">Ads Post</h1>
                    <div class="section-underline"></div>
                </section>

                <!-- Category Grid -->
                <div class="category-grid">
                    <div class="category-card" onclick="selectCategory('pets')">
                        <span class="category-text">Pets</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('tiles')">
                        <span class="category-text">Tiles</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('laptops')">
                        <span class="category-text">Laptops</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('plots')">
                        <span class="category-text">Plots</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('motorbikes')">
                        <span class="category-text">Motorbikes</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('toys')">
                        <span class="category-text">Toys</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('shoes')">
                        <span class="category-text">Shoes</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('clothes')">
                        <span class="category-text">Clothes</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('education')">
                        <span class="category-text">Education</span>
                    </div>
                    <div class="category-card" onclick="selectCategory('vehicles')">
                        <span class="category-text">Vehicles</span>
                    </div>
                </div>

                <!-- Trending Ads Section -->
                <section class="trending-section">
                    <div class="section-header">
                        <h2 class="section-title">Trending Ads</h2>
                        <div class="section-underline"></div>
                    </div>
                    
                    <div class="ads-container">
                        <div class="ad-card" onclick="viewAd(1)">
                            <div class="ad-image"></div>
                            <div class="price-tag">
                                <span class="price-text">LKR 4000</span>
                            </div>
                            <h3 class="ad-title">Foot Cycle</h3>
                            <div class="ad-details">
                                <span class="company-name">AZUZ Pvt Ltd</span>
                                <img src="../assets/images/img_carbontimefilled.svg" alt="Time" class="time-icon" />
                                <span class="time-left">4 days left</span>
                            </div>
                        </div>
                        
                        <div class="ad-card" onclick="viewAd(2)">
                            <div class="ad-image"></div>
                            <div class="price-tag">
                                <span class="price-text">LKR 4000</span>
                            </div>
                            <h3 class="ad-title">Foot Cycle</h3>
                            <div class="ad-details">
                                <span class="company-name">AZUZ Pvt Ltd</span>
                                <img src="../assets/images/img_carbontimefilled.svg" alt="Time" class="time-icon" />
                                <span class="time-left">4 days left</span>
                            </div>
                        </div>
                        
                        <div class="ad-card" onclick="viewAd(3)">
                            <div class="ad-image"></div>
                            <div class="price-tag">
                                <span class="price-text">LKR 4000</span>
                            </div>
                            <h3 class="ad-title">Foot Cycle</h3>
                            <div class="ad-details">
                                <span class="company-name">AZUZ Pvt Ltd</span>
                                <img src="../assets/images/img_carbontimefilled.svg" alt="Time" class="time-icon" />
                                <span class="time-left">4 days left</span>
                            </div>
                        </div>
                        
                        <div class="ad-card" onclick="viewAd(4)">
                            <div class="ad-image"></div>
                            <div class="price-tag">
                                <span class="price-text">LKR 4000</span>
                            </div>
                            <h3 class="ad-title">Foot Cycle</h3>
                            <div class="ad-details">
                                <span class="company-name">AZUZ Pvt Ltd</span>
                                <img src="../assets/images/img_carbontimefilled.svg" alt="Time" class="time-icon" />
                                <span class="time-left">4 days left</span>
                            </div>
                        </div>
                        
                        <div class="ad-card" onclick="viewAd(5)">
                            <div class="ad-image"></div>
                            <div class="price-tag">
                                <span class="price-text">LKR 4000</span>
                            </div>
                            <h3 class="ad-title">Foot Cycle</h3>
                            <div class="ad-details">
                                <span class="company-name">AZUZ Pvt Ltd</span>
                                <img src="../assets/images/img_carbontimefilled.svg" alt="Time" class="time-icon" />
                                <span class="time-left">4 days left</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Popular Ads Section -->
                <section class="popular-section">
                    <h2 class="section-title">Today Popular Ads</h2>
                    <div class="section-underline"></div>
                    
                    <div class="add-post-container">
                        <div class="add-post-content">
                            <h3>Start adding a new Post</h3>
                            <p>You can send the suggestion or request to the Bizbook Admin</p>
                        </div>
                        <button class="submit-button" onclick="submitPost()">
                            <span class="submit-text">Submit a Post</span>
                            <img src="../assets/images/img_tdesignarrowup.svg" alt="Arrow" class="submit-icon" />
                        </button>
                    </div>
                </section>
            </main>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="newsletter-section">
                    <div class="newsletter-info">
                        <h3>Subcribe Newsletter</h3>
                        <p>Subcribe Newsletter to get 10% discount or all Products</p>
                    </div>
                    
                    <div class="newsletter-form">
                        <input type="email" class="email-input" placeholder="Enter your e-mail" />
                        <button class="newsletter-submit" onclick="subscribeNewsletter()">Submit</button>
                    </div>
                    
                    <div class="social-icons">
                        <img src="../assets/images/img_frame.svg" alt="Twitter" class="social-icon" onclick="openSocial('twitter')" />
                        <img src="../assets/images/img_vector.svg" alt="LinkedIn" class="social-icon" onclick="openSocial('linkedin')" />
                        <img src="../assets/images/img_frame_blue_gray_300.svg" alt="Facebook" class="social-icon" onclick="openSocial('facebook')" />
                        <img src="../assets/images/img_frame_blue_gray_300_24x24.svg" alt="GitHub" class="social-icon" onclick="openSocial('github')" />
                    </div>
                </div>
                
                <div class="footer-divider"></div>
                
                <div class="footer-links">
                    <div class="footer-brand">
                        <img src="../assets/images/img_footerlogo.png" alt="LankaBuy Logo" class="footer-logo" />
                        <p class="brand-description">Design amazing digital experiences that create more happy in the world.</p>
                        <p class="copyright">© Copyright 2024, All Rights Reserved by Logo</p>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Product</h4>
                        <a href="#" class="footer-link">Overview</a>
                        <a href="#" class="footer-link">Features</a>
                        <a href="#" class="footer-link">Solutions<span class="new-badge">New</span></a>
                        <a href="#" class="footer-link">Tutorials</a>
                        <a href="#" class="footer-link">Pricing</a>
                        <a href="#" class="footer-link">Releases</a>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Company</h4>
                        <a href="#" class="footer-link">About us</a>
                        <a href="#" class="footer-link">Careers</a>
                        <a href="#" class="footer-link">Press</a>
                        <a href="#" class="footer-link">News</a>
                        <a href="#" class="footer-link">Media kit</a>
                        <a href="#" class="footer-link">Contact</a>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Resources</h4>
                        <a href="#" class="footer-link">Blog</a>
                        <a href="#" class="footer-link">Newsletter</a>
                        <a href="#" class="footer-link">Events</a>
                        <a href="#" class="footer-link">Help centre</a>
                        <a href="#" class="footer-link">Tutorials</a>
                        <a href="#" class="footer-link">Support</a>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Social</h4>
                        <a href="#" class="footer-link">Twitter</a>
                        <a href="#" class="footer-link">LinkedIn</a>
                        <a href="#" class="footer-link">Facebook</a>
                        <a href="#" class="footer-link">GitHub</a>
                        <a href="#" class="footer-link">AngelList</a>
                        <a href="#" class="footer-link">Dribbble</a>
                    </div>
                    
                    <div class="footer-column">
                        <h4>Legal</h4>
                        <a href="#" class="footer-link">Terms</a>
                        <a href="#" class="footer-link">Privacy</a>
                        <a href="#" class="footer-link">Cookies</a>
                        <a href="#" class="footer-link">Licenses</a>
                        <a href="#" class="footer-link">Settings</a>
                        <a href="#" class="footer-link">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Search functionality
        function performSearch() {
            const searchInput = document.querySelector('.search-input');
            const query = searchInput.value.trim();
            if (query) {
                console.log('Searching for:', query);
                alert(`Searching for: ${query}`);
                // Simulate search results
                searchInput.value = '';
            } else {
                alert('Please enter a search term');
            }
        }

        // Category selection
        function selectCategory(category) {
            console.log('Selected category:', category);
            alert(`Selected category: ${category.charAt(0).toUpperCase() + category.slice(1)}`);
            
            // Visual feedback
            const cards = document.querySelectorAll('.category-card');
            cards.forEach(card => {
                card.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';
            });
            
            event.target.style.backgroundColor = 'rgba(65, 75, 209, 0.8)';
            
            // Reset after 2 seconds
            setTimeout(() => {
                event.target.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';
            }, 2000);
        }

        // Sidebar menu toggle
        function toggleSubmenu(menuType) {
            console.log('Toggling submenu:', menuType);
            
            // Simulate submenu expansion
            const menuItem = event.target.closest('.menu-item');
            const arrow = menuItem.querySelector('.menu-arrow');
            
            if (arrow) {
                const isExpanded = arrow.style.transform === 'rotate(180deg)';
                arrow.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                arrow.style.transition = 'transform 0.3s ease';
                
                // Show submenu options
                if (!isExpanded) {
                    const submenuOptions = getSubmenuOptions(menuType);
                    alert(`${menuType.toUpperCase()} submenu options:\
${submenuOptions.join('\
')}`);
                }
            }
        }

        function getSubmenuOptions(menuType) {
            const options = {
                'leads': ['New Leads', 'Pending Enquiries', 'Responded Leads', 'Archived Leads'],
                'payment': ['Payment History', 'Promotions', 'Billing', 'Subscription'],
                'profile': ['Business Profile', 'Personal Profile', 'Settings', 'Verification'],
                'activities': ['Recent Activities', 'Login History', 'Notifications', 'Reports']
            };
            return options[menuType] || [];
        }

        // View ad details
        function viewAd(adId) {
            console.log('Viewing ad:', adId);
            alert(`Viewing ad details for Foot Cycle (ID: ${adId})\
\
Price: LKR 4000\
Company: AZUZ Pvt Ltd\
Time left: 4 days\
\
Click OK to view full details.`);
        }

        // Submit new post
        function submitPost() {
            console.log('Submitting new post');
            const confirmation = confirm('Are you ready to submit a new post?\
\
This will redirect you to the post creation form.');
            if (confirmation) {
                alert('Redirecting to post creation form...');
                // Simulate form opening
                setTimeout(() => {
                    alert('Post creation form opened!\
\
Please fill in the required details:\
- Category\
- Title\
- Description\
- Price\
- Images\
- Contact Information');
                }, 1000);
            }
        }

        // Newsletter subscription
        function subscribeNewsletter() {
            const emailInput = document.querySelector('.email-input');
            const email = emailInput.value.trim();
            
            if (email && isValidEmail(email)) {
                console.log('Subscribing email:', email);
                alert(`Thank you for subscribing!\
\
Email: ${email}\
\
You will receive a 10% discount code shortly.`);
                emailInput.value = '';
                
                // Visual feedback
                const submitBtn = document.querySelector('.newsletter-submit');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Subscribed!';
                submitBtn.style.backgroundColor = '#4CAF50';
                
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.style.backgroundColor = '#fff41d';
                }, 3000);
            } else {
                alert('Please enter a valid email address');
                emailInput.focus();
            }
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Social media links
        function openSocial(platform) {
            console.log('Opening social platform:', platform);
            const urls = {
                'twitter': 'https://twitter.com/lankabuy',
                'linkedin': 'https://linkedin.com/company/lankabuy',
                'facebook': 'https://facebook.com/lankabuy',
                'github': 'https://github.com/lankabuy'
            };
            
            alert(`Opening ${platform.charAt(0).toUpperCase() + platform.slice(1)}...\
\
URL: ${urls[platform] || '#'}`);
            // window.open(urls[platform] || '#', '_blank');
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('LankaBuy Ads Dashboard loaded successfully');
            
            // Add keyboard support for search
            const searchInput = document.querySelector('.search-input');
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
            
            // Add keyboard support for newsletter
            const emailInput = document.querySelector('.email-input');
            emailInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    subscribeNewsletter();
                }
            });
            
            // Add hover effects to cards
            const adCards = document.querySelectorAll('.ad-card');
            adCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                    this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });
            
            // Simulate loading trending ads
            setTimeout(() => {
                console.log('Trending ads loaded');
            }, 1000);
        });

        // Handle window resize for responsive behavior
        window.addEventListener('resize', function() {
            const width = window.innerWidth;
            console.log('Window resized to:', width);
            
            if (width <= 768) {
                console.log('Mobile view activated');
            } else if (width <= 1200) {
                console.log('Tablet view activated');
            } else {
                console.log('Desktop view activated');
            }
        });
    </script>
</body>
</html>
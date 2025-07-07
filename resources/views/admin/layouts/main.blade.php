<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Responsive</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin/menu-signup-login-modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
</head>
<body>
    <header class="header">
        @include('admin.partials.navbar')
        <input type="checkbox" id="menu-toggle" class="d-none">
        @include('admin.partials.sidebar')
        @include('admin.partials.login-modal')
        @include('admin.partials.signup-modal')
    </header>


       <div class="main-container"> 
        <div class="container-fluid">

            <!-- Menu Toggle Button  -->
            <button id="menu-toggle-side" class="btn btn-outline-secondary"
                style="position: fixed; top: 113px; left: 3px; z-index: 1100;">
                <i class="bi bi-list"></i>
            </button>

            <div class="row min-vh-100">
                <!-- Sidebar -->
                <aside id="sidebar-content" aria-label="Sidebar navigation" class="sidebar collapsed p-4 pt-5">
                    <div class="user-profile d-flex mb-4 mt-3">
                    <img src="images/mine.jpg" alt="User Avatar" class="user-avatar" />
                    <div class="user-info ms-3">
                        <h5 class="mb-0">M.A.N. Lakshan</h5>
                        <small>Joined 02 Jun 2025</small>
                    </div>
                    <img src="{{asset('images/img_mingcutenotificationfill.svg') }}" alt="Notifications" class="notification-icon ms-3" />
                    </div>

                   <button class="menu-item toggle-submenu" onclick="loadDashboard()" type="button" aria-expanded="false" aria-controls="submenu-listings">
                        <img src="{{asset('images/dashboard.png') }}" alt="Dashboard" class="me-2 menu-logo" />
                        <span>My Dashboard</span>
                        
                    </button>


                    <!-- Menu Items with Submenus -->

                    <!-- All Listings -->
                    <button class="menu-item toggle-submenu mt-4" type="button" aria-expanded="false" aria-controls="submenu-listings">
                    <img src="{{asset('images/module.png') }}" alt="Listings" class="menu-logo" />
                    <span>All Listings</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-listings" role="region" aria-hidden="true">
                    <button onclick="loadAddnewlisting()">Add New Listing</button>
                    <button onclick="loadAddPost()">Add new post</button>
                    <button onclick="loadAddnewjob()">Add new job</button>
                    <button onclick="loadAddnewproduct()">Add new product</button>
                    
                    </div>

                    <!-- Blog -->
                    <button class="menu-item toggle-submenu mt-2" type="button" aria-expanded="false" aria-controls="submenu-leads">
                    <img src="{{asset('images/blog-icon.png') }}" alt="Blog" class="menu-logo" />
                    <span>Blog</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-leads" role="region" aria-hidden="true">
                        <button onclick="loadAddneweblog()">Add new blog</button>
                        <button onclick="loadblogDetails()">Blog Details</button>
                        <button onclick="loadDraftBlog()">Blog Draft</button>
                        <button onclick="loadbinBlog()">Blog Bin</button>
                        <button onclick="loadblogTag()">Blog Tag</button>
                    </div>

                    <!-- Event -->
                    <button class="menu-item toggle-submenu mt-2" type="button" aria-expanded="false" aria-controls="submenu-leads">
                    <img src="{{asset('images/event-icon.png') }}" alt="Event" class="menu-logo" />
                    <span>Event</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-leads" role="region" aria-hidden="true">
                        <button onclick="loadAddnewevent()">Add new event</button>
                        <button onclick="loadDraftEvent()">Draft Event</button>
                        <button onclick="loadbinEvent()">Bin Event</button>
                    </div>

                    <!-- Leads & Enquiry -->
                    <button class="menu-item toggle-submenu mt-2" type="button" aria-expanded="false" aria-controls="submenu-leads">
                    <img src="{{asset('images/leads.jpg') }}" alt="Leads" class="menu-logo" />
                    <span>Leads & Enquiry</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-leads" role="region" aria-hidden="true">
                        <button onclick="loadNewEnquiry()">New Enquiry</button>
                        <button>Follow Ups</button>
                    </div>

                    <!-- Payment & Promotion -->
                    <button class="menu-item toggle-submenu mt-2" type="button" aria-expanded="false" aria-controls="submenu-payment">
                    <img src="{{asset('images/payment.png') }}" alt="Payment" class="menu-logo" />
                    <span>Payment & Promotion</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-payment" role="region" aria-hidden="true">
                        <button>Payment History</button>
                        <button>Promotions</button>
                    </div>

                    <!-- Profile Pages -->
                    <button class="menu-item toggle-submenu mt-2" onclick="loadUserProfile()" type="button" aria-expanded="false" aria-controls="submenu-profile">
                    <img src="{{asset('images/profile.png') }}" alt="Profile" class="menu-logo" />
                    <span>Profile Pages</span>
            
                    </button>
                    

                    <!-- My Activities -->
                    <button class="menu-item toggle-submenu mt-2" type="button" aria-expanded="false" aria-controls="submenu-activities">
                    <img src="{{asset('images/activities.png') }}" alt="Activities" class="menu-logo" />
                    <span>My Activities</span>
                    <i class="bi bi-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="submenu" id="submenu-activities" role="region" aria-hidden="true">
                        <button>Recent Activities</button>
                        <button>Reports</button>
                    </div>

                    <!-- Settings -->
                    <button class="menu-item toggle-submenu mt-5" onclick="loadProfileSetting()" type="button" aria-expanded="false" aria-controls="submenu-settings">
                    <img src="{{asset('images/settings.png') }}" alt="Settings" class="menu-logo" />
                    <span>Settings</span>
                    
                    </button>
                    
                </aside>
                  
                <!-- Main Form Area -->
                
                <main class="col-12 p-4 form-area" id="form-area">
                     </main>      
            </div>
        </div>
    </div>


     
   <div id="footer" class="footer-area">
         @include('admin.partials.footer')
         
    </div>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
       <script>
        
        // sidebar also show only icone !!!!!!!!!!!!!!!!!!!!!!!
        document.addEventListener("DOMContentLoaded", () => {
            const sidebar = document.getElementById("sidebar-content");
            const toggleBtn = document.getElementById("menu-toggle-side"); 
            const formArea = document.querySelector(".form-area");
            const footerArea= document.querySelector(".footer-area");

            const toggleSubmenuButtons = document.querySelectorAll(".toggle-submenu");

            // onload time dasboard dispaly
            loadDashboard(); 
 
            // Initialize sidebar state on page load

            if (sidebar.classList.contains("active")) {
                sidebar.dataset.manualExpand = "true";
                formArea.classList.add("shifted");
                footerArea.classList.add("shifted");
            } else {
                sidebar.dataset.manualExpand = "false";
                formArea.classList.remove("shifted");
                footerArea.classList.remove("shifted");
            }
            // Hide all submenus on page load to ensure they start collapsed
            document.querySelectorAll(".submenu").forEach(submenu => {
                submenu.classList.remove("show");
                submenu.setAttribute("aria-hidden", "true");
                if (submenu.previousElementSibling && submenu.previousElementSibling.classList.contains('menu-item')) {
                    submenu.previousElementSibling.classList.remove("active");
                    submenu.previousElementSibling.setAttribute("aria-expanded", "false");
                }
            });

            // Function to expand the sidebar
            function expandSidebar() {
                sidebar.classList.add("active");
                formArea.classList.add("shifted");
                footerArea.classList.add("shifted");
            }

            // Function to collapse the sidebar
            function collapseSidebar() {
                if (sidebar.dataset.manualExpand === "false") {
                    sidebar.classList.remove("active");
                    formArea.classList.remove("shifted");
                    footerArea.classList.remove("shifted");

                    // Close all submenus when sidebar collapses due to hover out
                    document.querySelectorAll(".submenu.show").forEach(openSubmenu => {
                        openSubmenu.classList.remove("show");
                        openSubmenu.setAttribute("aria-hidden", "true");
                        if (openSubmenu.previousElementSibling) {
                            openSubmenu.previousElementSibling.classList.remove("active");
                            openSubmenu.previousElementSibling.setAttribute("aria-expanded", "false");
                        }
                    });
                }
            }

            if (toggleBtn) {
                toggleBtn.addEventListener("click", () => {
                    if (sidebar.classList.contains("active")) {
                        // If it's active, collapse it and mark as not manually expanded
                        sidebar.classList.remove("active");
                        formArea.classList.remove("shifted");
                        footerArea.classList.remove("shifted");
                        sidebar.dataset.manualExpand = "false";
                    } else {
                        // If it's collapsed, expand it and mark as manually expanded
                        sidebar.classList.add("active");
                        formArea.classList.add("shifted");
                        footerArea.classList.add("shifted");
                        sidebar.dataset.manualExpand = "true";
                    }

                    // Close all submenus when sidebar collapses manually
                    if (!sidebar.classList.contains("active")) {
                        document.querySelectorAll(".submenu.show").forEach(openSubmenu => {
                            openSubmenu.classList.remove("show");
                            openSubmenu.setAttribute("aria-hidden", "true");
                            if (openSubmenu.previousElementSibling) {
                                openSubmenu.previousElementSibling.classList.remove("active");
                                openSubmenu.previousElementSibling.setAttribute("aria-expanded", "false");
                            }
                        });
                    }
                });
            }

            // --- Sidebar Hover Auto-Expand/Collapse ---
            sidebar.addEventListener("mouseenter", () => {
               
                if (sidebar.dataset.manualExpand === "false") {
                    expandSidebar();
                }
            });

            sidebar.addEventListener("mouseleave", () => {
                
                if (sidebar.dataset.manualExpand === "false") { 
                    collapseSidebar();
                }
            });

            // --- Submenu open/close logic ---
            toggleSubmenuButtons.forEach(button => {
                button.addEventListener("click", function () {
                    const submenu = this.nextElementSibling;
                    // Check if next element exists and is a submenu
                    // We'll keep this check but move the 'return' later
                    const isSubmenuPresent = submenu && submenu.classList.contains('submenu');

                    const isShown = isSubmenuPresent && submenu.classList.contains("show"); // Only check isShown if submenu exists

                    // Close all other submenus first, if they are open
                    document.querySelectorAll(".submenu.show").forEach(openSubmenu => {
                        if (openSubmenu !== submenu) { 
                            openSubmenu.classList.remove("show");
                            openSubmenu.setAttribute("aria-hidden", "true");
                            // Also update the parent button's state
                            if (openSubmenu.previousElementSibling) {
                                openSubmenu.previousElementSibling.classList.remove("active");
                                openSubmenu.previousElementSibling.setAttribute("aria-expanded", "false");
                            }
                        }
                    });

                    // Now, toggle the clicked button's active state and aria-expanded
                    if (this.classList.contains("active")) {
                        this.classList.remove("active");
                        this.setAttribute("aria-expanded", "false");
                    } else {
                        this.classList.add("active");
                        this.setAttribute("aria-expanded", "true");
                    }

                    // Only toggle the submenu's 'show' class and aria-hidden if a submenu actually exists
                    if (isSubmenuPresent) {
                        if (isShown) {
                            submenu.classList.remove("show");
                            this.classList.remove("active");
                            submenu.setAttribute("aria-hidden", "true");
                        } else {
                            submenu.classList.add("show");
                            this.classList.add("active");
                            submenu.setAttribute("aria-hidden", "false");
                        }
                    }
                    // If no submenu is present, the button's active state and aria-expanded are still toggled,
                    // and other submenus are still closed, but nothing happens to 'submenu.classList.add("show")' etc.
                });
            });
        });
        
        // end of the sidbar!!!!!!!!!!!!!!!!!!!!!

        // Load external components
            async function loadComponent(id, file, callback) {
                const response = await fetch(file);
                const html = await response.text();
                document.getElementById(id).innerHTML = html;
                if (typeof callback === "function") callback(); // Run after loading
            }

            loadComponent("navbar", "/load-navbar");
            loadComponent("footer", "/load-footer");
            loadComponent("sidebar", "/load-sidebar");
            loadComponent("login-modal", "/load-login-modal");

            // ✅ Load signup modal and initialize logic after it's loaded
            loadComponent("signup-modal", "signup-modal.html", () => {
                const businessRadio = document.getElementById('businessRadio');
                const personalRadio = document.getElementById('personalRadio');
                const businessForm = document.getElementById('businessForm');
                const personalForm = document.getElementById('personalForm');

                if (businessRadio && personalRadio) {
                    businessRadio.addEventListener('change', () => {
                        businessForm.classList.remove('d-none');
                        personalForm.classList.add('d-none');
                    });

                    personalRadio.addEventListener('change', () => {
                        personalForm.classList.remove('d-none');
                        businessForm.classList.add('d-none');
                    });
                }
            });
        
            // Start load html file with Auto execute script using AJAX 

            function loadDashboard() {
                fetch("/admin-dashboard")
                    .then(response => {
                        if (!response.ok) throw new Error("Network response was not ok");
                        return response.text();
                    })
                    .then(data => {
                        const formArea = document.getElementById("form-area");
                        //  Create a temporary container to extract scripts
                        const tempDiv = document.createElement("div");
                        tempDiv.innerHTML = data;

                        //  Extract scripts separately and remove other script
                        const scripts = tempDiv.querySelectorAll("script");
                        scripts.forEach(script => script.remove());

                        //  Then set HTML content without scripts and anmation set
                        formArea.innerHTML = tempDiv.innerHTML;
                        formArea.classList.remove("fade-in");
                        void formArea.offsetWidth; 
                        formArea.classList.add("fade-in");

                        //  Append and execute scripts
                        scripts.forEach(oldScript => {
                            const newScript = document.createElement("script");

                            // If it's an external script
                            if (oldScript.src) {
                                newScript.src = oldScript.src;
                            } else {
                                newScript.textContent = oldScript.textContent;
                            }

                            document.body.appendChild(newScript); // attach to body to execute
                        });
                    })
                    .catch(error => {
                        console.error("Error loading content:", error);
                    });
            }
            function loadAddnewlisting() {
                    fetch("/admin-addnewlisting")
                        .then(response => {
                            if (!response.ok) throw new Error("Network response was not ok");
                            return response.text();
                        })
                        .then(data => {
                            const formArea = document.getElementById("form-area");

                            // Create a temporary container to extract HTML and scripts
                            const tempDiv = document.createElement("div");
                            tempDiv.innerHTML = data;

                            // Extract scripts and remove them from HTML content
                            const scripts = tempDiv.querySelectorAll("script");
                            scripts.forEach(script => script.remove());

                            // Inject the cleaned HTML
                            formArea.innerHTML = tempDiv.innerHTML;
                            formArea.classList.remove("fade-in");
                            void formArea.offsetWidth; // reflow for animation
                            formArea.classList.add("fade-in");

                            // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                            scripts.forEach(oldScript => {
                                const newScript = document.createElement("script");

                                if (oldScript.src) {
                                    // Avoid appending duplicate external scripts
                                    if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                        newScript.src = oldScript.src;
                                        document.body.appendChild(newScript);
                                    }
                                } else {
                                    // Inline script — wrapped in local scope via IIFE
                                    newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                                    document.body.appendChild(newScript);
                                }
                            });
                        })
                        .catch(error => {
                            console.error("Error loading content:", error);
                        });
                }


            function loadAddPost(){
                fetch("/admin-add-post")
                    .then(response => {
                        if (!response.ok) throw new Error("Network response was not ok");
                        return response.text();
                    })
                    .then(data => {
                        const formArea = document.getElementById("form-area");
                        //  Create a temporary container to extract scripts
                        const tempDiv = document.createElement("div");
                        tempDiv.innerHTML = data;

                        //  Extract scripts separately and remove other script
                        const scripts = tempDiv.querySelectorAll("script");
                        scripts.forEach(script => script.remove());

                        //  Then set HTML content without scripts and anmation set
                        formArea.innerHTML = tempDiv.innerHTML;
                        formArea.classList.remove("fade-in");
                        void formArea.offsetWidth; 
                        formArea.classList.add("fade-in");

                        //  Append and execute scripts
                        scripts.forEach(oldScript => {
                            const newScript = document.createElement("script");

                            // If it's an external script
                            if (oldScript.src) {
                                newScript.src = oldScript.src;
                            } else {
                                newScript.textContent = oldScript.textContent;
                            }

                            document.body.appendChild(newScript); // attach to body to execute
                        });
                    })
                    .catch(error => {
                    console.error("Error loading content:", error);
                    });
            }
            function loadAddnewjob(){
                fetch("/admin-add-job")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");
                    //  Create a temporary container to extract scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    //  Extract scripts separately and remove other script
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    //  Then set HTML content without scripts and anmation set
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; 
                    formArea.classList.add("fade-in");

                    //  Append and execute scripts
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        // If it's an external script
                        if (oldScript.src) {
                            newScript.src = oldScript.src;
                        } else {
                            newScript.textContent = oldScript.textContent;
                        }

                        document.body.appendChild(newScript); // attach to body to execute
                    });
                })
                .catch(error => {
                console.error("Error loading content:", error);
                });
            }
            function loadAddnewproduct(){
                fetch("/admin-add-product")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");
                    //  Create a temporary container to extract scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    //  Extract scripts separately and remove other script
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    //  Then set HTML content without scripts and anmation set
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; 
                    formArea.classList.add("fade-in");

                    //  Append and execute scripts
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        // If it's an external script
                        if (oldScript.src) {
                            newScript.src = oldScript.src;
                        } else {
                            newScript.textContent = oldScript.textContent;
                        }

                        document.body.appendChild(newScript); // attach to body to execute
                    });
                })
                .catch(error => {
                console.error("Error loading content:", error);
                });
            }

            /*  blog menu */
            function loadAddneweblog(){
                fetch("/admin-add-blog")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadDraftBlog(){
                fetch("/admin-draftBlog")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadblogDetails(){
                fetch("/admin-blogPost")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadbinBlog(){
                fetch("/admin-binBlog")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadblogTag(){
                fetch("/admin-blogTag")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            
             /* Event menu */
            function loadAddnewevent(){
                fetch("/admin-add-event")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadDraftEvent(){
                fetch("/admin-draftEvent")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }
            function loadbinEvent(){
                fetch("/admin-binEvent")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");

                    // Create a temporary container to extract HTML and scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    // Extract scripts and remove them from HTML content
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    // Inject the cleaned HTML
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; // reflow for animation
                    formArea.classList.add("fade-in");

                    // Execute scripts safely (use IIFE-wrapped scripts in the HTML)
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        if (oldScript.src) {
                            // Avoid appending duplicate external scripts
                            if (!document.querySelector(`script[src="${oldScript.src}"]`)) {
                                newScript.src = oldScript.src;
                                document.body.appendChild(newScript);
                            }
                        } else {
                            // Inline script — wrapped in local scope via IIFE
                            newScript.textContent = `(function(){\n${oldScript.textContent}\n})();`;
                            document.body.appendChild(newScript);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                });
            }


            
            function loadUserProfile(){
                fetch("/admin-user-profile")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");
                    //  Create a temporary container to extract scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    //  Extract scripts separately and remove other script
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    //  Then set HTML content without scripts and anmation set
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; 
                    formArea.classList.add("fade-in");

                    //  Append and execute scripts
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        // If it's an external script
                        if (oldScript.src) {
                            newScript.src = oldScript.src;
                        } else {
                            newScript.textContent = oldScript.textContent;
                        }

                        document.body.appendChild(newScript); // attach to body to execute
                    });
                })
                .catch(error => {
                console.error("Error loading content:", error);
                });
            }
            function loadProfileSetting(){
                fetch("/admin-profile-setting")
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    const formArea = document.getElementById("form-area");
                    //  Create a temporary container to extract scripts
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = data;

                    //  Extract scripts separately and remove other script
                    const scripts = tempDiv.querySelectorAll("script");
                    scripts.forEach(script => script.remove());

                    //  Then set HTML content without scripts and anmation set
                    formArea.innerHTML = tempDiv.innerHTML;
                    formArea.classList.remove("fade-in");
                    void formArea.offsetWidth; 
                    formArea.classList.add("fade-in");

                    //  Append and execute scripts
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement("script");

                        // If it's an external script
                        if (oldScript.src) {
                            newScript.src = oldScript.src;
                        } else {
                            newScript.textContent = oldScript.textContent;
                        }

                        document.body.appendChild(newScript); // attach to body to execute
                    });
                })
                .catch(error => {
                console.error("Error loading content:", error);
                });
            }
            // end of load html file

        
    </script>
     <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>  
</body>
</html>




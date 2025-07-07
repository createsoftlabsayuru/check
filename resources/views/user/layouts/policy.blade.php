<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms of Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/terms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
</head>

<body>
    <input type="checkbox" id="menu-toggle" class="d-none">
    <nav class="navbar navbar-expand-lg fixed-top py-3 border-bottom">
    <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
  
      <!-- Left Section: Menu Icon + Logo + Breadcrumb -->
      <div class="d-flex align-items-center gap-3">
        <!-- Menu Icon (Mobile) -->
        <label for="menu-toggle" class="menu-icon-wrapper text-white fs-4 d-lg-none m-0">
          <i class='bx bx-menu' id="menu-icon"></i>
        </label>
  
        <!-- Logo -->
        <a class="navbar-brand d-flex flex-column align-items-center p-0" href="#">
          <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold" >LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">For Business</span>
          
        </div>
  
      </div>
  
      <!-- Right: Buttons -->
      <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
        <button class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
        <button class="btn btn-signup text-white" data-bs-toggle="modal"
          data-bs-target="#registerModal">Sign Up</button>
      </div>
    </div>
  </nav>
    <!-- Sidebar Menu -->
    @include('user.partials.sidebar')
    @include('user.partials.login-modal')
    @include('user.partials.signup-modal')

    <div class="header">
        <a href="add-business 3.html"><button class="back-arrow" onclick="history.back()"><i class="bi bi-arrow-left"></i></button></a>
        <div class="header-text">
            <h1>Privacy Policy</h1>
            <p>Committed to Protecting Your Privacy & Information</p>
        </div>
    </div>
      

    <div class="container my-5">
        <div class="p-4 border border-primary-subtle rounded-2 shadow-sm bg-white">
            <p><strong>Effective Date: June 6, 2025</strong></p>
            <p>
                At [YourPlatformName], we are committed to protecting your privacy. This Privacy Policy explains how we
                collect, use, and safeguard your personal information when you use our website and services.
            </p>
    
            <p><strong>1. What Information We Collect</strong></p>
            <p>We may collect the following information:</p>
            <p><span class="text-primary">Personal Information:</span></p>
            <ul>
                <li>Full Name</li>
                <li>Email Address</li>
                <li>Phone Number</li>
                <li>Profile Picture</li>
                <li>Business Registration Details</li>
            </ul>
            <p><span class="text-primary">Usage Information:</span></p>
            <ul>
                <li>IP Address</li>
                <li>Browser and device type</li>
                <li>Access time and pages visited</li>
            </ul>
            <p><span class="text-primary">Cookies:</span></p>
            <ul>
                <li>We use cookies to improve your browsing experience and personalize content.</li>
            </ul>
    
            <p><strong>2. How We Use Your Information</strong></p>
            <ul>
                <li>Create and manage user accounts</li>
                <li>Enable business listings, investments, and tender postings</li>
                <li>Provide customer support</li>
                <li>Send important updates and notifications</li>
                <li>Improve and monitor our platform’s performance</li>
                <li>Comply with legal obligations</li>
            </ul>
    
            <p><strong>3. How We Share Your Information</strong></p>
            <p>We may share your data with:</p>
            <ul>
                <li>Trusted service providers (e.g., hosting, email, analytics)</li>
                <li>Legal authorities when required by law</li>
                <li>Other users (only with your permission, e.g., business contact info)</li>
                <li class="fw-bold">We do NOT sell your personal data to third parties.</li>
            </ul>
    
            <p><strong>4. Cookies Policy</strong></p>
            <ul>
                <li>Remember your preferences</li>
                <li>Analyze site traffic</li>
                <li>Provide personalized ads (optional)</li>
            </ul>
            <p>You can manage or disable cookies in your browser settings.</p>
    
            <p><strong>5. How We Protect Your Information</strong></p>
            <p>We take data security seriously. We implement:</p>
            <ul>
                <li>SSL encryption</li>
                <li>Secured servers</li>
                <li>Access control systems</li>
                <li>Regular system updates</li>
            </ul>
    
            <p><strong>6. Your Rights</strong></p>
            <p>You have the right to:</p>
            <ul>
                <li>Access and update your personal data</li>
                <li>Delete your account and data</li>
                <li>Opt out of marketing communications</li>
                <li>Request a copy of your stored information</li>
            </ul>
            <p>To exercise these rights, contact us at: <a
                    href="mailto:support@yourplatformname.com">support@yourplatformname.com</a></p>
    
            <p><strong>7. Data Retention</strong></p>
            <ul>
                <li>As long as your account is active</li>
                <li>For legal and audit purposes after deactivation (up to 12 months)</li>
            </ul>
    
            <p><strong>8. Changes to This Policy</strong></p>
            <p>We may update this Privacy Policy. We will notify users of major changes through email or platform
                notifications. You are advised to review this page periodically.</p>
    
            <p><strong>Contact Us</strong></p>
            <p>If you have any questions about this Privacy Policy, contact us:</p>
            <ul>
                <li><i class="bi bi-envelope-fill me-2"></i>Email: <a href="mailto:support@yourplatformname.com">support@yourplatformname.com</a></li>
                <li><i class="bi bi-telephone-fill me-2"></i>Phone: +94 XXX XXX XXX</li>
                <li><i class="bi bi-globe me-2"></i>Website: <a href="https://yourplatformname.com">www.yourplatformname.com</a></li>
            </ul>
        </div>
    </div>
    @include('user.partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const businessRadio = document.getElementById('businessRadio');
          const personalRadio = document.getElementById('personalRadio');
          const businessForm = document.getElementById('businessForm');
          const personalForm = document.getElementById('personalForm');
      
          // Listen for changes on the radio buttons
          businessRadio.addEventListener('change', function () {
            if (this.checked) {
              businessForm.classList.remove('d-none');
              personalForm.classList.add('d-none');
            }
          });
      
          personalRadio.addEventListener('change', function () {
            if (this.checked) {
              personalForm.classList.remove('d-none');
              businessForm.classList.add('d-none');
            }
          });
        });
      </script>
</body>

</html>
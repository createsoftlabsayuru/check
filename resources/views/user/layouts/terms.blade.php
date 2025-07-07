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
          <span class="fw-bold" id="breadcrumb-main-page">For Business</span>
          
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
        <a href="{{ route('user.addBusiness3') }}"><button class="back-arrow" onclick="history.back()"><i class="bi bi-arrow-left"></i></button></a>
        <div class="header-text">
            <h1>Term of Service</h1>
            <p>Know Your Rights and Responsibilities</p>
        </div>
    </div>
      

    <div class="content-box mt-5">
        <p class="updated">Last Updated on July 10, 2024.</p>
        <p>Welcome to [YourPlatformName.com] (“we”, “our”, “the Platform”). By accessing or using our website and
            services, you agree to comply with and be bound by the following Terms and Conditions. Please read them
            carefully.</p>

        <h2>1. Introduction</h2>
        <p>These Terms govern your use of our platform, including business listings, investment opportunities, and
            tenders. These terms apply to all registered users, including business owners, investors, and general
            visitors.</p>

        <h2>2. User Eligibility</h2>
        <ul>
            <li>You must be at least 18 years old to use this platform.</li>
            <li>By creating an account, you confirm that all information provided is true and accurate.</li>
            <li>You agree not to use the platform for any unlawful or unauthorized purposes.</li>
        </ul>

        <h2>3. Business Listings</h2>
        <ul>
            <li>Business owners are solely responsible for the accuracy and completeness of the information posted.</li>
            <li>We reserve the right to approve, edit, or remove any listing that violates our content policy.</li>
            <li>Duplicate or fraudulent listings are strictly prohibited.</li>
        </ul>

        <h2>4. Investment Opportunities</h2>
        <ul>
            <li>Investment posts must include clear terms, goals, and contact information.</li>
            <li>We do not act as brokers and are not responsible for any agreements or losses between parties.</li>
            <li>Investors are advised to conduct their own due diligence.</li>
        </ul>

        <h2>5. Tenders</h2>
        <ul>
            <li>All tenders must be legitimate business opportunities related to products, services, or contracts.</li>
            <li>Platform users are expected to respond professionally and respectfully.</li>
            <li>Any misuse may lead to account suspension.</li>
        </ul>

        <h2>6. Fees and Payments</h2>
        <ul>
            <li>Some features may require payment (e.g., premium listings).</li>
            <li>All fees will be clearly stated, and payments are non-refundable unless otherwise specified.</li>
            <li>We use secure third-party payment processors.</li>
        </ul>

        <h2>7. Prohibited Activities</h2>
        <p>You agree not to:</p>
        <ul>
            <li>Post false, misleading, or deceptive content</li>
            <li>Engage in illegal or harmful activity</li>
            <li>Use bots, scrapers, or attempt unauthorized access</li>
            <li>Infringe on copyrights, trademarks, or privacy rights</li>
        </ul>

        <h2>8. Account Termination</h2>
        <ul>
            <li>We reserve the right to suspend or terminate your account without notice if you violate these terms.
            </li>
            <li>You may appeal a suspension by contacting our support team.</li>
        </ul>

        <h2>9. Intellectual Property</h2>
        <ul>
            <li>All content on this platform, including logos, text, and designs, is owned by [YourPlatformName].</li>
            <li>You may not reproduce, distribute, or modify any content without permission.</li>
        </ul>

        <h2>10. Changes to Terms</h2>
        <ul>
            <li>We may update these terms at any time.</li>
            <li>Continued use of the platform means you accept the updated terms.</li>
        </ul>

        <h2>11. Governing Law</h2>
        <p>These Terms shall be governed by the laws of [Your Country] without regard to its conflict of law principles.
        </p>

        <h2>Contact Us</h2>
        <p>If you have any questions about these Terms, please contact us at:</p>
        <p>Email: support@yourplatformname.com<br>Phone: +94 XXX XXX XXXX</p>
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
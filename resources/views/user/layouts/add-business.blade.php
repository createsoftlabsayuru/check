<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Business Form</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
    <link rel="stylesheet" href="{{ asset('css/user/add.css')}}">
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
          <span class="fw-bold">LankanBuy</span>
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
    

    <div class="d-flex flex-column flex-lg-row min-vh-100">
        <div class="form-section d-flex align-items-center justify-content-center px-4 py-5">
            <div class="form-content w-100" style="max-width: 480px;">
                <h5><strong>Hello!</strong> Let’s start with your business name</h5>
                <p class="text-muted">
                    Search for your business. If you can’t find it, you can add your business name so that we can help
                    you claim your Yelp Page.
                </p>

                <form class="mt-5" action="add-business.php" method="POST">
                  @csrf
                    <div class="floating-label mb-4">
                        <input type="text" id="business-name" required />
                        <label for="business-name">Your business name</label>
                    </div>

                    <div class="floating-label mb-4">
                        <input type="email" id="email" required />
                        <label for="email">Business email address</label>
                    </div>

                    <div class="phone-input-wrapper mb-4">
                        <label for="phone">Phone number</label>
                        <div class="phone-input-box">
                            <select id="country-code">
                                <option selected>+94</option>
                                <option>+1</option>
                                <option>+44</option>
                            </select>
                            <input type="tel" id="phone" required />
                        </div>
                    </div>
                      
                    <div class="floating-label mb-4">
                        <label for="business-type">Business Type</label>
                        <select id="business-type" required>
                            <option value="" disabled selected hidden></option>
                            <option>Service</option>
                            <option>Retail</option>
                        </select>
                    </div>

                    <button class="btn continue-btn w-100" type="submit">Continue</button>
                </form>
            </div>
        </div>

        <div class="image-section d-none d-lg-block">
            <img src="{{ asset('images/Business-cover1.jpg') }}" alt="Charts" class="img-fluid h-100 w-100 object-fit-cover" />
        </div>
    </div>
                        <!-- Footer Main -->
                        @include('user.partials.footer')

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
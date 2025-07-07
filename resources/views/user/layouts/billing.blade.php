<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user/billing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
</head>

<body style="background-color: rgba(230, 230, 250, 1);">
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
          <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Bill</span>
        </div>
  
      </div>
  
      <!-- Right: Buttons -->
      <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
        <button class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
        <button class="btn btn-signup text-white"  data-bs-toggle="modal"
          data-bs-target="#registerModal">Sign Up</button>
      </div>
    </div>
  </nav>
    <!-- Sidebar Menu -->
    @include('user.partials.sidebar')
    @include('user.partials.login-modal')
    @include('user.partials.signup-modal')

    <div class="container-fluid py-5" style="margin-top: 110px;">
         <a href="javascript:history.back()" class="go-back-btn">
            <i class="fas fa-arrow-left"></i> Go Back
            </a>
        <div class="row g-4">
            
            <!-- Left Summary -->
            <div class="col-md-6">
                <div class="card-box">
                    <h3 class="fw-bold">Rs. 3500 <small class="text-muted fs-6">Per Annually</small></h3>
                    <div class="d-flex justify-content-between mt-4">
                        <div>
                            <strong>LankaBuy Pro Package</strong>
                            <div class="text-muted small">Billed monthly</div>
                        </div>
                        <div>Rs.3500</div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rs.3500</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tax</span>
                        <span>Rs.0</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total due today</span>
                        <span>Rs.3500</span>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-md-6">
                <div class="card-box">
                    <h5 class="fw-bold">Contact information</h5>
                    <input type="email" class="form-control mb-4" value="jhon@gmail.com"
                        placeholder="Email" />

                    <h6 class="fw-bold">Payment method</h6>
                    <label class="form-label small">Card information</label>
                    <div class="card-input-wrapper">
                        <input type="text" class="card-input-field" placeholder="1234 5678 9012 3456">
                        <div class="card-icons">
                            <img src="{{ asset('images/amex.png') }}" alt="Visa" />
                            <img src="{{ asset('images/master.png') }}" alt="MasterCard" />
                            <img src="{{ asset('images/visa.png') }}" alt="PayPal" />
                            <img src="{{ asset('images/paypal.png') }}" alt="Amex" />
                        </div>
                    </div>                      
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="MM / YY">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="CVV">
                        </div>
                    </div>

                    <label class="form-label small">Cardholder name</label>
                    <input type="text" class="form-control mb-4" placeholder="Full name on card">

                    <label class="form-label small">Billing address</label>
                    <select class="form-select mb-2">
                        <option selected>SriLanka</option>
                    </select>
                    <input type="text" class="form-control mb-2" placeholder="Address line 1">
                    <input type="text" class="form-control mb-2" placeholder="Address line 2">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Postal code">
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input border border-dark rounded" id="termsCheck">
                        <label class="form-check-label small" for="termsCheck">
                            You’ll be charged the amount and at the frequency listed above until you cancel. We may
                            change our prices as described in our Terms of Use. You can cancel any time. By subscribing,
                            you agree to OpenAI's Terms of Use and Privacy Policy, and you authorize us to store your
                            payment method for renewals and other purchases.
                        </label>
                    </div>

                    <button class="btn btn-subscribe w-100">Subscribe</button>
                </div>
            </div>
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
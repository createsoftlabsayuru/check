<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/s-add.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <title>Business Cards</title>
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
        <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
        <span1 class="mx-2">&gt;</span>
        <span1 id="breadcrumb-page">Investment</span>
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

    <header class="about-header">
            
        <div class="about-overlay text-center">
            <h2 class="category-title">Find Investors for Your Business</h2>
            <p>Post your business investment opportunities and connect with potential investors.</p>
        </div>
        <form class="search-bar mx-auto mt-4" role="search">
            <div class="input-group search-input-wrapper">
                <input type="text" class="form-control search-input" placeholder="Search here..." aria-label="Search">
                <button class="btn search-btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </header>
      
    <div class="container py-4">
        <a href="javascript:history.back()" class="go-back-btn mb-4 mx-4">
            <i class="fas fa-arrow-left"></i> Go Back
          </a>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3 filter-bar">
            <div class="d-flex flex-column gap-2">
                <select class="form-select custom-select-sm w-auto">
                    <option selected disabled>Company</option>
                    <option value="plaid">Plaid</option>
                    <option value="stripe">Stripe</option>
                    <option value="square">Square</option>
                </select>
                <a href="{{ route('user.invest') }}">
                    <button class="btn btn-primary btn-sm d-flex align-items-center gap-1 w-auto mt-3">
                        Add Investment <i class="fas fa-plus"></i>
                    </button>
                </a>
            </div>
        
            <div class="d-flex align-items-center gap-2">
                <span class="fw-semibold">Sort :</span>
                <select class="form-select custom-select-sm w-auto">
                    <option selected>Recommended</option>
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                </select>
            </div>
        </div>
        
        

        <div class="row g-3">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card business-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center fw-bold fs-5">
                            <img src="{{ asset('images/palid.png') }}" class="me-2" alt="Logo">
                        </div>
                        <span class="badge time-badge">19 min ago</span>
                    </div>
            
                    <p class="desc-text mt-3">
                        A business description provides a concise overview of a company, including its purpose, products &amp;
                        services, target market, and unique selling points, often used in business plans and marketing materials.
                    </p>
            
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="price-text">LKR. 5000</span>
                        <span class="text-muted fw-medium">Saloon</span>
                    </div>
            
                    <p class="mb-1 mt-3">Colombo, SriLanka</p>
                    <p class="mb-0">plaidprivate@gmail.com</p>
            
                    <div class="text-end mt-3">
                        <i class="bi bi-pencil-fill fs-5 me-2"></i>
                        <i class="bi bi-trash-fill fs-5"></i>
                    </div>
                </div>
            </div>
              
        </div>
        <div class="d-flex justify-content-center my-4">
            <nav>
                <ul class="pagination custom-pagination mb-0">
                    <li class="page-item">
                        <a class="page-link rounded-circle" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link rounded-circle" href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-circle" href="#">...</a></li>
                    <li class="page-item"><a class="page-link rounded-circle" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="bottom-image-wrapper text-center px-3 pb-4">
            <img src="{{ asset('images/bottom-image.jpg') }}" alt="Banner" class="img-fluid bottom-image-cropped">
        </div>
          
  
  
    </div>
    <!-- Footer Main -->
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
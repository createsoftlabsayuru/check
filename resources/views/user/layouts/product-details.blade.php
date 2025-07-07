<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/product-details.css')}}">
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
              <span class="fw-bold">LankanBuy</span>
            </a>
      
            <!-- Breadcrumb (Visible on all sizes) -->
            <div class="d-flex align-items-center text-white small ms-2">
              <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
              <span1 class="mx-2">&gt;</span>
              <span1 id="breadcrumb-page">Product</span>
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
            <h2 class="category-title">PRODUCTS</h2>
            <p>Discover the perfect products for your lifestyle
            smart, reliable, and made just for you.</p>  
        </div>
    </header>

        <a href="javascript:history.back()" class="go-back-btn mt-3">
        <i class="fas fa-arrow-left"></i> Go Back
        </a>
    <div class="d-flex flex-wrap justify-content-center gap-5 mt-5">
    
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle p-2" >
              <img src="{{ asset('images/flat-color-icons_home.png') }}" class="icon-img mb-1 " alt="Home" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Home</div>
            </div>
          </a>
          
          <a href="{{ route('user.about')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/fluent-color_contact-card-24.png') }}" class="icon-img mb-1" alt="About" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">About</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.products')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/Phone Contact.png') }}" class="icon-img mb-1" alt="Product" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Product</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.service')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/flat-color-icons_services.png') }}" class="icon-img mb-1" alt="Service" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Service</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.job')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Jobs</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.blog')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Blogs</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.events')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 30px; height: 30px;" >
              <div class="label small text-white" style="font-size: 15px;">Event</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.advertising')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png') }}" class="icon-img mb-1" alt="Advertise" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Advertise</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.contact')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/phone.png') }}" class="icon-img mb-1" alt="Contact us" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Contact us</div>
            </div>
          </a>
    </div>








    <div class="container my-5">
        <div class="row">
            <div class="col-lg-7 px-5">
                <div class="row">
                    <div class="col-md-2 d-flex flex-md-column flex-row gap-3 mb-3 mb-md-0">
                        <img src="{{ asset('images/con5.png') }}" class="thumb-img" onclick="changeMainImage(this)">
                        <img src="{{ asset('images/con2.png') }}" class="thumb-img" onclick="changeMainImage(this)">
                        <img src="{{ asset('images/con3.png') }}" class="thumb-img" onclick="changeMainImage(this)">
                        <img src="{{ asset('images/con4.png') }}" class="thumb-img" onclick="changeMainImage(this)">
                    </div>
    
                    <div class="col-md-10 text-center">
                        <img id="mainImage" src="{{ asset('images/con1.png') }}" class="img-fluid main-product-img" alt="Main Product">
                    </div>
                </div>
    
                <div class="product-info mt-4">
                    <h4 class="fw-bold">Havic HV G-92 Gamepad</h4>
                    <div class="rating text-muted mb-2">
                        ⭐⭐⭐⭐☆ <span class="text-muted">(150 Reviews)</span>
                        <span class="text-green ms-3">In stock</span>
                    </div>
                    <h5 class="text-dark">$192.00</h5>
                    <p class="text-muted small">PlayStation 5 Controller Skin High quality vinyl with air channel
                        adhesive for easy bubble free install & mess free removal Pressure sensitive.</p>
                    <hr>
    
                    <div class="mb-2">
                        <strong>Colours:</strong>
                        <span class="color-dot bg-danger"></span>
                        <span class="color-dot bg-secondary"></span>
                    </div>
                    <div class="mb-3">
                        <strong>Size:</strong>
                        <div class="btn-group size-group ms-2 gap-2">
                            <button class="btn btn-outline-dark btn-sm">XS</button>
                            <button class="btn btn-outline-dark btn-sm">S</button>
                            <button class="btn btn-primary btn-sm">M</button>
                            <button class="btn btn-outline-dark btn-sm">L</button>
                            <button class="btn btn-outline-dark btn-sm">XL</button>
                        </div>
                    </div>
    
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <button class="btn btn-outline-dark btn-sm">−</button>
                        <input type="text" value="2" class="form-control form-control-sm text-center qty-input"
                            style="width: 50px;">
                        <button class="btn btn-outline-dark btn-sm">+</button>
                        <button class="btn btn-primary ms-3 w-auto">Buy Now</button>
                        <button class="btn btn-light"><i class="bi bi-heart"></i></button>
                    </div>
    
                    <div class="delivery-box p-3 mt-4">
                        <div class="d-flex align-items-start gap-3 pb-3 boder-bottom">
                            <i class="bi bi-truck display-6 text-dark"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Free Delivery</h6>
                                <a href="#" class="text-decoration-underline text-dark small">Enter your postal code for
                                    Delivery Availability</a>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-start gap-3 pt-3">
                            <i class="bi bi-arrow-counterclockwise display-6 text-dark"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Return Delivery</h6>
                                <p class="mb-0 small">Free 30 Days Delivery Returns. <a href="#"
                                        class="text-decoration-underline text-dark">Details</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-5">
                <h5 class="fw-bold mb-3">Related Items</h5>
                <div class="scroll-container d-flex flex-wrap gap-3 overflow-auto pb-2" style="max-height: 580px;">
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/red.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-heart"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">HAVIT HV-G92 Gamepad</div>
                            <div class="text-danger">$120 <del class="text-muted small">$160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐☆ (88)</div>
                        </div>
                    </div>
    
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/key.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-36%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">AK-900 Wired Keyboard</div>
                            <div class="text-danger">$960 <del class="text-muted small">$1160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐ (75)</div>
                        </div>
                    </div>
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/key.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-36%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">AK-900 Wired Keyboard</div>
                            <div class="text-danger">$960 <del class="text-muted small">$1160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐ (75)</div>
                        </div>
                    </div>
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/key.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-36%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">AK-900 Wired Keyboard</div>
                            <div class="text-danger">$960 <del class="text-muted small">$1160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐ (75)</div>
                        </div>
                    </div>
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/key.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-36%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">AK-900 Wired Keyboard</div>
                            <div class="text-danger">$960 <del class="text-muted small">$1160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐ (75)</div>
                        </div>
                    </div>
                    <div class="card product-card" style="width: 48%;">
                        <div class="position-relative">
                            <img src="{{ asset('images/key.png') }}" class="card-img-top" />
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-36%</span>
                            <button class="btn btn-light position-absolute top-0 end-0 m-2"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                        <div class="card-body p-2">
                            <div class="fw-bold small">AK-900 Wired Keyboard</div>
                            <div class="text-danger">$960 <del class="text-muted small">$1160</del></div>
                            <div class="text-warning small">⭐⭐⭐⭐ (75)</div>
                        </div>
                    </div>
                </div>
    
                <div class="review-box p-4 mt-4 rounded-4 position-relative text-white"
                    style="background-image: url('{{asset('images/review-box.jpg')}}'); background-size: cover; background-position: center;">
                    <h5 class="fw-bold text-dark boder-bottom pb-2 mb-4">Leave & Comment</h5>
                    <form>
                        <input type="text" class="form-control review-input mb-3" placeholder="Name">
                        <input type="email" class="form-control review-input mb-3" placeholder="Email">
                        <textarea class="form-control review-input mb-3" placeholder="Comment" rows="3"></textarea>
                        <button type="submit" class="btn btn-warning w-auto px-4 fw-bold">Submit Comment</button>
                    </form>
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
    <script>
        function changeMainImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;
        }
    </script>
      
</body>

</html>
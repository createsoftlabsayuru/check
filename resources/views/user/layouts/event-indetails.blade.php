<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Indetails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/event-indetails.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
      <!-- Menu Toggle Hidden Checkbox -->
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
            <span1 id="breadcrumb-page">Event</span>
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

  <div class="first-wrapper bg-dark position-relative d-flex justify-content-center align-items-center text-white">

    <!-- Dark overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

    <!-- Content on top of overlay -->
    <div class="position-relative text-center px-3">
      <h1 class="fw-bold">
        TechXpo 2025 – <span class="bg-info px-2 text-white rounded">Future of AI and Innovation</span>
      </h1>
      <p class="lead mt-3">An International Exhibition of Cutting-edge Technologies</p>

      <!-- Countdown -->
      <div class="mt-5">
        <div class="d-flex justify-content-center gap-4 small text-danger fw-semibold mb-1">
          <div>Days</div>
          <div>Hours</div>
          <div>Minutes</div>
          <div>Seconds</div>
        </div>
        <div class="d-flex justify-content-center gap-4 fs-3 fw-bold">
          <div id="days">00</div>
          <div>:</div>
          <div id="hours">00</div>
          <div>:</div>
          <div id="minutes">00</div>
          <div>:</div>
          <div id="seconds">00</div>
        </div>
      </div>
    </div>
  </div>
<div class="body-container-wrapper px-4 py-3 m-0" style="background-color: rgba(230,230,250,1);">
  <a href="javascript:history.back()" class="go-back-btn">
    <i class="fas fa-arrow-left"></i> Go Back
  </a>
      <div class="d-flex flex-wrap justify-content-center gap-5 mt-5 ">
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
    
      <div class="container-fluid py-5" >
        <div class="row gx-4 ">
          <!-- Left Column -->
            <div class="col-lg-8  border-end border-dark px-3">
                <div class="container mb-4" >
                    <div class="card rounded-4  p-4"  style="background-color: rgba(230,230,250,1);" >
                    
                    <!-- Title -->
                    <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">Details</p><p> | Event</p></h5>
                    <hr class="border-3 opacity-100 mt-0 mb-5 " style="color:rgba(65, 75, 210, 1);">
                
                    <!-- Paragraph -->
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptates illum, inventore earum eveniet neque accusamus porro sequi excepturi quo doloribus, voluptatem et iure ullam. Consequatur deserunt nesciunt, at sequi est praesentium omnis, doloremque blanditiis vitae incidunt voluptatum earum aut nam amet doloribus aliquam. Quas amet aspernatur accusantium iste repellat? At, veniam incidunt adipisci maxime voluptatum magnam ullam eligendi facilis qui voluptas sunt esse ex a voluptate nisi sequi dolor quibusdam asperiores distinctio repellat. Facere laborum deleniti tenetur porro, maiores odio fugiat possimus error quia illo voluptatibus eos assumenda incidunt at 
                        commodi quos blanditiis quae nisi amet suscipit ipsam illum.
                    </p>
                
                    <!-- Donate Button -->
                    <div>
                        <a href="#" class="btn btn-donate-now fw-bold  rounded-3 px-4 py-2 mb-2">Donate now</a>
                    </div>
                    <!-- Stats + Icons Row -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <span  style="color: rgba(65, 75, 210, 1);"><i class="bi bi-eye me-1"></i> 36</span>
                        <span style="color: rgba(65, 75, 210, 1);"><i class="fa-regular fa-thumbs-up me-1"></i>122</span>               
                        <span style="color: rgba(65, 75, 210, 1);"><i class="bi bi-chat-left-text me-1"></i> 0</span>
                        </div>
                        
                        <div class="d-flex gap-3 align-items-center">
                        <a href="#" class="" style="color: rgba(65, 75, 210, 1);"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="" style="color: rgba(65, 75, 210, 1);"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="" style="color: rgba(65, 75, 210, 1);"><i class="fab fa-x-twitter fs-5"></i> </a>
                        <a href="#" class="" style="color: rgba(65, 75, 210, 1);"><i class="bi bi-link-45deg fs-5"></i></a>
                        </div>
                    </div>
                
                    
                    </div>
                </div>
                <div class="images-gallery container py-2 mb-4">
                    <div class="card rounded-4 p-4 position-relative" style="background-color: rgba(230,230,250,1);">
                
                    <!-- Title -->
                    <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">Gallery</p><p> | Past Event</p></h5>
                    <hr class="border-3 opacity-100 mt-0 mb-3 " style="color:rgba(65, 75, 210, 1);">
                
                    <!-- Gallery Grid -->
                    <!-- Gallery Grid -->
                    <!-- Gallery Grid with true masonry layout and CSS-based sizing -->
                        <div class="image-wrapper mb-5">
                            <img src="{{ asset('images/gallery_img4.png') }}" class="mb-3" style="width: 100%; height: 250px; object-fit: cover;" alt="img1">
                            <img src="{{ asset('images/gallery_img1.png') }}" class="mb-3" style="width: 100%; height: 150px; object-fit: cover;" alt="img2">
                            <img src="{{ asset('images/gallery_img5.png') }}" class="mb-3" style="width: 100%; height: 200px; object-fit: cover;" alt="img3">
                            <img src="{{ asset('images/gallery_img2.png') }}" class="mb-3" style="width: 100%; height: 200px; object-fit: cover;" alt="img4">
                            <img src="{{ asset('images/gallery_img6.png') }}" class="mb-3" style="width: 100%; height: 220px; object-fit: cover;" alt="img5">
                            <img src="{{ asset('images/gallery_img3.png') }}" class="mb-3" style="width: 100%; height: 180px; object-fit: cover;" alt="img6">
                            <img src="{{ asset('images/gallery_img7.png') }}" class="mb-3" style="width: 100%; height: 190px; object-fit: cover;" alt="img7">
                            <img src="{{ asset('images/gallery_img8.png') }}" class="mb-3" style="width: 100%; height: 210px; object-fit: cover;" alt="img8">
                        </div>
  
  
                    <button class="btn text-white rounded-circle position-absolute bottom-0 end-0 m-3" style="background-color: rgba(65, 75, 210, 1);">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    </div>
                </div>
                <div class="p-2 mb-4">
                    <div class="third-container position-relative overflow-hidden">
                        <!-- Background Image -->
                        <img src="{{ asset('images/event_indetails2.jpg') }}" alt="Event" class="img-fluid w-100 rounded-4 " style="height: 500px; object-fit: cover;">
                      
                        <!-- Hexagon-Shaped Overlay -->
                        <div class="hexagon-shaped-overlay position-absolute top-0 start-0 h-100 d-flex align-items-center rounded-4 "
                             style="background: rgba(0,0,0,0.6);  clip-path: polygon(0 0, 80% 0, 100% 50%, 80% 100%, 0 100%, 0 50%);">
                          <div class="text-white px-5">
                            <h4 class="fw-semibold">Experience</h4>
                            <h4 class="fw-semibold">Unforgettable Moments</h4>
                            <p class="fs-5 mt-3">Join our exclusive events<br>and make lasting memories.</p>
                          </div>
                        </div>
                      </div>
                </div>
                  
                  
                
            </div>
            <div class="col-lg-4 px-3">
                <div class="card rounded-4  overflow-hidden mb-4" style="background-color: rgba(230,230,250,1);">
                    <!-- Map image -->
                        <div class="position-relative">
                            <div class="image-wrapper p-3">
                                <img src="{{ asset('images/location_map.png') }}" class="img-fluid rounded-2" alt="Map" style="height: 220px; object-fit: cover;">
                            </div>
                
                            <!-- Red marker + label -->
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="d-flex flex-column align-items-center">
                                <div class="bg-danger rounded-circle" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zM8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                                    </svg>
                                </div>
                                <div class="bg-white text-dark px-2 py-1 rounded-pill mt-1 small fw-semibold">
                                    TechXpo–2025
                                </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Event info -->
                        <div class="card-body">
                            <h4 class="fw-semibold mb-3">Join with event</h4>
                        
                            <!-- Date -->
                            <div class="row mb-2">
                            <div class="col-4 fw-bold">Date:</div>
                            <div class="col-8 ">28/06/ 2025</div>
                            </div>
                        
                            <!-- Time -->
                            <div class="row mb-2">
                            <div class="col-4 fw-bold">Time:</div>
                            <div class="col-8 "> 4:00 PM</div>
                            </div>
                        
                            <!-- Location -->
                            <div class="row mb-2">
                            <div class="col-4 fw-bold">Location:</div>
                            <div class="col-8">Parakaduwa</div>
                            </div>
                        
                            <!-- Zoom Link -->
                            <div class="row mb-4">
                            <div class="col-4 fw-bold">Link:</div>
                            <div class="col-8">
                                <a href="https://zoom.us/j/5551112222" class="text-decoration-none text-primary" style="word-break: break-all;">
                                https://zoom.us/j/5551112222
                                </a>
                            </div>
                            </div>
                        
                            <!-- Join Button -->
                            <div class="row">
                            <div class="col ">
                                <a href="https://zoom.us/j/5551112222" class="btn btn-join px-4 text-white" style="background-color: rgba(65,75,210,1);">
                                Join
                                </a>
                            </div>
                            </div>
                        </div>
                      
                </div>
                <div class="card text-center rounded-4 p-1 mb-4" style="background-color: rgba(230,230,250,1);">
    
                    <div class="image-container">
                        <h5 class="py-3">Organized by AI Innovate</h5>
                        <!-- Logo -->
                        <img src="{{ asset('images/egon_logo.jpg') }}" style="width: 90%;" class="card-img-top rounded-4" alt="Eagon Logo">
                    </div>
                
                    <!-- Contact Information -->
                    <div class="card-body">
                
                      <!-- Phone -->
                      <div class="d-flex align-items-center mb-3 gap-2">
                        <div class="me-2" style="color: rgba(65, 75, 210, 1);">
                          <i class="bi bi-telephone-fill me-2 fs-5"></i>
                        </div>
                        <div class="text-start">
                          +94 77 123 4567
                        </div>
                      </div>
                
                      <!-- Email -->
                      <div class="d-flex align-items-center mb-3 gap-2">
                        <div class="me-2 " style="color: rgba(65, 75, 210, 1);">
                          <i class="bi bi-envelope-fill me-2 fs-5"></i>
                        </div>
                        <div class="text-start">
                          info@eagon.com
                        </div>
                      </div>
                
                      <!-- Website -->
                      <div class="d-flex align-items-center mb-4 gap-2">
                        <div class="me-2" style="color: rgba(65, 75, 210, 1);">
                            <i class="fa-solid fa-earth-americas me-2 fs-5" ></i>
                        </div>
                        <div class="text-start">
                          www.eagon.com
                        </div>
                      </div>
                
                      <!-- Buttons with equal width -->
                    <div class="d-flex flex-column align-items-start gap-3 mb-4">
                        <!-- Call Now Button -->
                        <a href="#" class="btn btn-call text-white fw-bold py-2 text-center" style="width: 130px; background-color: rgba(65, 75, 210, 1);">
                          <i class="fa-solid fa-phone me-2"></i>Call now
                        </a>
                      
                        <!-- Row with Get Queta and Social Icons -->
                        <div class="d-flex justify-content-between w-100" >
                          <!-- Get Queta Button -->
                          <a href="#" class="btn btn-get-quote fw-bold  py-2 text-center" data-bs-toggle="modal" data-bs-target="#quoteModal"
                          style="width: 130px; background-color: rgba(255, 244, 29, 1);">
                          <i class="fa-solid fa-message me-2"></i>Get Quote
                        </a>
                      
                          <!-- Social Icons -->
                          <div class="d-flex justify-content-end align-items-center gap-3">
                            <i class="fa-brands fa-linkedin fa-lg text-secondary fs-3"></i>
                            <i class="fa-brands fa-facebook fa-lg text-secondary fs-3"></i>
                            <i class="fa-brands fa-instagram fa-lg text-secondary fs-3"></i>
                          </div>
                        </div>
                      </div>
                      <div class="modal fade p-5" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm modal-fullscreen-sm-down custom-modal-width">
                          <div class="modal-content rounded-4">
                            <div class="modal-header">
                              <h5 class="modal-title text-white fs-3" id="quoteModalLabel">Get a Quote</h5>
                              <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 me-3 mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-3">
                              <form>
                                <div class="mb-3">
                                  <input type="text"  placeholder="Your Name" class="form-control bg-form py-3 fs-4 text-white placeholder-gray" required>
                                </div>
                                <div class="mb-3">
                                  <input type="email" placeholder="Your Email" class="form-control bg-form py-3 fs-4 text-white placeholder-gray" required>
                                </div>
                                <div class="mb-3">
                                  <textarea placeholder="Your Message" class="form-control bg-form py-3 fs-4 text-white placeholder-gray" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card rounded-4" style="background-color: rgba(230,230,250,1); ">
                    <div class="card-body p-3">
                
                      <!-- Title -->
                      <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">Event</p><p> | Latest</p></h5>
                    <hr class="border-3 opacity-100 mt-0 mb-4 " style="color:rgba(65, 75, 210, 1);">
                
                      <!-- Scrollable content -->
                      <div class="overflow-auto px-2" style="max-height: 340px;">
                        
                        <!-- Event Item 1 -->
                        <div class="d-flex align-items-center border rounded-4 mb-3 p-2">
                          <img src="{{ asset('images/event_latest1.jpg') }}" class="rounded-circle me-3" alt="event" style="width: 60px;height: 60px;">
                          <div class="d-flex flex-column gap-1">
                            <span class="fw-bold">ByteBloom</span>
                            <small class="text-muted">09/06/2025</small>
                          </div>
                        </div>
                
                        <!-- Event Item 2 -->
                        <div class="d-flex align-items-center border rounded-4 mb-3 p-2">
                          <img src="{{ asset('images/event_latest2.jpg') }}" class="rounded-circle me-3" alt="event" style="width: 60px;height: 60px;">
                          <div class="d-flex flex-column gap-1">
                            <span class="fw-bold">ByteBloom</span>
                            <small class="text-muted">09/06/2025</small>
                          </div>
                        </div>
                
                        <!-- Event Item 3 -->
                        <div class="d-flex align-items-center border rounded-4 mb-3 p-2">
                          <img src="{{ asset('images/event_latest3.jpg') }}" class="rounded-circle me-3" alt="event" style="width: 60px;height: 60px;">
                          <div class="d-flex flex-column gap-1">
                            <span class="fw-bold">ByteBloom</span>
                            <small class="text-muted">09/06/2025</small>
                          </div>
                        </div>
                
                        <!-- Event Item 4 -->
                        <div class="d-flex align-items-center border rounded-4 mb-3 p-2">
                          <img src="{{ asset('images/event_latest2.jpg') }}" class="rounded-circle me-3" alt="event" style="width: 60px;height: 60px;">
                          <div class="d-flex flex-column gap-1">
                            <span class="fw-bold">ByteBloom</span>
                            <small class="text-muted">09/06/2025</small>
                          </div>
                        </div>
                
                      </div>
                    </div>
                  </div>
            </div>
          
        </div>
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

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





















   

  <script>
    const eventDate = new Date("2025-06-23T00:00:00").getTime();
    function updateCountdown() {
      const now = new Date().getTime();
      const diff = eventDate - now;

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((diff % (1000 * 60)) / 1000);

      document.getElementById('days').innerText = days.toString().padStart(2, '0');
      document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
      document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
      document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  </script>


  
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-hotel.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

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
          <img src="{{ asset('images/Logo.png')}}" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Hotel</span>
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
  
   <div class="banner">
  <div class="banner-section image-slider">
    <img id="changingImage" src="{{ asset('images/Hotel-cover-image1.jpg') }}" alt="Changing" />
  </div>

  <div class="banner-section fixed-image">
    <img src="{{ asset('images/Hotel-cover-image2.jpg') }}" alt="Hotel Scenery" />
  </div>

  <div class="banner-section text-section">
    <h1>Hotel</h1>
    <p>Discover Top-Rated Hotels for Every Journey</p>
  </div>
</div>

</header>






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


  <div class="container-fluid py-5" >
      <div class="row gx-4 ">
        <!-- Left Column -->
        <div class="col-lg-8   border-end-md border-dark px-3">
          <!-- About Company -->
          <div class="card  rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
              <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">ABOUT</p><p> | Hotel</p></h5>
              <hr class="border-3 opacity-100 mt-0 mb-3 " style="color:rgba(65, 75, 210, 1);">
              <p class="p-3">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece 
                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word 
                in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, 
                written in 45 BC. This book is a treatise on the theory of ethics, very popular during the 
                Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line 
                in section 1.10.32.
              </p>
          </div>
            
    
          <!-- Services Offered -->
          <div class="services-offered card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
            <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">SERVICES</p><p> | Offered</p></h5>
            <hr class="border-3 opacity-100 mt-0 mb-3" style="border-color: rgba(65, 75, 210, 1);">
          
            <!-- Scrollable container -->
            <div class="scroll-container d-flex flex-nowrap overflow-auto gap-3 pb-3 mt-4" style="overflow-x: auto; max-height: 300px;">
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service1.jpg')}}" class="img-fluid rounded" style="width: 250px;" alt="">
              </div>
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service2.jpg')}}" class="img-fluid rounded" style="width: 250px; " alt="">
              </div>
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service3.jpg')}}" class="img-fluid rounded" style="width: 250px; " alt="">
              </div>
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service4.jpg')}}" class="img-fluid rounded" style="width: 250px;" alt="">
              </div>
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service5.jpg')}}" class="img-fluid rounded" style="width: 250px;" alt="">
              </div>
              <div class="text-center flex-shrink-0">
                <img src="{{ asset('images/service6.jpg')}}" class="img-fluid rounded" style="width: 250px;" alt="">
              </div>
            </div>
          </div>
          
            
            
    
          <!-- Service Areas -->
        

   <div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
  <h5 class="fw-bold d-flex flex-wrap gap-2 mb-1">
    <span style="color: rgba(65, 75, 210, 1);">SERVICE</span>
    <span>| Areas</span>
  </h5>
  <hr class="border-3 opacity-100 mt-0 mb-3" style="color:rgba(65, 75, 210, 1);">

  <div class="row g-3">
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">Room Service</span>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">Spa</span>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">HouseKeeping</span>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">Dining</span>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">Parking</span>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <span class="btn w-100 px-2 py-2 text-white" style="background-color: rgba(152, 162, 179, 1);">Swimming Pool</span>
    </div>
  </div>
</div>

            
    
          <!-- Gallery-->
          <div class="products card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">Gallery</p><p> | Hotel </p></h5>
              
            </div>
          
            <!-- Divider -->
            <hr class="border-3 opacity-100 mt-0 mb-3" style="border-color: rgba(65, 75, 210, 1);">
          
            <!-- Scrollable Product Row -->
            <div class="overflow-auto pb-2">
              
              <div class="d-flex flex-nowrap gap-3">
          
                <!-- Repeatable Product Card -->
                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-1.png') }}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>
          
                <!-- Card 2 -->
                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-3.png')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>
          
                <!-- Card 3 -->
                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-4.png')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>
          
                <!-- Card 4 -->
                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-5.png')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>

                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-6.png')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>

                <div class="card border border-light-subtle rounded-4" style="min-width: 260px;">
                  <div style="height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/gallery-3.png')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                 
                </div>
          
              </div>
            </div>
          </div>


          <!-- Rooms-->
           <div class="products card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">Rooms</p><p> | Hotel</p></h5>
              
            </div>
          
            <!-- Divider -->
            <hr class="border-3 opacity-100 mt-0 mb-3" style="border-color: rgba(65, 75, 210, 1);">
          
            <!-- Scrollable Product Row -->
            <div class="overflow-auto pb-2">
             
              <div class="d-flex flex-nowrap gap-3">
          
                <!-- Repeatable Product Card -->
                <div class="card border border-light-subtle rounded-4" style="min-width: 230px;">
                  <div style="height: 220px; overflow: hidden;">
                    <img src="{{ asset('images/other6.jpg') }}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                  <div class="card-body p-3" style="background-color: white;">
                    <div class="d-flex justify-content-between">
                      <span class="fw-bold text-dark fs-5">Luxury</span>
                      <span class="small text-muted">2 Visitors</span>
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                      <span class="text-danger small fw-semibold fs-6">LKR. 3500</span>
                      <span class="text-black small text-decoration-line-through">LKR. 4500</span>
                    </div>
                  </div>
                </div>
          
                <!-- Card 2 -->
                 <div class="card border border-light-subtle rounded-4" style="min-width: 230px;">
                  <div style="height: 220px; overflow: hidden;">
                    <img src="{{ asset('images/other4.jpg')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                  <div class="card-body p-3" style="background-color: white;">
                    <div class="d-flex justify-content-between">
                      <span class="fw-bold text-dark fs-5">Luxury</span>
                      <span class="small text-muted">2 Visitors</span>
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                      <span class="text-danger small fw-semibold fs-6">LKR. 3500</span>
                      <span class="text-black small text-decoration-line-through">LKR. 4500</span>
                    </div>
                  </div>
                </div>
          
                <!-- Card 3 -->
                 <div class="card border border-light-subtle rounded-4" style="min-width: 230px;">
                  <div style="height: 220px; overflow: hidden;">
                    <img src="{{ asset('images/other5.jpg') }}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                  <div class="card-body p-3" style="background-color: white;">
                    <div class="d-flex justify-content-between">
                      <span class="fw-bold text-dark fs-5">Luxury</span>
                      <span class="small text-muted">2 Visitors</span>
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                      <span class="text-danger small fw-semibold fs-6">LKR. 3500</span>
                      <span class="text-black small text-decoration-line-through">LKR. 4500</span>
                    </div>
                  </div>
                </div>
          
                <!-- Card 4 -->
                 <div class="card border border-light-subtle rounded-4" style="min-width: 230px;">
                  <div style="height: 220px; overflow: hidden;">
                    <img src="{{ asset('images/other6.jpg') }}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                  <div class="card-body p-3" style="background-color: white;">
                    <div class="d-flex justify-content-between">
                      <span class="fw-bold text-dark fs-5">Luxury</span>
                      <span class="small text-muted">2 Visitors</span>
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                      <span class="text-danger small fw-semibold fs-6">LKR. 3500</span>
                      <span class="text-black small text-decoration-line-through">LKR. 4500</span>
                    </div>
                  </div>
                </div>

                 <div class="card border border-light-subtle rounded-4" style="min-width: 230px;">
                  <div style="height: 220px; overflow: hidden;">
                    <img src="{{ asset('images/other5.jpg')}}" alt="Product Image"
                         class="w-100 h-100 object-fit-cover rounded-top-4">
                  </div>
                  <div class="card-body p-3" style="background-color: white;">
                    <div class="d-flex justify-content-between">
                      <span class="fw-bold text-dark fs-5">Luxury</span>
                      <span class="small text-muted">2 Visitors</span>
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                      <span class="text-danger small fw-semibold fs-6">LKR. 3500</span>
                      <span class="text-black small text-decoration-line-through">LKR. 4500</span>
                    </div>
                  </div>
                </div>
          
              </div>
            </div>
          </div>
          
          
            
    
          <!-- Special Offers -->
          <div class="card rounded-5 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
            <!-- Header -->
            <h5 class="fw-bold d-flex gap-2 mb-1"><p style="color: rgba(65, 75, 210, 1);">SPECIAL</p><p> | Offers</p></h5>
            <hr class="border-3 opacity-100 mt-0 mb-4" style="border-color: rgba(65, 75, 210, 1);">
          
            <!-- Content Row -->
            <div class="row g-4 align-items-stretch">
              <!-- Left: Image -->
              <div class="col-md-5">
                <div class="h-100">
                  <img src="{{ asset('images/blog1.jpg') }}" class="img-fluid h-100 w-100 object-fit-cover rounded-4" alt="Special Offer">
                </div>
              </div>
              <div class="col-md-1"></div>
              <!-- Right: Text + Buttons -->
              <div class="col-md-6 d-flex flex-column justify-content-between h-100">
                <!-- Top content -->
                <div>
                  <h6 class="fw-semibold fs-3 mb-2">50% offer only today</h6>
                  <p class="mb-3 fw-semibold fs-6 mb-4">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, culpa.
                  </p>
                </div>
          
                <!-- Bottom buttons -->
                <div class="d-flex gap-3 mt-5">
                  <span class=" btn btn-send-enquiry rounded-3 px-4 text-white" style="background-color: rgba(65, 75, 210, 1);">View more</span>
                  <a href="#" class="btn btn-send-enquiry rounded-3 px-3 text-white" style="background-color: rgba(65, 75, 210, 1);">Send Enquiry</a>
                </div>
              </div>
            </div>
          </div>           
            
        </div>
    
<!------------------------------------------ Right Column ------------------------------------------------------------>
            <div class="col-lg-4 px-3">
                  <!-- Contact Info -->
                  <div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">
                    <!-- Image section -->
                    <div class="mb-3" style="height: 250px; overflow: hidden;">
                      <img src="images/Hotel-image1.jpg" class="img-fluid rounded-3 w-100 h-100" style="object-fit: cover;" alt="">
                    </div>
                  
                    <!-- Title -->
                    <h5 class="fw-bold mb-4 fs-4">Blues Sky Real Estate</h5>
                  
                    <!-- Contact Info -->
                    <ul class="list-unstyled lh-sm mb-4">
                      <li class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa-solid fa-location-dot me-2  mt-2 fs-5" style="color: rgba(65, 75, 210, 1);"></i>
                        <p class="mb-0">No:2, 4th Avenue,Newyork, USA,Near to Airport</p>
                      </li>
                      <li class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa-solid fa-phone me-2  mt-2 fs-5" style="color: rgba(65, 75, 210, 1);"></i>
                        <p class="mb-0">+94 772345656</p>
                      </li>
                      <li class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa-solid fa-envelope me-2  mt-2 fs-5" style="color: rgba(65, 75, 210, 1);"></i>
                        <p class="mb-0">joneylaptops@gmail.com</p>
                      </li>
                      <li class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa-solid fa-earth-americas me-2  mt-2 fs-5" style="color: rgba(65, 75, 210, 1);"></i>
                        <p class="mb-0">www.noahreal.com</p>
                      </li>
                    </ul>
                  
                    <!-- Buttons with equal width -->
                    <div class="d-flex flex-column align-items-start gap-3 mb-4">
                      <!-- Call Now Button -->
                      <a href="#" class="btn btn-call text-white fw-bold py-2 text-center" style="width: 130px; background-color: rgba(65, 75, 210, 1);">
                        <i class="fa-solid fa-phone me-2"></i>Call now
                      </a>
                    
                      <!-- Row with Get Queta and Social Icons -->
                      <div class="d-flex justify-content-between w-100" >
                        <!-- Get Queta Button -->
                        <a href="#" class="btn btn-get-quote fw-bold text-dark py-2 text-center" style="width: 130px; background-color: rgba(255, 244, 29, 1);">
                          <i class="fa-solid fa-message me-2"></i>Get Queta
                        </a>
                    
                        <!-- Social Icons -->
                        <div class="d-flex justify-content-end align-items-center gap-3">
                          <i class="fa-brands fa-linkedin fa-lg text-secondary fs-3"></i>
                          <i class="fa-brands fa-facebook fa-lg text-secondary fs-3"></i>
                          <i class="fa-brands fa-instagram fa-lg text-secondary fs-3"></i>
                        </div>
                      </div>
                    </div>
                    
                  
                    
                  </div>
                  
                  
            
    

                
        



<!-- Company Info Card -->
<div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">

  <!-- Title -->
  <h5 class="fw-bold d-flex flex-wrap gap-2 mb-1">
    <span style="color: rgba(65, 75, 210, 1);">Company</span>
    <span>| Info</span>
  </h5>

  <hr class="border-3 opacity-100 mt-0 mb-3" style="color: rgba(65, 75, 210, 1);">

  <!-- Working Hours Dropdown -->
  <div class="mb-4">
    <button class="btn border rounded-3 w-100 d-flex justify-content-between align-items-center px-3 py-2" 
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#workingHoursList"
            aria-expanded="false"
            aria-controls="workingHoursList"
            style="background-color: rgba(245,245,255,0.8);">
      <span class="fw-semibold">Working hours</span>
      <i class="fa-solid fa-chevron-down"></i>
    </button>

    <div class="collapse mt-2" id="workingHoursList">
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Sunday</span><span class="text-muted">Closed</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Monday</span><span class="text-muted">8.00am - 5.30pm</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Tuesday</span><span class="text-muted">8.00am - 5.30pm</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Wednesday</span><span class="text-muted">8.00am - 5.30pm</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Thursday</span><span class="text-muted">8.00am - 5.30pm</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Friday</span><span class="text-muted">8.00am - 5.30pm</span></li>
        <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;"><span>Saturday</span><span class="text-muted">Closed</span></li>
      </ul>
    </div>
  </div>

  <!-- Company Info List -->
  <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Villas Available</span><span class="fw-semibold text-primary">Available</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Plots Available</span><span class="fw-semibold text-primary">Available</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Flats Available</span><span class="fw-semibold text-primary">Available</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Experience</span><span class="fw-semibold text-primary">15 Years</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Parking</span><span class="fw-semibold text-primary">Available</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>WhatsApp</span><span class="fw-semibold text-primary">123458</span>
    </li>
    <li class="list-group-item d-flex justify-content-between px-0" style="background-color: transparent;">
      <span>Online Booking</span><span class="fw-semibold text-primary">Available</span>
    </li>
  </ul>
</div>





  

<div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">

  <!-- Heading -->
  <h5 class="fw-bold d-flex flex-wrap gap-2 mb-1">
    <span style="color: rgba(65, 75, 210, 1);">Available Days</span>
    <span>| Hotel</span>
  </h5>

  <hr class="border-3 opacity-100 mt-0 mb-3" style="color: rgba(65, 75, 210, 1);">

  <!-- Responsive Image -->
  <div class="d-flex justify-content-center mt-3">
    <img src="{{ asset('images/calander.png') }}"
         alt="Available Days Calendar"
         class="rounded-4 img-fluid shadow"
         style="max-width: 100%; height: auto; object-fit: cover;">
  </div>
</div>

            
            
    
             <!-- Listing Created By -->
<div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">

  <!-- Heading -->
  <h5 class="fw-bold d-flex flex-wrap gap-2 mb-1">
    <span style="color: rgba(65, 75, 210, 1);">Listing</span>
    <span>| Created by</span>
  </h5>

  <hr class="border-3 opacity-100 mt-0 mb-3" style="color: rgba(65, 75, 210, 1);">

  <!-- User Info -->
  <div class="d-flex align-items-center mt-3">
    <img src="{{ asset('images/user-image.png') }}" alt="Profile"
         class="rounded-circle me-3"
         style="width: 50px; height: 50px; object-fit: cover;">
    <div>
      <p class="mb-0 fw-bold fs-5">John Smith</p>
      <p class="mb-0 text-muted small">Member since 2017</p>
    </div>
  </div>
</div>

<!-- Business Profile -->
<div class="card rounded-4 p-4 mb-4" style="background-color: rgba(230,230,250,1);">

  <!-- Heading -->
  <h5 class="fw-bold d-flex flex-wrap gap-2 mb-1">
    <span style="color: rgba(65, 75, 210, 1);">Business</span>
    <span>| Profile</span>
  </h5>

  <hr class="border-3 opacity-100 mt-0 mb-3" style="color: rgba(65, 75, 210, 1);">

  <!-- Business Info -->
  <div class="d-flex align-items-start mt-3">
    <img src="{{ asset('images/digitalx.png') }}" alt="Business Logo"
         class="rounded-circle me-3"
         style="width: 50px; height: 50px; object-fit: cover;">
    <div>
      <p class="mb-0 fw-bold fs-5">Digitalx Lanka</p>
      <p class="mb-0 text-muted small">28800 Orchard Lake Road, Suite 180,<br>Farmington Hills, U.S.A.</p>
    </div>
  </div>
</div>

            
                  <!-- Video -->
                    <div class="card rounded-4 mb-4" style="min-height: 400px;">
                      <div class="ratio ratio-16x9 w-100 rounded-4" style="min-height: 400px;">
                        <iframe src="https://www.youtube.com/embed/w9ehb4tkxfs" title="YouTube video" allowfullscreen></iframe>
                      </div>
                    </div>
                </div>
              </div>
    
      <!-- Bottom Location Section -->
      <div class=" mt-5">
        <h4 class="d-flex justify-content-center fw-bold fs-4 mb-5">OUR LOCATION</span></h4>
        
        <div style="width: 100%; height: 300px;">
          <iframe
            src="https://maps.google.com/maps?width=600&height=300&hl=en&q=Digitalx%20Lanka&t=&z=16&ie=UTF8&iwloc=B&output=embed"
            frameborder="0"
            allowfullscreen
            style="border:0; width: 100%; height: 100%;">
          </iframe>
        </div>
      </div>

      <div class="wrapper mt-5 ">
        <div class="container-fluid">
          <div class="row g-4 align-items-stretch">
          
            <!-- Left: Review Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card border-0 rounded-4 text-white h-100"
                style="background-image: url('{{ asset('images/REVIEW.jpg') }}'); background-size: cover; background-position: center; padding: 30px;">           
      
                <!-- Header -->
                <h4 class="fw-bold text-dark">Leave & Review</h4>
                <hr class="border-2 border-dark opacity-100 mt-0" style="width: 80%;">
      
                <!-- Subheading & Stars -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <p class="text-dark mb-0">How did we do?</p>
                  <div>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </div>
                </div>
      
                <!-- Review Form -->
                <form>
                  <!-- Title -->
                  <div class="mb-3">
                    <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-primary" placeholder="Title">
                  </div>
                  <!-- Comment -->
                  <div class="mb-5">
                    <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-primary" placeholder="Comment">
                  </div>
                  <!-- Submit Button -->
                  <button type="submit" class="btn fw-bold text-dark mt-3" style="background-color: #FFF41D;">
                    Submit Review
                  </button>
                </form>
              </div>
            </div>
      
            <!-- Right: Carousel -->
            <div class="col-12 col-md-6 col-lg-7" style="height: 400px; min-height: 400px; max-height: 400px;">
              <div id="adsCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner rounded-4" style="height: 100%; ">
                  
                  <div class="carousel-item active" style="height: 400px; min-height: 400px; max-height: 400px;">
                    <img src="{{ asset('images/adscarousal1.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover rounded-4" 
                         alt="...">
                  </div>
                  
                  <div class="carousel-item" style="height: 400px; min-height: 400px; max-height: 400px;">
                    <img src="{{ asset('images/adscarousal2.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover rounded-4" 
                         alt="...">
                  </div>
                  
                  <div class="carousel-item" style="height: 400px; min-height: 400px; max-height: 400px;">
                    <img src="{{ asset('images/adscarousal3.png') }}" 
                         class="d-block w-100 h-100 object-fit-cover rounded-4" 
                         alt="...">
                  </div>
                  
                  <div class="carousel-item" style="height: 400px; min-height: 400px; max-height: 400px;">
                    <img src="{{ asset('images/adscarousal4.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover rounded-4" 
                         alt="...">
                  </div>
                  
                  <div class="carousel-item" style="height: 400px; min-height: 400px; max-height: 400px;">
                    <img src="{{ asset('images/adscarousal5.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover rounded-4" 
                         alt="...">
                  </div>
            
                </div>
              </div>
            </div>
            
      
          </div>
        </div>
      </div>
      

      
    </div>
  </div>


  
  @include('user.partials.footer')







 <script>
       
     
  const imageList = [
    "images/hotel4.png",
    "images/hotel1.png",
    "images/hotel5.png"
  ];

  let currentIndex = 0;
  const changingImage = document.getElementById("changingImage");

  setInterval(() => {
    currentIndex = (currentIndex + 1) % imageList.length;
    changingImage.src = imageList[currentIndex];
  }, 3000); // Changes every 3 seconds








      </script>

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
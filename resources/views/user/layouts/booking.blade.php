<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/booking.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
        <img src="{{asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
        <span class="fw-bold" >LankanBuy</span>
      </a>

      <!-- Breadcrumb (Visible on all sizes) -->
      <div class="d-flex align-items-center text-white small ms-2">
        <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
        <span1 class="mx-2">&gt;</span>
        <span1 id="breadcrumb-page">Booking</span>
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

        <div class="booking-first-wrapper position-relative text-white text-center" style=" background-image: url('images/bg_booking.jpg'); background-size: cover; background-position: center;">

            <!-- Overlay -->
            <div class="position-absolute top-50 start-50 translate-middle px-5 py-5 bg-dark bg-opacity-50 rounded" style="width: 70%;">
            <h1 class="fw-bold">Booking</h1>
            <p class="lead">Find your stay...</p>
            </div>

            <!-- Bottom Navigation Buttons -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5 w-auto w-100-sm">
            <div class="booking-nav  d-flex  justify-content-center px-3 gap-5 ">
                <a href="{{ route('user.booking')}}" class="btn bg-white bg-opacity-75 text-dark fw-bold px-4">Home</a>
                <a href="#" class="btn bg-white bg-opacity-75 text-dark fw-bold px-4">Hotels</a>
                <a href="{{ route('user.categoriesRestuarant')}}" class="btn bg-white bg-opacity-75 text-dark fw-bold px-4">Restaurants</a>
                <a href="#" class="btn bg-white bg-opacity-75 text-dark fw-bold px-4">Villas</a>
                <a href="#" class="btn bg-white bg-opacity-75 text-dark fw-bold px-4">Apartment</a>
            </div>
            </div>

        </div>

        <div class="body-container-wrapper pt-4" style="background-color: rgba(230,230,250,1);">
            <div class="d-flex flex-wrap justify-content-center gap-5 mt-5 ">
                <!-- Repeat this block for each menu item -->
                <a href="{{ route('user.main') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle p-2" >
                      <img src="{{ asset('images/flat-color-icons_home.png')}}" class="icon-img mb-1 " alt="Home" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">Home</div>
                    </div>
                  </a>
                  
                  <a href="{{ route('user.about')}}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
                      <img src="{{ asset('images/fluent-color_contact-card-24.png') }}" class="icon-img mb-1" alt="About" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">About</div>
                    </div>
                  </a>
                  
              
                  <a href="{{ route('user.products') }}" target="_blank" style="text-decoration: none;">
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
                  
              
                  <a href="{{ route('user.job') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
                      <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">Jobs</div>
                    </div>
                  </a>
                  
              
                  <a href="{{ route('user.blog') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
                      <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">Blogs</div>
                    </div>
                  </a>
                  
              
                  <a href="{{ route('user.events') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
                      <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 30px; height: 30px;" >
                      <div class="label small text-white" style="font-size: 15px;">Event</div>
                    </div>
                  </a>
                  
              
                  <a href="{{ route('user.advertising') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
                      <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png') }}" class="icon-img mb-1" alt="Advertise" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">Advertise</div>
                    </div>
                  </a>
                  
              
                  <a href="{{ route('user.contact') }}" target="_blank" style="text-decoration: none;">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
                      <img src="{{ asset('https://img.icons8.com/color/48/phone.png') }}" class="icon-img mb-1" alt="Contact us" style="width: 30px; height: 30px;">
                      <div class="label small text-white" style="font-size: 15px;">Contact us</div>
                    </div>
                  </a>
            </div>

                <div class="container my-5 text-center px-4">
                    <h4 class="mb-2">Trending Destinations</h4>
                    <p class="mb-4">Travelers searching for Sri Lanka also booked these</p>
              
                    <div class="row g-3 align-items-stretch" >
                        <!-- Left Column -->
                        <div class="col-md-4 d-flex">
                            <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/booking_img1.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover rounded" alt="Image 1">
                            </div>
                        </div>
                
                        <!-- Right Column -->
                        <div class="col-md-8 h-100">
                            <div class="row g-3 h-100">
                                <!-- Top Row: image2 and image3 (height: 180px) -->
                                <div class="col-6">
                                    <div class="overflow-hidden rounded" style="height: 180px;">
                                    <img src="{{ asset('images/booking_img2.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover rounded" alt="Image 2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="overflow-hidden rounded" style="height: 180px;">
                                    <img src="{{ asset('images/booking_img3.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover rounded" alt="Image 3">
                                    </div>
                                </div>
                    
                                <!-- Bottom Row: image4 (col-7), image5 (col-5) => both height: 200px -->
                                <div class="col-7">
                                    <div class="overflow-hidden rounded" style="height: 200px;">
                                    <img src="{{ asset('images/booking_img4.jpg')}}" class="img-fluid w-100 h-100 object-fit-cover rounded" alt="Image 4">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="overflow-hidden rounded" style="height: 200px;">
                                    <img src="{{ asset('images/booking_img5.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover rounded" alt="Image 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                           
                         
                <div class="container my-5 px-4">
                    <div class="text-center mb-4">
                        <h4>Offers</h4>
                        <p>Promotions, deals, and special offers for you</p>
                    </div>
                
                    <div id="offerCarousel" class="carousel slide rounded overflow-hidden" data-bs-ride="carousel">
                        <div class="carousel-inner">
                    
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center justify-content-center text-white text-center"
                                    style=" background:  url('{{ asset('images/a1.jpeg') }}') center center / cover no-repeat;height: 250px;">
                                    <div class="p-3 rounded">
                                        <h5>Quick escape, quality time</h5>
                                        <p>Save up to 20% with a Getaway Deal</p>
                                        <a href="#" class="btn" style="background-color: rgba(255, 244, 29, 1);">Save on stays</a>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center text-white text-center"
                                    style=" background:  url('{{ asset('images/a2.jpeg') }}') center center / cover no-repeat;height: 250px;">
                                    <div class="p-3 rounded">
                                    <h5>Family-friendly resorts</h5>
                                    <p>Enjoy extra perks for your next family vacation</p>
                                    <a href="#" class="btn" style="background-color: rgba(255, 244, 29, 1);">Explore offers</a>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Slide 3 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center text-white text-center"
                                    style=" background:  url('{{ asset('images/a3.jpeg') }}') center center / cover no-repeat;height: 250px;">
                                    <div class="p-3 rounded">
                                    <h5>Luxury for less</h5>
                                    <p>Indulge yourself with top-tier stays at special prices</p>
                                    <a href="#" class="btn" style="background-color: rgba(255, 244, 29, 1);">Find luxury deals</a>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                
                        <!-- Indicators -->
                        <div class="carousel-indicators d-flex justify-content-center gap-2 mt-3">
                            <button type="button" data-bs-target="#offerCarousel" data-bs-slide-to="0"
                                    class="active rounded-circle" aria-current="true" aria-label="Slide 1"
                                    style="width: 12px; height: 12px;"></button>
                            <button type="button" data-bs-target="#offerCarousel" data-bs-slide-to="1"
                                    class="rounded-circle" aria-label="Slide 2"
                                    style="width: 12px; height: 12px;"></button>
                            <button type="button" data-bs-target="#offerCarousel" data-bs-slide-to="2"
                                    class="rounded-circle" aria-label="Slide 3"
                                    style="width: 12px; height: 12px;"></button>
                        </div>
    
                    </div>
                </div>
              
                <div class="container text-center my-5 px-4">
                    <div class="row mb-4">
                    <div class="col-12">
                        <h4>Browse by property type in Kurunegala</h4>
                        <p>These popular destinations have a lot to offer</p>
                    </div>
                    </div>
                
                    <div class="position-relative border border-secondary-subtle border-2 py-4">
                        <!-- Left Arrow -->
                        <button type="button"
                        class="position-absolute top-50 start-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer').scrollBy({left: -300, behavior: 'smooth'})"
                        style="margin-left: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-left fs-3"></i>
                        </button>
                    
                        <div class="wrapper">
                            <!-- Scrollable Gallery -->
                        <div id="scrollContainer"
                        class="d-flex px-5 gap-4 pb-3"
                        style="
                        overflow-x: hidden;
                        pointer-events: auto;
                        touch-action: none;
                        scrollbar-width: none;
                        scroll-behavior: smooth;
                        padding-left: 20px;
                        padding-right: 20px;
                        "
                        onwheel="event.preventDefault()"
                        ontouchstart="event.preventDefault()">
                        
                        <!-- Card (Repeat as needed) -->
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                        <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                        <div class="p-2 text-start">
                            <h5 class="fw-bold fs-5 mt-2 mb-2">Resorts</h5>
                            <small class="text-muted mb-3 d-block">Apr 11 - Apr 13</small>
                            <div class="d-flex justify-content-between mb-3">
                            <small>2 available</small>
                            <small class="text-muted">2 adults</small>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                        </div>                 
                        <!-- Right Arrow -->
                        <button type="button"
                        class="position-absolute top-50 end-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer').scrollBy({left: 300, behavior: 'smooth'})"
                        style="margin-right: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-right fs-3"></i>
                        </button>
                    </div>
                    
                </div>
              
                <div class="container text-center my-5 px-4">
                    <div class="row mb-4">
                    <div class="col-12">
                        <h4>Explore Sri Lanka</h4>
                        <p>These popular destinations have a lot to offer</p>
                    </div>
                    </div>
                
                    <div class="position-relative border border-secondary-subtle border-2 py-4">
                        <!-- Left Arrow -->
                        <button type="button"
                        class="position-absolute top-50 start-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer1').scrollBy({left: -300, behavior: 'smooth'})"
                        style="margin-left: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-left fs-3"></i>
                        </button>
                    
                        <div class="wrapper">
                            <!-- Scrollable Gallery -->
                            <div id="scrollContainer1"
                            class="d-flex px-5 gap-4 pb-3"
                            style="
                            overflow-x: hidden;
                            pointer-events: auto;
                            touch-action: none;
                            scrollbar-width: none;
                            "
                            onwheel="event.preventDefault()"
                            ontouchstart="event.preventDefault()">
                            
                            <!-- Card (Repeat as needed) -->
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 150px; object-fit: cover;" alt="Resorts">
                            <div class="p-2 text-center">
                                <h5 class="fw-bold fs-5 mt-2 mb-2">Colombo</h5>
                                <small class="text-muted mb-3 d-block">120 properties</small>                         
                            </div>
                            </div>
                            </div>
                        </div>
                    
                        <!-- Right Arrow -->
                        <button type="button"
                        class="position-absolute top-50 end-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer1').scrollBy({left: 300, behavior: 'smooth'})"
                        style="margin-right: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-right fs-3"></i>
                        </button>
                        
                                    
                    </div>
                </div>
                <div class="container text-center my-5 px-4">
                    <div class="row mb-4">
                    <div class="col-12">
                        <h4>Explore Sri Lanka</h4>
                        <p>These popular destinations have a lot to offer</p>
                    </div>
                    </div>
                
                    <div class="position-relative border border-secondary-subtle border-2 py-4">
                        <!-- Left Arrow -->
                        <button type="button"
                        class="position-absolute top-50 start-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer2').scrollBy({left: -300, behavior: 'smooth'})"
                        style="margin-left: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-left fs-3"></i>
                        </button>
                    
                        <div class="wrapper">
                            <!-- Scrollable Gallery -->
                            <div id="scrollContainer2"
                            class="d-flex px-5 gap-4 pb-3"
                            style="
                            overflow-x: hidden;
                            pointer-events: auto;
                            touch-action: none;
                            scrollbar-width: none;
                            "
                            onwheel="event.preventDefault()"
                            ontouchstart="event.preventDefault()">
                            
                            <!-- Card (Repeat as needed) -->
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            <div class="border border-secondary-subtle border-2 rounded flex-shrink-0" style="width: 200px;">
                                <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid rounded-top" style="height: 220px; object-fit: cover;" alt="Resorts">
                                <div class="p-1 text-center rounded-bottom" style="background: linear-gradient(360deg, rgba(65, 75, 210, 1) 0%, rgba(255, 255, 255, 1) 98%);">
                                    <h5 class="fw-bold fs-5 ">Colombo</h5>
                                </div>
                            </div>
                            </div>
                        </div>
                    
                        <!-- Right Arrow -->
                        <button type="button"
                        class="position-absolute top-50 end-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer2').scrollBy({left: 300, behavior: 'smooth'})"
                        style="margin-right: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-right fs-3"></i>
                        </button>
                        
                                    
                    </div>
                </div>
                <div class="container text-center my-5 px-4">
                    <div class="row mb-4">
                    <div class="col-12">
                        <h4>Popular attractions in Kandy</h4>
                        <p>Experience everything this city has to offer</p>
                    </div>
                    </div>
                
                    <div class="row g-3">
                    <!-- Main Image Section -->
                    <div class="col-md-9 col-12  position-relative border-end border-dark mb-3 mb-md-0" style="height: 500px;">
                        <img id="mainImage" src="{{ asset('images/thumbnail_img3.jpg') }}" class="img-fluid w-100 h-100 rounded shadow" style="object-fit: cover;" alt="Main Display">
                
                        <!-- Left Arrow -->
                        <button onclick="navigateImage(-1)"
                        class="btn  position-absolute top-50 start-0 translate-middle-y "
                        style="margin-left: 20px;width: 40px; height: 40px; z-index: 10;color: white;">
                        <i class="bx bx-chevron-left fs-4"></i>
                        </button>
                
                        <!-- Right Arrow -->
                        <button onclick="navigateImage(1)"
                        class="btn  position-absolute top-50 end-0 translate-middle-y "
                        style="margin-right: 25px; width: 40px; height: 40px; z-index: 10;color: white;">
                        <i class="bx bx-chevron-right fs-4"></i>
                        </button>
                    </div>
                    
                
                    <!-- Thumbnail Column: vertical on md+, horizontal scrollable on small -->
                        <div class="col-md-3 col-12">
                            <!-- Horizontal slider on small screens -->
                            <div class="d-md-none">
                            <div class="d-flex overflow-auto gap-2 pb-2">
                                <img src="{{ asset('images/thumbnail_img1.jpg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/thumbnail_img2.jpg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/thumbnail_img3.jpg') }}" class="img-fluid border border-primary" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/thumbnail_img4.jpg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/thumbnail_img3.jpg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/beach3.jpg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                <img src="{{ asset('images/beach2.jpeg') }}" class="img-fluid" style="height: 100px; width: auto; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                            </div>
                            </div>
                    
                            <!-- Vertical grid on medium+ screens -->
                            <div class="d-none d-md-block" style="height: 500px; overflow-y: auto;">
                            <div class="row row-cols-1 gy-2">
                                <div class="col">
                                <img src="{{ asset('images/thumbnail_img1.jpg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/thumbnail_img2.jpg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/thumbnail_img3.jpg') }}" class="img-fluid border border-primary" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/thumbnail_img4.jpg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/thumbnail_img3.jpg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/beach3.jpg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                                <div class="col">
                                <img src="{{ asset('images/beach2.jpeg') }}" class="img-fluid" style="height: 130px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this)">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="container text-center my-5 px-4">
                    <div class="row mb-4">
                    <div class="col-12">
                        <h4>Deals for weekend</h4>
                        <p>These popular destinations have a lot to offer</p>
                    </div>
                    </div>
                
                    <div class="position-relative border border-secondary-subtle border-2 py-4">
                        <!-- Left Arrow -->
                        <button type="button"
                        class="position-absolute top-50 start-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer3').scrollBy({left: -300, behavior: 'smooth'})"
                        style="margin-left: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-left fs-3"></i>
                        </button>
                    
                        <div class="wrapper">
                            <!-- Scrollable Gallery -->
                        <div id="scrollContainer3"
                        class="d-flex px-5 gap-4 pb-3"
                        style="
                        overflow-x: hidden;
                        pointer-events: auto;
                        touch-action: none;
                        scrollbar-width: none;
                        scroll-behavior: smooth;
                        padding-left: 70px;
                        padding-right: 70px;
                        "
                        onwheel="event.preventDefault()"
                        ontouchstart="event.preventDefault()">
                        
                        <!-- Card (Repeat as needed) -->
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                        <div class="border border-secondary-subtle border-2 rounded overflow-hidden flex-shrink-0" style="width: 200px;">
                            <!-- Image -->
                            <div class="position-relative">
                            <img src="{{ asset('images/Kurunegala1.jpg') }}" class="img-fluid w-100" style="height: 150px; object-fit: cover;" alt="Resorts">         
                            </div>
                        
                            <!-- Content -->
                            <div class="p-2 text-start">
                                <!-- Genius Label -->
                            <span class="badge bg-primary rounded py-1 mb-1" style="font-size: 12px;">
                                Genius
                            </span>
                            <h6 class="fw-bold mb-1">Grand Bell Hotel</h6>
                            <small class="text-muted d-block mb-2">Colombo, Sri Lanka</small>
                        
                            <!-- Price Row -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 12px;">LKR 300</small>
                                <small class="text-danger fw-bold" style="font-size: 12px;">LKR 100</small>
                                </div>
                                <small class="text-black fw-semibold" style="font-size: 12px;">2 nights</small>
                            </div>
                            </div>
                        </div>
                    
                        <!-- Repeat above card block for more items -->
                    </div>
                        </div>
                        
                    
                        <!-- Right Arrow -->
                        <button type="button"
                        class="position-absolute top-50 end-0 translate-middle-y btn rounded-circle shadow d-flex justify-content-center align-items-center"
                        onclick="document.getElementById('scrollContainer3').scrollBy({left: 300, behavior: 'smooth'})"
                        style="margin-right: -25px; width: 50px; height: 50px; z-index: 10;background-color: rgba(65, 75, 210, 1);color: white;">
                        <i class="bx bx-chevron-right fs-3"></i>
                        </button>
                    </div>
                    
                </div>

                <div class="container my-4 rounded-3 p-4 px-4">
                    <!-- Filter Tabs -->
                    <ul class="nav nav-tabs custom-tabs justify-content-center mb-4" id="listingTabs">
                    <li class="nav-item">
                        <a class="nav-link active " data-bs-toggle="tab" href="#hotelsTab">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#villasTab">Villas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#restaurantsTab">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#apartmentsTab">Apartments</a>
                    </li>
                    </ul>
                
                    <!-- Tab Content -->
                    <div class="tab-content">
                    <!-- Hotels -->
                    <div class="tab-pane fade show active" id="hotelsTab">
                        <div class="row row-cols-1 row-cols-md-4 g-3" id="hotelList">
                            <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);"> Hotel Sigiriya </div></div>        
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Jetwing Blue</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Cinnamon Grand</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Amaya Hills</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Galle Face Hotel</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Taj Bentota</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Jetwing Lagoon</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Citrus Waskaduwa</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Mount Lavinia Hotel</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Blue Water Resort</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Kingsbury</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Galadari</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Heritance Ahungalla</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">The Fortress Resort</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Avani Kalutara</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Earl’s Regency</div></div>
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-link text-primary p-0 text-decoration-none" id="hotelsShowMoreBtn">+ Show more</button>
                        <button class="btn btn-link text-primary p-0 d-none text-decoration-none" id="hotelsShowLessBtn">− Show less</button>
                        </div>
                    </div>
                
                    <!-- Repeat same pattern for Villas -->
                    <div class="tab-pane fade" id="villasTab">
                        <div class="row row-cols-1 row-cols-md-4 g-3" id="villaList">
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Villa Ocean View</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Ambalama Villa</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Villa Green Garden</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Tamarind Hill</div></div>
                        <!-- Add more if needed -->
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-link text-primary p-0 text-decoration-none" id="villasShowMoreBtn">+ Show more</button>
                        <button class="btn btn-link text-primary p-0 d-none text-decoration-none" id="villasShowLessBtn">− Show less</button>
                        </div>
                    </div>
                
                    <!-- Restaurants -->
                    <div class="tab-pane fade" id="restaurantsTab">
                        <div class="row row-cols-1 row-cols-md-4 g-3" id="restaurantList">
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Ministry of Crab</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Upali's by Nawaloka</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">The Lagoon</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Curry Leaf</div></div>
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-link text-primary p-0 text-decoration-none" id="restaurantsShowMoreBtn">+ Show more</button>
                        <button class="btn btn-link text-primary p-0 d-none text-decoration-none" id="restaurantsShowLessBtn">− Show less</button>
                        </div>
                    </div>
                
                    <!-- Apartments -->
                    <div class="tab-pane fade" id="apartmentsTab">
                        <div class="row row-cols-1 row-cols-md-4 g-3" id="apartmentList">
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">SkyLounge Apartments</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Ocean Breeze Apartments</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Colombo City Stay</div></div>
                        <div class="col"><div class="rounded px-3 py-2 small" style="border: 1px solid rgba(65, 75, 210, 1); background-color: rgba(230,230,250,1);">Luxury Loft</div></div>
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-link text-primary p-0 text-decoration-none" id="apartmentsShowMoreBtn">+ Show more</button>
                        <button class="btn btn-link text-primary p-0 d-none text-decoration-none" id="apartmentsShowLessBtn">− Show less</button>
                        </div>
                    </div>
                    </div>
                </div>             
              
        </div>


        <!-- Footer Main -->
        @include('user.partials.footer')

<script>
  const images = [
    "images/thumbnail_img1.jpeg",
    "images/thumbnail_img2.jpeg",
    "images/thumbnail_img3.jpg",
    "images/thumbnail_img4.jpg",
    "images/thumbnail_img3.jpg",
    "images/beach3.jpg",
    "images/beach2.jpeg"
  ];

  let currentIndex = 2; // 'other1.jpg'
  const mainImage = document.getElementById('mainImage');

  function changeMainImage(img) {
    mainImage.src = img.src;
    currentIndex = images.indexOf(img.src.split('/').pop());
  }

  function navigateImage(direction) {
    currentIndex = (currentIndex + direction + images.length) % images.length;
    mainImage.src = images[currentIndex];
  }
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
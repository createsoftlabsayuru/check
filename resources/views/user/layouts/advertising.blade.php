<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advertising</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-advertising.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
          <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Advertising</span>
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
      

      <div class="about-overlay">
        <h1>ADVERTISING</h1>
        <p>Promote your brand effectively with our smart advertising solutions.</p>
        <p>Reach the right audienece and grow your business.</p>
      </div>
    </header>



<div class="d-flex flex-wrap justify-content-center gap-5 mt-5">
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main')}}" target="_blank" style="text-decoration: none; padding-left: 5px; margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle " >
            <img src="{{ asset('images/flat-color-icons_home.png') }}" class="icon-img mb-1 " alt="Home" style="width: 40px; height: 40px; ">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Home</div>
          </div>
          </a>

          <a href="{{ route('user.about')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/fluent-color_contact-card-24.png') }}" class="icon-img mb-1" alt="About" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">About</div>
          </div>
          </a>

         <a href="{{ route('user.products') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/Phone Contact.png') }}" class="icon-img mb-1" alt="Product" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Product</div>
          </div>
          </a>

         <a href="{{ route('user.service') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/flat-color-icons_services.png') }}" class="icon-img mb-1" alt="Service" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Service</div>
          </div>
          </a>

         <a href="{{ route('user.job') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Jobs</div>
          </div>
          </a>
          
        <a href="{{ route('user.blog') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Blogs</div>
          </div>
          </a>

         <a href="{{ route('user.events') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 40px; height: 40px;" >
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Event</div>
          </div>
          </a>

        <a href="{{ route('user.advertising') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png') }}" class="icon-img mb-1" alt="Advertise" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Advertise</div>
          </div>
          </a>

        <a href="{{ route('user.contact')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/phone.png') }}" class="icon-img mb-1" alt="Contact us" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Contact us</div>
          </div>
        </div>
      </a>


 <h2 class="section-title">Achieve All Your Goals</h2>

  <div class="gallery-wrapper">
    <!-- Left Large Image -->
    <div class="left-large gallery-image">
      <img src="{{ asset('images/advertising-image1.jpg') }}" alt="Maximize leads">
      <div class="overlay">Maximize leads & conversations</div>
    </div>

    <!-- Right Grid of 4 Images -->
    <div class="right-grid">
      <div class="gallery-image">
        <img src="{{ asset('images/advertising-image2.jpg') }}" alt="Online Sales">
        <div class="overlay">Increase online sales</div>
      </div>
      <div class="gallery-image">
        <img src="{{ asset('images/advertising-image3.jpg') }}" alt="Foot Traffic">
        <div class="overlay">Drive in-store foot traffic</div>
      </div>
      <div class="gallery-image">
        <img src="{{ asset('images/advertising-image4.jpg') }}" alt="Brand to People">
        <div class="overlay">Show your brand to more people</div>
      </div>
      <div class="gallery-image">
        <img src="{{ asset('images/advertising-image5.jpg') }}" alt="Market App">
        <div class="overlay">Market your app to new users</div>
      </div>
    </div>
  </div>



 <section class="advertise-section">
    <h2>Advertise your Business Online</h2>

    <div class="card-grid">
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 1">
        <div class="overlay-text">Home Page Main Slider</div>
      </div>
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 2">
        <div class="overlay-text">Category Page banners</div>
      </div>
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 3">
        <div class="overlay-text">Sub Category Page Bottom banners</div>
      </div>
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 4">
        <div class="overlay-text">Category Index Page banners</div>
      </div>
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 5">
        <div class="overlay-text">Personal Names directory banners</div>
      </div>
      <div class="card">
        <img src="{{ asset('images/advertising-cover.png') }}" alt="Ad 6">
        <div class="overlay-text">Home Page Main Slider</div>
      </div>
    </div>
  </section>



  @include('user.partials.footer')

<!-- Bootstrap 5 JS Bundle with Popper -->
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

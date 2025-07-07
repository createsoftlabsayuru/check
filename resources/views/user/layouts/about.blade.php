<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-about.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">






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
  <span1 id="breadcrumb-page">About</span>
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
@include('user.partials.sidebar')
@include('user.partials.login-modal')
@include('user.partials.signup-modal')

<header class="about-header">

   <div class="about-overlay">
    <h1>ABOUT</h1>
    <p>Learn more about who we are, what we do, and what drives us.</p>
    <p>Discover our story, mission, and values.</p>
  </div>
</header>




<div class="d-flex flex-wrap justify-content-center gap-5 mt-5">
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main') }}" target="_blank" style="text-decoration: none; padding-left: 5px; margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle " >
            <img src="{{ asset('images/flat-color-icons_home.png')}}" class="icon-img mb-1 " alt="Home" style="width: 40px; height: 40px; ">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Home</div>
          </div>
          </a>

          <a href="{{ route('user.about') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/fluent-color_contact-card-24.png')}}" class="icon-img mb-1" alt="About" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">About</div>
          </div>
          </a>

         <a href="{{ route('user.products')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/Phone Contact.png')}}" class="icon-img mb-1" alt="Product" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Product</div>
          </div>
          </a>

         <a href="{{ route('user.service')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/flat-color-icons_services.png')}}" class="icon-img mb-1" alt="Service" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Service</div>
          </div>
          </a>

         <a href="{{ route('user.job')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/Job.png')}}" class="icon-img mb-1" alt="Jobs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Jobs</div>
          </div>
          </a>
          
        <a href="{{ route('user.blog')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('https://img.icons8.com/color/48/blogger.png')}}" class="icon-img mb-1" alt="Blogs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Blogs</div>
          </div>
          </a>

         <a href="{{ route('user.events')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png')}}" class="icon-img mb-1" alt="Event" style="width: 40px; height: 40px;" >
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Event</div>
          </div>
          </a>

        <a href="{{ route('user.advertising')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png')}}" class="icon-img mb-1" alt="Advertise" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Advertise</div>
          </div>
          </a>

        <a href="{{ route('user.contact')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/phone.png')}}" class="icon-img mb-1" alt="Contact us" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Contact us</div>
          </div>
        </div>
      </a>




<section class="image-contact-section">
  <div class="left-images">
    <div class="image-grid">
      <img src="{{ asset('images/about -image1.png')}}" alt="Image 1">
      <img src="{{ asset('images/about-image2.png')}}" alt="Image 2">
      <img src="{{ asset('images/about-image3.png')}}" alt="Image 3">
      <img src="{{ asset('images/about-image4.png')}}" alt="Image 4">
    </div>
  </div>
  <div class="right-content">
    
    <p style="text-align: justify; ">
      We’d love to hear from you. Whether you have a question about our services, products, or anything else, our team is ready to help you.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugit obcaecati quasi sed repellat dignissimos doloribus explicabo quae! Architecto temporibus voluptatum culpa doloribus aliquam beatae quod quaerat mollitia asperiores deserunt.
      Lorem, ipsum dolor
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum ab aperiam sequi magni veniam culpa quo expedita! Molestias quod tempore ratione vero, quaerat iusto? Facere, praesentium? A optio exercitationem iusto?
    </p>
    <a href="contact.html">
  <button class="contact-btn">Contact Us</button>
</a>

  </div>
</section>


<section class="mission-vision-section">
    <div class="text-content">
      <h2 class="mission-title">Mission</h2>
      <p style="text-align: justify;">
        Our mission is to empower individuals and organizations with innovative digital solutions that drive growth, simplify operations, and improve everyday life.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam est, aliquam error sunt atque accusantium aliquid nihil distinctio ratione rem accusamus. Corporis voluptates quam, ratione laboriosam iure voluptatum cupiditate deleniti.
      </p>

      <h2 class="mission-title">Vision</h2>
      <p style="text-align: justify;">
        Our vision is to be a global leader in technology innovation, delivering sustainable solutions that create positive impact in communities around the world.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aperiam in sed pariatur, consequuntur vitae facilis architecto repellat provident, harum ipsum. Est similique officia soluta, exercitationem ex neque. Soluta, explicabo!
      </p>
    </div>

    <div class="image-side">
      <img src="{{ asset('images/about-image2.png')}}" alt="Mission and Vision Image">
    </div>
  </section>

  <section class="popular-category-section">
    <h2>Popular Category</h2>
    <div class="card-container">

      <div class="category-card">
        <img src="{{ asset('images/about-icon.png') }}" alt="Mobile Apps">
        <h3>Mobile Apps</h3>
        <p>Build engaging apps for Android and iOS platforms.</p>
      </div>

      <div class="category-card">
        <img src="{{ asset('images/about-icon.png') }}" alt="Mobile Apps">
        <h3>Mobile Apps</h3>
        <p>Build engaging apps for Android and iOS platforms.</p>
      </div>

      <div class="category-card">
        <img src="{{ asset('images/about-icon.png') }}" alt="Mobile Apps">
        <h3>Mobile Apps</h3>
        <p>Build engaging apps for Android and iOS platforms.</p>
      </div>

      <div class="category-card">
        <img src="{{ asset('images/about-icon.png') }}" alt="Mobile Apps">
        <h3>Mobile Apps</h3>
        <p>Build engaging apps for Android and iOS platforms.</p>
      </div>

    </div>
  </section>

 <section class="main-office-section">
    <h2>Main Offices</h2>

    <div class="office-card">
      <h3 class="office-title">Canada</h3>
      <p class="office-address">
        123 Maple Street, Suite 400<br>
        
      </p>
      <div class="contact-row">
        <i class="fas fa-phone-alt"></i>
        +1 (416) 555-1234
      </div>
    </div>
  </section>
  
 
  <section class="contact-cards">
    <h2 class="underline-title">Country Offices</h2>
  <div class="contact-card">
    <h3>SriLanka</h3>
    <p>Address : No. 45, Kynsey Road, Borella, Colombo 08, Sri Lanka</p>
    <div class="phone">
      <i class="fas fa-phone-alt"></i>
      <span>+1 (xxx) xxx-xxxx</span>
    </div>
  </div>

  <div class="contact-card">
    <h3>USA</h3>
    <p>Address : No. 45, Kynsey Road, Borella, Colombo 08, Sri Lanka</p>
    <div class="phone">
      <i class="fas fa-phone-alt"></i>
      <span>+1 (xxx) xxx-xxxx</span>
    </div>
  </div>

  <div class="contact-card">
    <h3>Dubai</h3>
    <p>Address : No. 45, Kynsey Road, Borella, Colombo 08, Sri Lanka</p>
    <div class="phone">
      <i class="fas fa-phone-alt"></i>
      <span>+1 (xxx) xxx-xxxx</span>
    </div>
  </div>
</section>


<section class="contact-banner">
  <div class="overlay-text">
    <h2>Contact Us</h2>
    <p><a href="contact.html">Get in touch</a></p>
  </div>
</section>





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

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us </title>
  <link rel="stylesheet" href="{{ asset('css/user/style-contact.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
          <span1 id="breadcrumb-page">Contact us</span>
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
    <h1>CONTACT US</h1>
    <p>GET IN TOUCH WITH US.</p>
    
  </div>
</header>


      <div class="d-flex flex-wrap justify-content-center gap-5 mt-5">
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main') }}" target="_blank" style="text-decoration: none; padding-left: 5px; margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle " >
            <img src="{{ asset('images/flat-color-icons_home.png') }}" class="icon-img mb-1 " alt="Home" style="width: 40px; height: 40px; ">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Home</div>
          </div>
          </a>

          <a href="{{ route('user.about') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
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

         <a href="{{ route('user.service')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/flat-color-icons_services.png') }}" class="icon-img mb-1" alt="Service" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Service</div>
          </div>
          </a>

         <a href="{{ route('user.job')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Jobs</div>
          </div>
          </a>
          
        <a href="{{ route('user.blog')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
            <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Blogs</div>
          </div>
          </a>

         <a href="{{ route('user.events')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
            <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 40px; height: 40px;" >
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Event</div>
          </div>
          </a>

        <a href="{{ route('user.advertising')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
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
        
        </a>
      </div>





 




 
    





<div class="container-1">
  <!-- Left Section -->
  <div class="left-section">
    <form>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ipsam est cum nulla hic adipisci quod dolor a? Saepe ullam consequuntur alias quam et cupiditate quos nostrum inventore sequi minima.

      </p>
      <div class="form-grid">
        <div>
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name">
        </div>
        <div>
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email">
        </div>
        <div>
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject">
        </div>
        <div>
          <label for="department">Business Department</label>
          <select id="department" name="department">
            <option value="">Select Department</option>
            <option value="sales">Sales</option>
            <option value="support">Support</option>
            <option value="marketing">Marketing</option>
          </select>
        </div>
        <div class="form-grid-full">
          <label for="message">Your Message</label>
          <textarea id="message" name="message"></textarea>
        </div>
        <div class="form-grid-full">
          <button type="submits">Send Message</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Right Section -->
  <div class="right-section">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.956381929014!2d-122.08424908469292!3d37.4219997798259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02eddefd63%3A0x49aa3b4418d0e248!2sGoogleplex!5e0!3m2!1sen!2sus!4v1632593474717!5m2!1sen!2sus"
      allowfullscreen=""
      loading="lazy">
    </iframe>
  </div>
</div>


<section class="contact-icons-section">
  <div class="contact-icon-box">
    <img src="{{ asset('images/call.png') }}" alt="Call Icon">
    <p>+94 11 234 5678</p>
  </div>
  <div class="contact-icon-box">
    <img src="{{ asset('images/location.png') }}" alt="Location Icon">
    <p>No. 45 Galle Road, Colombo 03</p>
  </div>
  <div class="contact-icon-box">
    <img src="{{ asset('images/email.png') }}" alt="Mail Icon">
    <p>info@lankanbuy.com</p>
  </div>
</section>




  <!-- Footer Main -->
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobs</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-job.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
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
          <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto" >
          <span class="fw-bold" >LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Job</span>
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
    <h1>JOBS</h1>
    <p>Apply and Join with us</p>  

  <div class="search-bar">
  <div class="search-field">
    <i class="fas fa-briefcase"></i>
    <select>
      <option>Software</option>
      <option>Marketing</option>
      <option>Finance</option>
    </select>
    <i class="fas fa-chevron-down dropdown-icon"></i>
  </div>

  <div class="search-field">
    <i class="fas fa-map-marker-alt"></i>
    <select>
      <option>Select an option</option>
      <option>Colombo</option>
      <option>Kandy</option>
    </select>
    <i class="fas fa-chevron-down dropdown-icon"></i>
  </div>

  <button class="search-btn">
    <i class="fas fa-search"></i>
  </button>
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
</div>




<section class="popular-categories">
  <div class="container">
    <h2>Popular Categories</h2>
    <p>Find jobs from various domain</p>

    <div class="categories-grid">
      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-\ image\ 1.jpg') }}');">
          <div class="overlay">
            <h3>Technology</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image2.jpg') }} ');">
          <div class="overlay">
            <h3>Software</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image3.jpg') }}');">
          <div class="overlay">
            <h3>Aviation</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image4.jpg') }}');">
          <div class="overlay">
            <h3>Management</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image4.jpg') }}');">
          <div class="overlay">
            <h3>Business</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image5.jpg') }}');">
          <div class="overlay">
            <h3>Art</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image6.jpg') }}');">
          <div class="overlay">
            <h3>Education</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image7.jpg') }}');">
          <div class="overlay">
            <h3>Law Enforcement</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image9.jpg') }}');">
          <div class="overlay">
            <h3>Media</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image10.jpg') }}');">
          <div class="overlay">
            <h3>Medical</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      
      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image2.jpg') }}');">
          <div class="overlay">
            <h3>Software</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>

      
      <a href="popular-categories.html">
        <div class="category-card" style="background-image: url('{{ asset('images/job-image2.jpg') }}');">
          <div class="overlay">
            <h3>Software</h3>
            <span>2 Jobs</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


<section class="trending-jobs">
  <div class="container">
    <h2>Trending Jobs</h2>
    <p>Find jobs from various domain</p>

    <div class="jobs-grid">
      <!-- Repeat this job card 9 times -->
      <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png') }}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>

        <div class="job-buttons">
        <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
        <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
      </div>

  


  
        </div>
  


        
  

 
      
      <!-- Repeat 8 more times -->
          <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>



      </div>

         <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>

           <div class="job-card" onclick="showButtons(this)">
        <div class="job-header">
          <img src="{{ asset('images/job-icon.png')}}" alt="Nawaloka Logo">
          <div class="job-deadline">⏱ 4 days left</div>
        </div>

        <div class="job-main">
          <div class="job-title">
            <h3>Office Assistant</h3>
            <p class="company">Nawaloka Hospital PLC</p>
          </div>
          <div class="salary">Salary: 20K</div>
        </div>

        <div class="job-info">
          <span>🕒 Full time</span>
          <span>📍 New-York, USA</span>
        </div>
        <div class="job-buttons">
          <a href="{{ route('user.apply') }}"><button class="apply1-btn">Apply Now</button></a>
          <a href="{{ route('user.jobDetail') }}"><button class="save-btn">More Details</button></a>
    </div>
      </div>
    </div>
  </div>

 

</section>


<section class="join-section">
  <div class="container">
    <h1 class="section-title">Join With Us</h1>
    <p class="section-p">We connect with targeted customers for greater bussiness conversion
    </p>
    
    <div class="join-cards">
      <!-- Card 1 -->
      <div class="join-card" style="background-image: url('{{ asset('images/job-cover.jpg') }}');">
        <div class="overlay-content">
          <h2>Are you looking for a job?</h2>
          <p>Find thousands of job opportunities that suit your profile.</p>
          <button class="join-btn">Register for Free</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="join-card" style="background-image: url('{{ asset('images/job-cover.jpg') }}');">
        <div class="overlay-content">
          <h2>Boost Your Career</h2>
          <p>Connect with top companies and unlock your potential.</p>
          <button class="join-btn">Post a Job</button>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="premium-jobs-section">
  <div class="premium-jobs-header">
    <h2>Premium Jobs</h2>
    <p>Find jobs from various domain</p>
  </div>

  <div class="scroll-container-wrapper">
    <button class="scroll-btn left-btn">&#8592;</button>
    
    <div class="premium-job-cards" id="scroll-container">
      <!-- Repeat cards -->
      <div class="premium-card">
        
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>

       <div class="premium-card">
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>

       <div class="premium-card">
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>

       <div class="premium-card">
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>

       <div class="premium-card">
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>

         <div class="premium-card">
         <img src="images/job-card-icon.png" alt="Company Logo" class="company-logo">
        <h3>Accountancy<br>& Finance</h3>
        <p class="desc">Lorem ipsum dolor adipisicing elit.</p>
        <div class="info">
          <span><strong>504</strong> Job posts</span>
          <span><i class="fas fa-eye"></i> 10k</span>
        </div>
        <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply now</button></a>
      </div>



    <button class="scroll-btn right-btn">&#8594;</button>
  </div>
</section>





<section class="how-it-works-section">
  <h2 class="how-title">How It Works</h2>
  <p class="how-subtitle">Understand how you can get your dream job in a few simple steps.<br>how you can get your dream job</p>

  <div class="how-cards">
    <!-- Card 1 -->
    <div class="how-card">
      <img src="{{ asset('images/how- 1.png') }}" alt="Step 1" class="how-image">
      <h3 class="card-title">Create an Account</h3>
      <p class="card-text">Build sleek and functional <br> Android & Ios Applications</p>
    </div>

    <!-- Card 2 -->
    <div class="how-card">
      <img src="{{ asset('images/how-2.png') }}" alt="Step 2" class="how-image">
      <h3 class="card-title">Add your business</h3>
      <p class="card-text">Build sleek and functional <br> Android & Ios Applications</p>
    </div>

    <!-- Card 3 -->
    <div class="how-card">
      <img src="{{ asset('images/how-3.png') }}" alt="Step 3" class="how-image">
      <h3 class="card-title">Get more leads</h3>
      <p class="card-text">Build sleek and functional <br> Android & Ios Applications</p>
    </div>

    <!-- Card 4 -->
    <div class="how-card">
      <img src="{{ asset('images/how-4.png') }}" alt="Step 4" class="how-image">
      <h3 class="card-title">Archive goles</h3>
      <p class="card-text">Build sleek and functional <br> Android & Ios Applications</p>
    </div>
  </div>
</section>


<section class="contact-banner">
  <div class="overlay-text">
    <h2>Find Your Dream Job</h2>
    <p>Explore opportunities from top hiring companies</p>
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

<script>
  const scrollContainer = document.getElementById('scroll-container');
  const leftBtn = document.querySelector('.left-btn');
  const rightBtn = document.querySelector('.right-btn');

  leftBtn.addEventListener('click', () => {
    scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
  });

  rightBtn.addEventListener('click', () => {
    scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
  });
</script>




















</body>
</html>
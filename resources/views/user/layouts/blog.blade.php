<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs </title>
  <link rel="stylesheet" href="{{ asset('css/user/style-blog.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body style="background-color: rgba(230,230,250,1);">
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
          <span1 id="breadcrumb-page">Blog</span>
        </div>
  
      </div>
  
      <!-- Right: Buttons -->
      <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
        <button class="btn1 btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
        <button class="btn1 btn-signup text-white" data-bs-toggle="modal"
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
    <h1>Blogs</h1>
    <p>Learn more about who we are, what we do, and what drives us.</p>
    <p>Discover our story, mission, and values.</p>
  </div>
</header>



 <div class="d-flex flex-wrap justify-content-center gap-5 mt-5">
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main') }}" target="_blank" style="text-decoration: none; padding-left: 5px; margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles " >
            <img src="{{ asset('images/flat-color-icons_home.png') }}" class="icon-img mb-1 " alt="Home" style="width: 40px; height: 40px; ">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Home</div>
          </div>
          </a>

          <a href="{{ route('user.about')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles" >
            <img src="{{ asset('images/fluent-color_contact-card-24.png') }}" class="icon-img mb-1" alt="About" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">About</div>
          </div>
          </a>

         <a href="{{ route('user.products') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles" >
            <img src="{{ asset('images/Phone Contact.png') }}" class="icon-img mb-1" alt="Product" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Product</div>
          </div>
          </a>

         <a href="{{ route('user.service')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles" >
            <img src="{{ asset('images/flat-color-icons_services.png') }}" class="icon-img mb-1" alt="Service" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Service</div>
          </div>
          </a>

         <a href="{{ route('user.job') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles" >
            <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Jobs</div>
          </div>
          </a>
          
        <a href="{{ route('user.blog') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles" >
            <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Blogs</div>
          </div>
          </a>

         <a href="{{ route('user.events') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles">
            <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 40px; height: 40px;" >
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Event</div>
          </div>
          </a>

        <a href="{{ route('user.advertising')}}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles">
            <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png') }}" class="icon-img mb-1" alt="Advertise" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Advertise</div>
          </div>
          </a>

        <a href="{{ route('user.contact') }}" target="_blank" style="text-decoration: none;  margin-right: 15px;">
          <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circles">
            <img src="{{ asset('https://img.icons8.com/color/48/phone.png') }}" class="icon-img mb-1" alt="Contact us" style="width: 40px; height: 40px;">
            <div class="label small text-white" style="font-size: 14px; margin-bottom: 8px;">Contact us</div>
          </div>
       
      </a>

 </div>

  
        <section class="blog-section">
     


      

        <!-- main content  -->

        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    <!-- left part 1st section  -->
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h3 class="section-title">New Blogs</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post  -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            
                                           
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    
                                                    Techie Coder
                                                </a>
                                            </li>
                                            <li class="list-inline-item">05 Jun 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="{{ route('user.blogDetails')}}">Lorem ipsum dolor sit amet</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                            This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo,
                                            quasi.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="{{ route('user.blogDetails')}}">
                                                    2 Policemen saved life like a hero
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="{{ route('user.blogDetails')}}">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                    3 ways to remove dark spots naturally
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="{{ route('user.blogDetails')}}">
                                                    Top 10 Interior designers for your dream home.
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="{{ route('user.blogDetails')}}">
                                                    Learn how to make desert at home.
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                                <div class="text-center">
                                    <button class="btn btn-simple"><a href="">Load More</a></button>
                                </div>
                                
                                

                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>
                        <br>
                        <br>

                        <div class="section-header">
                            <h3 class="section-title">Trending</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            
                                           
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    
                                                    Techie Coder
                                                </a>
                                            </li>
                                            <li class="list-inline-item">24 May 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="{{ route('user.blogDetails')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                            This is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
                                            id.
                                        </p>
                                    </div>

                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                                    </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>




                                </div>
                                

                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            
                                           
                                            <a href="#">
                                                <div class="inner">
                                                    
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </div>

                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Arogya ap to display vaccination status</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog-post-cover.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Petrol, diesel prices hiked again today.</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-simple"><a href="">Load More</a></button>
                            </div>
                        </div>
                        



                        <div class="spacer" data-height="50"></div>

                     
                       
                    

                        <div class="spacer" data-height="50"></div>
                        <br>
                        <br>

<div class="section-header">
    <h3 class="section-title">Latest Posts</h3>
</div>

<div class="padding-30 rounded bordered">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Trending</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <i class="fa fa-thumbs-up fs-5 me-3 p-2"></i>
                                            <i class="fa fa-eye fs-5 me-3 p-2"></i>
                                            <ul class="social-icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                </ul>

                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <i class="fa fa-thumbs-up fs-5 me-3 p-2"></i>
                                            <i class="fa fa-eye fs-5 me-3 p-2"></i>
                                            <ul class="social-icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                </ul>

                                        
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi.
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <i class="fa fa-thumbs-up fs-5 me-3 p-2"></i>
                                            <i class="fa fa-eye fs-5 me-3 p-2"></i>
                                            <ul class="social-icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                </ul>

                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-2"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-2"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-2"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Finance</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <i class="fa fa-thumbs-up fs-5 me-3 p-2"></i>
                                            <i class="fa fa-eye fs-5 me-3 p-2"></i>

                                            <ul class="social-icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class="p-2"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                </ul>


                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="p-4"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-simple"><a href="">Load More</a></button>
                                </div>
                            </div>
                        </div>
                        <!-- left part over here  -->
</div>





















<!-------------------------------- right part starts from here  ---------------------------------------------------------->

<div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget rounded">
    <div class="card-blog">
    <div class="card-image">
        <img src="{{ asset('images/blog-post-cover.jpg') }}" alt="Cover Image">
        <div class="card-overlay">
            <p class="card-desc">
                Ready to share your thoughts and ideas with the world?
            </p>
            <a href="create-blog-post.html" class="card-btn">Post Blog</a>
        </div>
    </div>
</div>

</div>



                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Popular Posts</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <!--<span class="number"></span>-->
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/user-image.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/user-image.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/user-image.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{ asset('images/user-image.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Lorem ipsum dolor sit amet,  
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Trending</a><span></span></li>
                                        <li><a href="#">Politics</a><span></span></li>
                                        <li><a href="#">Fashion</a><span></span></li>
                                        <li><a href="#">Lifestyle</a><span></span></li>
                                        <li><a href="#">Inspiration</a><span></span></li>
                                        <li><a href="#">Culture</a><span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Newsletter</h3>
                                </div>
                                <div class="widget-content">
                                    <span class="newsletter-headline text-center mb-3">Join 50,000 subscribers</span>
                                    <form action="#">
                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 text-center"
                                                placeholder="Email address...">
                                        </div>
                                        <button class="btn btn-default btn-full">Sign Up</button>

                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">
                                        By signing up, you agree to our <a href="#">Privacy policy</a>
                                    </span>
                                </div>
                            </div>
                        
                           
                          



  <div class="widget rounded post-carousel-section">
    <div class="widget-header text-center">
        <h3 class="widget-title">Featured Posts</h3>
    </div>
    <div class="widget-content">
        <div class="post-carousel-widget">
            <div class="post post-carousel">
                <div class="thumb rounded">
                    <a href="#">
                        <div class="inner">
                            <img src="{{ asset('images/blog-post.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <h5 class="post-title mb-0 mt-4">
                    <a href="#">10 Things to do for being safe of corona</a>
                </h5>
                <ul class="meta list-inline mt-2 mb-0">
                    <li class="list-inline-item"><a href="#">Techie Coder</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <div class="post post-carousel">
                <div class="thumb rounded">
                    <a href="#">
                        <div class="inner">
                            <img src="{{ asset('images/blog-post.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <h5 class="post-title mb-0 mt-4">
                    <a href="#">Wash your hands after certain interval of time.</a>
                </h5>
                <ul class="meta list-inline mt-2 mb-0">
                    <li class="list-inline-item"><a href="#">Techie Coder</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <div class="post post-carousel">
                <div class="thumb rounded">
                    <a href="#">
                        <div class="inner">
                            <img src="{{ asset('images/blog-post.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <h5 class="post-title mb-0 mt-4">
                    <a href="#">Get vaccinated to stop the chain of corona</a>
                </h5>
                <ul class="meta list-inline mt-2 mb-0">
                    <li class="list-inline-item"><a href="#">Techie Coder</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
        </div>
        <!--<div class="slick-arrows-bot">
            <button class="carousel-botNav-prev slick-custom-buttons" type="button" aria-label="Previous">
                <i class="icon-arrow-left"></i>
            </button>
            <button class="carousel-botNav-next slick-custom-buttons" type="button" aria-label="Next">
                <i class="icon-arrow-right"></i>
            </button>
        </div>-->
    </div>
</div>



 <div class="widget rounded tag-cloud-section">
    <div class="widget-header text-center">
        <h3 class="widget-title">Tag Clouds</h3>
    </div>
    <div class="widget-content">
        <a href="#" class="tag">#Trending</a>
        <a href="#" class="tag">#Cooking</a>
        <a href="#" class="tag">#Featured</a>
        <a href="#" class="tag">#Beauty</a>
        <a href="#" class="tag">#Finance</a>
        <a href="#" class="tag">#Celebrities</a>
    </div>
</div>

                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
  

       

    </div>




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




























    <!-- javascripts  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.sticky-sidebar.min.js"></script>
    <script src="main.js"></script>




       
       
    
           
          
    
    
                 

    
           




    <script src="script.js"></script> 

    
</body>
</html>
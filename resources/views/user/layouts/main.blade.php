<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/user/style-home.css')}}">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>
<body>
  <!-- Menu Toggle Hidden Checkbox -->
<input type="checkbox" id="menu-toggle" class="d-none">
<nav class="navbar navbar-expand-lg fixed-top py-3 border-bottom">
  <div class="container-fluid px-4 d-flex align-items-center justify-content-between">

    <!-- Menu Icon -->
    <label for="menu-toggle" class="menu-icon-wrapper text-white fs-4 d-lg-none m-0">
      <i class='bx bx-menu' id="menu-icon"></i>
    </label>

    <!-- Brand -->
    <a class="navbar-brand d-flex flex-column align-items-center p-0" href="#">
      <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
      <span class="fw-bold">LankanBuy</span>
    </a>

    <!-- Search Form (Hidden on small) -->
    <form class="search-form d-none d-lg-flex mx-3">
      <div class="input-group rounded border border-primary overflow-hidden">
        <input type="text" class="form-control border-0" placeholder="What are you looking for ?">
        <span class="input-group-text bg-white border-start"><i class="bi bi-geo-alt-fill text-muted"></i></span>
        <input type="text" class="form-control border-0" value="Colombo, SriLanka">
        <button class="btn"><i class="bi bi-search"></i></button>
      </div>
    </form>

    <!-- Right Buttons -->
    <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
      
      <a href="{{ route('user.addBusiness') }}" class="text-white text-decoration-none">Add business</a>
      <a href="#" class="text-white text-decoration-underline">Write a review</a>
      <button class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
      <button class="btn btn-signup text-white" data-bs-toggle="modal" data-bs-target="#registerModal" >Sign Up</button>
    </div>
  </div>
</nav>

                            <input type="checkbox" id="menu-toggle" class="d-none">

                            <!-- Sidebar Menu -->
                            @include('user.partials.sidebar')
                            @include('user.partials.login-modal')
                            @include('user.partials.signup-modal')
        
        <div class="first-content container-fluid  p-0">
          <div class="row g-0 align-items-stretch h-100" >
        
            <!-- Left Text Column -->
            <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center bg-dark text-white p-5">
              <h1 class="mb-4">Find, Promote, and<br>Grow with the Right<br>Business Connections.</h1>
              <p class="mb-4">Whether you’re a service provider or customer, we help you discover and connect easily.</p>
              <a href="#" class="button-creative text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exploreMoreModal">
                <span>Explore more</span>
              </a>              
            </div>
        
           <!-- Right Image Column with Carousel -->
            <div class="col-lg-7 col-md-6 p-0" >
              <div id="imageCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner h-100">
                  <div class="carousel-item active h-100">
                    <img src="{{ asset('images/frame_image1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 1">
                  </div>
                  <div class="carousel-item h-100">
                    <img src="{{ asset('images/frame_image2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
                  </div>
                  <div class="carousel-item h-100">
                    <img src="{{ asset('images/frame_image3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 3">
                  </div>
                </div>
              </div>
            </div>

        
          </div>
          <div class="modal fade " id="exploreMoreModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down  modal-dialog-centered custom-modal-width">
              <div class="modal-content rounded-4 border-0" 
                   style="background: rgba(40, 40, 90, 0.7); backdrop-filter: blur(10px); color: white;">
                
                <!-- Modal Body -->
                <div class="modal-body p-4 p-md-5 position-relative">
                  <!-- Close Button -->
                  <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" 
                          data-bs-dismiss="modal" aria-label="Close"></button>
          
                  <div class="row">
                    <!-- Left Navigation -->
                    <div class="col-md-4 mb-4 mb-md-0">
                      <ul class="list-unstyled fw-bold fs-6">
                        <li class="mb-3"><img src="{{ asset('images/Services.png') }}" class="me-2" style="width: 10%;"> ALL SERVICES</li>
                        <li class="mb-3"><img src="{{ asset('images/Listing.png') }}" class="me-2" style="width: 10%;"> CLASSIFIEDS ADs</li>
                        <li class="mb-3"><img src="{{ asset('images/Experts.png') }}" class="me-2" style="width: 10%;"> SERVICE EXPERTS</li>
                        <li class="mb-3"><img src="{{ asset('images/Job.png') }}" class="me-2" style="width: 10%;"> JOBS</li>
                        <li class="mb-3"><img src="{{ asset('images/Travel.png') }}" class="me-2" style="width: 10%;"> EXPLORE TRAVEL</li>
                        <li class="mb-3"><img src="{{ asset('images/News.png') }}" class="me-2" style="width: 10%;"> NEWS & MAGAZINES</li>
                        <li class="mb-3"><img src="{{ asset('images/Event.png') }}" class="me-2" style="width: 10%;"> EVENTS</li>
                        <li class="mb-3"><img src="{{ asset('images/Holding Box.png') }}" class="me-2" style="width: 10%;"> PRODUCTS</li>
                        <li class="mb-3"><img src="{{ asset('images/Busness.png') }}" class="me-2" style="width: 10%;"> COUPON & DEALS</li>
                        <li class="mb-3"><img src="{{ asset('images/Blogger.png') }}" class="me-2" style="width: 10%;"> BLOGS</li>
                        <li class="mb-3"><img src="{{ asset('images/Crowd.png') }}" class="me-2" style="width: 10%;"> COMMUNITY</li>
                      </ul>
                    </div>
          
                    <!-- Right Categories -->
                    <div class="col-md-8">
                      <h5 class="fw-bold mb-4 text-white">All Categories</h5>
                      <div class="row g-3">
                        <!-- Each button -->
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Saloon & Spa</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary  bg-white fw-semibold rounded-3 ">Automobiles</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Electrical</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Technology</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Education</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Sport</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Toys shop</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Wedding halls</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Hospital</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Transportation</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Pet shop</button>
                        </div>
                        <div class="col-6 col-md-4">
                          <button class="btn w-100 text-primary bg-white fw-semibold rounded-3">Resturant</button>
                        </div>
                      </div>
          
                      <!-- Advertise Button -->
                      <div class="text-end mt-4">
                        <a href="{{ route('user.advertising') }}" class="btn btn-primary fw-semibold px-4 py-2" style="background-color: rgba(65, 75, 210, 1);">Advertise with Us</a>
                      </div>
                    </div>
                  </div>
          
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="d-flex flex-wrap justify-content-center gap-5 pt-5">
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
        
        <div class="container">
          <div class="row g-2 justify-content-center">
      
            <!-- Card 1 -->
            <div class="col-md-4 py-5">
              <div class="card shadow-lg text-center text-white rounded-4 py-4 position-relative overflow-hidden bg-light" style="background-color: rgba(230,230,250,1);">
                <div class="card-body">
                  <h5 class="card-title fw-bold text-dark">Business for Sale</h5>
                  <p class="card-text text-secondary">Profitable Ventures Await</p>
                </div>
                <!-- Hover Layer -->
                <div class="hover-layer d-flex position-absolute top-0 start-0 w-100 h-100 rounded-4 justify-content-center align-items-center bg-white" 
                     style="transition: 0.5s ease-in-out; border: 2px solid rgba(65, 75, 210, 1); opacity: 0;">
                  <a href="{{ route('user.saleAdd')}}" class="text-decoration-none fw-semibold fs-4" style="color: rgba(65, 75, 210, 1);">Check Out →</a>
                </div>
              </div>
            </div>
            
      
            <!-- Card 2 -->
            <div class="col-md-4 py-5">
              <div class="card shadow-lg text-center  text-white rounded-4 py-4 position-relative overflow-hidden bg-light" style="background-color: rgba(230,230,250,1);">
                <div class="card-body">
                  <h5 class="card-title fw-bold text-dark">Investment Opportunity</h5>
                  <p class="card-text text-secondary">Grow Your Wealth with Confidence</p>
                </div>
                <div class="hover-layer d-flex position-absolute top-0 start-0 w-100 h-100 rounded-4 justify-content-center align-items-center bg-white" 
                     style="transition: 0.5s ease-in-out; border: 2px solid rgba(65, 75, 210, 1); opacity: 0;">
                  <a href="{{ route('user.investAdd')}}" class="text-decoration-none fw-semibold fs-4" style="color: rgba(65, 75, 210, 1);">Check Out →</a>
                </div>
              </div>
            </div>
      
            <!-- Card 3 -->
            <div class="col-md-4 py-5">
              <div class="card shadow-lg text-center  text-white rounded-4 py-4 position-relative overflow-hidden bg-light" style="background-color: rgba(230,230,250,1);">
                <div class="card-body">
                  <h5 class="card-title fw-bold text-dark">Business Tenders</h5>
                  <p class="card-text text-secondary">Your Next Big Contract Starts Here</p>
                </div>
                <div class="hover-layer d-flex position-absolute top-0 start-0 w-100 h-100 rounded-4 justify-content-center align-items-center bg-white" 
                     style="transition: 0.5s ease-in-out; border: 2px solid rgba(65, 75, 210, 1); opacity: 0;">
                  <a href="{{ route('user.tenderAdd')}}" class="text-decoration-none fw-semibold fs-4" style="color: rgba(65, 75, 210, 1);">Check Out →</a>
                </div>
              </div>
            </div>
      
          </div>
        </div>

          <div class="all-categories position-relative bg-white">
            <div class="d-flex">

              <div class="flex-grow-1 bg-white"></div>

              <img src="{{ asset('images/Rectangle 21.png') }}" alt="">
            </div>

        
            <div class="popular-title-wrapper text-center">
              <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block text-nowrap">All Categories</h2>
            </div>
            <div style="background-color: rgba(230,230,250,1);" class="cards py-5">
              <div class="container">
                <div class="row g-4 justify-content-center">
  
                  
                  <div class="cards col-12 col-lg-3 col-md-6 rounded-4">
                    <div class="border border-dark rounded-4 p-3 text-center position-relative" 
                         onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                         onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">                                
                      <div>
                        <img src="{{ asset('images/Vector.png') }}" alt="Restaurant" class="mb-2 w-50">
                        <h6 class="fw-bold mb-1">Restaurant</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
                  
                  
                      <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                      style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                        <img src="{{ asset('images/Vector.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                        <h6 class="mb-2" style="font-size: 0.95rem;"> Restaurant</h6>
                        <a href="categories-resturant.html" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                      </div>
                  
                    </div>
                  </div>
                  
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3 text-center position-relative" 
                    onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                    onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                      <div>
                        <img src="{{ asset('images/cbi_garbage-plastic.png') }}" alt="Juice bar" class="mb-2 w-50" >
                        <h6 class="fw-bold mb-1">Juice bar</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                   
                       <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                       style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                         <img src="{{ asset('images/cbi_garbage-plastic.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                         <h6 class="mb-2" style="font-size: 0.95rem;">Juice bar</h6>
                         <a href="{{ route('user.categoriesRestuarant')}}" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                       </div>
  
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                      onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                      onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                        
                      <div>
                        <img src="{{ asset('images/game-icons_clothes.png') }}" alt="Clothes" class="mb-2 w-50" >
                        <h6 class="fw-bold mb-1">Clothes</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                    
                       <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                       style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                         <img src="{{ asset('images/game-icons_clothes.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                         <h6 class="mb-2" style="font-size: 0.95rem;">Clothes</h6>
                         <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                       </div>
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                      onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                      onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                        
                      <div>
                        <img src="{{ asset('images/map_beauty-salon.png') }}" alt="Saloon" class="mb-2 w-50" >
                        <h6 class="fw-bold mb-1">Saloon</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                    
                      <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                      style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                        <img src="{{ asset('images/map_beauty-salon.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                        <h6 class="mb-2" style="font-size: 0.95rem;">Saloon</h6>
                        <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                      </div>
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                      onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                      onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                        
                      <div>
                        <img src="{{ asset('images/ph_plant-fill.png') }}" alt="Agriculture" class="mb-2 w-50" >
                        <h6 class="fw-bold mb-1">Agriculture</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                   
                      <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                      style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                        <img src="{{ asset('images/ph_plant-fill.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                        <h6 class="mb-2" style="font-size: 0.95rem;">Agriculture </h6>
                        <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                      </div>
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                        onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                        onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                          
                        <div>
                          <img src="{{ asset('images/healthicons_medicines.png') }}" alt="Medicine" class="mb-2 w-50" >
                          <h6 class="fw-bold mb-1">Medicine</h6>
                          <small class="text-primary">10 Available</small>
                        </div>
  
           
                        <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                        style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                          <img src="{{ asset('images/healthicons_medicines.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                          <h6 class="mb-2" style="font-size: 0.95rem;">Medicine</h6>
                          <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                        </div>
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                      onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                      onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                        
                      <div>
                        <img src="{{ asset('images/tdesign_vehicle-filled.png') }}" alt="Automobile" class="mb-2 w-50" >
                        <h6 class="fw-bold mb-1">Automobile</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                    
                      <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                      style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                        <img src="{{ asset('images/tdesign_vehicle-filled.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                        <h6 class="mb-2" style="font-size: 0.95rem;">Automobile</h6>
                        <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                      </div>
                    </div>
                  </div>
  
                  <div class="cards col-12 col-lg-3 col-md-6   rounded-4">
                    <div class="border border-dark rounded-4 p-3  text-center position-relative" 
                      onmouseover="this.querySelector('.hover-layer').classList.remove('d-none');" 
                      onmouseout="this.querySelector('.hover-layer').classList.add('d-none');">
                        
                      <div>
                        <img src="{{ asset('images/fluent-emoji-high-contrast_laptop.png') }}" alt="IT solutions" class="mb-2 w-50">
                        <h6 class="fw-bold mb-1">IT solutions</h6>
                        <small class="text-primary">10 Available</small>
                      </div>
  
                
                      <div class="hover-layer d-none position-absolute top-0 start-0 w-100 h-100 rounded-4 d-flex flex-column justify-content-center align-items-center text-white" 
                      style="background-color: rgba(65, 75, 210, 1);  transition:  0.9s ease-in-out;">
                        <img src="{{ asset('images/fluent-emoji-high-contrast_laptop.png') }}" alt="icon" class="mb-2" style="width: 50px;">
                        <h6 class="mb-2" style="font-size: 0.95rem;">IT solutions</h6>
                        <a href="#" class="text-white text-decoration-none fw-semibold fs-4">Check Out →</a>
                      </div>
                    </div>
                  </div>
  
                </div>
  
            
                <div class="mt-5 text-center">
                  <a href="{{ route('user.adsCategory') }}" class="fw-bold text-decoration-none fs-5" style="color: rgba(65, 75, 210, 1);">
                    View <span style="color: rgba(34, 39, 108, 1);">All Categories</span>
                  </a>
                </div>
  
              </div>
            </div>
          </div>


       
        <!-- Bootstrap Carousel with autoplay and arrows -->
<div id="adsCarousel" class="carousel slide carousel-fade mt-5 px-5" data-bs-ride="carousel" style="height: 400px;">
  <div class="carousel-inner rounded-4" style="height: 100%;">
    <div class="carousel-item active h-100">
      <img src="{{ asset('images/adscarousal1.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
    </div>
    <div class="carousel-item h-100">
      <img src="{{ asset('images/adscarousal2.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
    </div>
    <div class="carousel-item h-100">
      <img src="{{ asset('images/adscarousal3.png') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
    </div>
    <div class="carousel-item h-100">
      <img src="{{ asset('images/adscarousal4.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
    </div>
    <div class="carousel-item h-100">
      <img src="{{ asset('images/adscarousal5.jpg') }}" class="d-block w-100 h-100 object-fit-cover rounded-4" alt="...">
    </div>
  </div>

  <!-- Arrows -->
  <button class="carousel-control-prev" type="button" data-bs-target="#adsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-4" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#adsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-4" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        
        <!--Top Companies-->
        <div class="top-companies position-relative bg-white " >
          <div class="d-flex">

            <!-- Left White Content Area -->
            <div class="flex-grow-1 bg-white"></div>

            <img src="{{ asset('images/Rectangle 21.png') }}" alt="">
          </div>

          <!-- Title Overlapping the Curve -->
          <div class="popular-title-wrapper text-center">
            <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block text-nowrap">Top Rated Companies</h2>
          </div>
          <div class="container-fluid py-4 px-2" style="background-color: rgba(230,230,250,1);" >
            <div class="position-relative">
              <button class="btn btn-outline-secondary rounded-circle position-absolute top-50 start-0 translate-middle-y z-3" id="prevBtn" style="width: 40px; height: 40px;">
                <i class="bx bx-chevron-left fs-4"></i>
              </button>
              <div id="companySlider" class="d-flex overflow-auto px-5" style="scroll-behavior: smooth; scroll-snap-type: x mandatory; gap: 1rem;">          
                <!-- Example Company Card -->
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Instagram">
                      </div>
                      <h5 class="card-title mb-1">Instagram</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <span class="text-warning">★★★★★</span>
                        <span class="text-muted small">(35)</span>
                      </div>
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-1.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Tesla</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <span class="text-warning">★★★★★</span>
                        <span class="text-muted small">(35)</span>
                      </div>
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-3.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">MacDonald's</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <span class="text-warning">★★★★★</span>
                        <span class="text-muted small">(35)</span>
                      </div>
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-2.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Apple</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <span class="text-warning">★★★★★</span>
                        <span class="text-muted small">(35)</span>
                      </div>
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/delmege.jpg') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Delmelge</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <span class="text-warning">★★★★★</span>
                        <span class="text-muted small">(35)</span>
                      </div>
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-outline-secondary rounded-circle position-absolute top-50 end-0 translate-middle-y z-2" id="nextBtn" style="width: 40px; height: 40px;">
                <i class="bx bx-chevron-right fs-4"></i>
              </button>
            </div>
          </div>
        </div>

        <!--Sponsered Companies-->
        <div class="sponsered-companies position-relative bg-white " >
          <div class="d-flex">

            <!-- Left White Content Area -->
            <div class="flex-grow-1 bg-white"></div>

            <img src="{{ asset('images/Rectangle 21.png') }}" alt="">
          </div>

          <!-- Title Overlapping the Curve -->
          <div class="popular-title-wrapper text-center">
            <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block text-nowrap">Sponsered Companies</h2>
          </div>
          <div class="container-fluid py-4 px-2" style="background-color: rgba(230,230,250,1);" >
            <div class="position-relative">
              <button class="btn btn-outline-secondary rounded-circle position-absolute top-50 left-50 start-0 translate-middle-y z-3" id="prevBtnsc" style="width: 40px; height: 40px;">
                <i class="bx bx-chevron-left fs-4"></i>
              </button>
              <div id="sponseredSlider" class="d-flex overflow-auto px-5" style="scroll-behavior: smooth; scroll-snap-type: x mandatory; gap: 1rem;">      
          
                <!-- Example Company Card -->
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Instagram">
                      </div>
                      <h5 class="card-title mb-1">Instagram</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-1.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Tesla</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-3.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">MacDonald's</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/Iconbg-2.png') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Apple</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                  <div class="card text-center shadow-sm border-0 mx-2">
                    <div class="card-body">
                      <div class="mb-3">
                        <img src="{{ asset('images/delmege.jpg') }}" class=" img-fluid" style="width: 60px; height: 60px; object-fit: cover;" alt="Delmelge">
                      </div>
                      <h5 class="card-title mb-1">Delmelge</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      
                      <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="text-secondary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-primary small">
                        <i class="fa fa-eye"></i> 10k
                      </div>
                    </div>
                  </div>
                </div>
          
                <!-- Repeat this card block with different logos and company names as needed -->
          
              </div>
              <button class="btn btn-outline-secondary rounded-circle position-absolute top-50 end-0 translate-middle-y z-2" id="nextBtnsc" style="width: 40px; height: 40px;">
                <i class="bx bx-chevron-right fs-4"></i>
              </button>
            </div>
          </div>
        </div>
            
          
     
        
          <!--Popular Companies-->
        <div class="popular-companies position-relative bg-white " >
          <!-- Title that overlaps top card and section background -->
          <div class="d-flex ">

            <!-- Left White Content Area -->
            <div class="flex-grow-1 bg-white "></div>

            <img src="{{ asset('images/Rectangle 21.png') }}" alt="" >
          </div>

          <!-- Title Overlapping the Curve -->
          <div class="popular-title-wrapper position-absolute w-100 text-center ">
            <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block text-nowrap">Popular Companies</h2>
          </div>
      
          <!-- Main Layout -->
          <div class="job-cards row px-5" style="background-color: rgba(230,230,250,1);">
            <div class="view-all-job-cards mt-5 d-flex justify-content-end mb-3">
              <a href="careers.html" class="d-flex gap-2 fw-semibold text-decoration-none">
                <p class="mb-0" style="color: rgba(65, 75, 210, 1);">See</p>
                <p class="mb-0" style="color: rgba(34, 39, 108, 1);">All</p>
              </a>
            </div>
            <!-- Left Column: Cards -->
            <div class="col-lg-8">
              
              <!-- CARD 1 -->
              <div class="card group mb-4 shadow-sm border-0 rounded-4 d-flex flex-column flex-sm-row overflow-hidden logo-card" style="min-height: 180px; position: relative;">

                <div class=" half-hexagon-flipped d-flex  align-items-center justify-content-center" style="height: 180px;width: 180px;">
                  <a href="company-details.html"><img src="images/business-company-logo-png_seeklogo-408837 3.png"
                       alt="Logo"
                       class="logo-img"
                       style="transition: transform 0.3s ease;width: 120px;height: 120px; "
                       id="logoImage"></a>
                </div>
              
                <!-- Content -->
                <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
              
                  <!-- Top Row -->
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <span class="text-muted small ms-1">(35)</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <a href="#" class="text-secondary"><i class="bi bi-linkedin fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-facebook fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                  </div>
              
                  <!-- Tags Row -->
                  <div class="tags-row d-flex flex-wrap text-muted small mt-2">
                    <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1"></i> IT and Tech</div>
                    <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1"></i> Full time</div>
                    <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1"></i> New–York, USA</div>
                    <div class="mb-1"><i class="bi bi-eye-fill me-1"></i> 10k</div>
                  </div>
              
                </div>
              </div>
                                        
              <!-- CARD 2 -->
              <div class="card mb-4 shadow-sm border-0 rounded-4 d-flex flex-column flex-sm-row overflow-hidden logo-card" style="min-height: 180px; position: relative;">

                <!-- Half Hexagon (flipped to point inward from left) -->
                <div class="half-hexagon-flipped d-flex align-items-center justify-content-center" style="height: 180px;width: 180px;">
                  <a href="company-details.html"><img src="images/tiktok_PNG30 2.png" alt="Logo"
                  class="logo-img"
                  style="transition: transform 0.3s ease;width: 120px;height: 120px;"
                  id="logoImage"></a>
                </div>
              
                <!-- Content -->
                <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                  
                  <!-- Top Row -->
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <span class="text-muted small ms-1">(35)</span>
                      </div>
                      
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <a href="#" class="text-secondary"><i class="bi bi-linkedin fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-facebook fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                  </div>
              
                  <!-- Tags Row -->
                  <div class="tags-row d-flex flex-wrap text-muted small mt-2">
                    <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1"></i> IT and Tech</div>
                    <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1"></i> Full time</div>
                    <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1"></i> New–York, USA</div>
                    <div class="mb-1"><i class="bi bi-eye-fill me-1"></i> 10k</div>
                  </div>
                </div>
              </div>
              <div class="card mb-4 shadow-sm border-0 rounded-4 d-flex flex-column flex-sm-row overflow-hidden logo-card" style="min-height: 180px; position: relative;">

                <!-- Half Hexagon (flipped to point inward from left) -->
                <div class="half-hexagon-flipped d-flex align-items-center justify-content-center" style="height: 180px;width: 180px;">
                  <a href="company-details.html"><img src="images/Plaid_(company)-Logo.wine 2.png" alt="Logo"
                  class="logo-img"
                  style="transition: transform 0.3s ease;width: 120px;height: 120px;"
                  id="logoImage"></a>
                </div>
              
                <!-- Content -->
                <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                  
                  <!-- Top Row -->
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <span class="text-muted small ms-1">(35)</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <a href="#" class="text-secondary"><i class="bi bi-linkedin fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-facebook fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                  </div>
              
                  <!-- Tags Row -->
                  <div class="tags-row d-flex flex-wrap text-muted small mt-2">
                    <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1"></i> IT and Tech</div>
                    <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1"></i> Full time</div>
                    <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1"></i> New–York, USA</div>
                    <div class="mb-1"><i class="bi bi-eye-fill me-1"></i> 10k</div>
                  </div>
                </div>
              </div>

              <div class="card mb-4 shadow-sm border-0 rounded-4 d-flex flex-column flex-sm-row overflow-hidden logo-card" style="min-height: 180px; position: relative;">

                <!-- Half Hexagon (flipped to point inward from left) -->
                <div class="half-hexagon-flipped d-flex align-items-center justify-content-center" style="height: 180px;width: 180px;">
                  <a href="company-details.html"><img src="images/file-mobile-apps-development-company-logo-25 2.png" alt="Logo"
                  class="logo-img"
                  style="transition: transform 0.3s ease;width: 120px;height: 120px;"
                  id="logoImage"></a>
                </div>
              
                <!-- Content -->
                <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                  
                  <!-- Top Row -->
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                      <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                      <div class="mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <span class="text-muted small ms-1">(35)</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <a href="#" class="text-secondary"><i class="bi bi-linkedin fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-facebook fs-5"></i></a>
                      <a href="#" class="text-secondary"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                  </div>
              
                  <!-- Tags Row -->
                  <div class="tags-row d-flex flex-wrap text-muted small mt-2">
                    <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1"></i> IT and Tech</div>
                    <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1"></i> Full time</div>
                    <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1"></i> New–York, USA</div>
                    <div class="mb-1"><i class="bi bi-eye-fill me-1"></i> 10k</div>
                  </div>
                </div>
              </div>
               
              <!-- Carousel Navigation -->
              <div class="d-flex justify-content-center mt-3 mb-4">
                <button class="btn rounded-circle me-2" style="background-color: rgba(65, 75, 210, 1);"><i class="bi bi-chevron-left"></i></button>
                <button class="btn rounded-circle" style="background-color: rgba(34, 39, 108, 1);"><i class="bi bi-chevron-right"></i></button>
              </div>
            </div>
      
            <!-- Right Column: Carousel Ads -->
            <div class="col-lg-4 mb-4">
              <div id="adCarousel" class="carousel slide rounded-4 shadow-sm overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/adinpopular1.jpg') }}" class="d-block w-100" alt="Ad 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/adinpopular2.jpg') }}" class="d-block w-100" alt="Ad 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/adinpopular3.jpg') }}" class="d-block w-100" alt="Ad 3">
                  </div>
                </div>
              </div>
            </div>
      
          </div>
          
        </div>
              
        
        <div class="featured-job position-relative" >
          <!-- Title that overlaps top card and section background -->
          <div class="d-flex">

            <!-- Left White Content Area -->
            <div class="flex-grow-1 bg-white"></div>

            <img src="{{ asset('images/Rectangle 21.png') }}" alt="">
          </div>

          <!-- Title Overlapping the Curve -->
          <div class="popular-title-wrapper position-absolute w-100 text-center ">
            <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block">Featured Job</h2>
          </div>       
          <!-- Job Cards -->
          <div class=" row   px-5 py-5" style="background-color: rgba(230,230,250,1);">
            <div class="view-all-job-cards mt-5 d-flex justify-content-end">
              <a href="careers.html" class="d-flex gap-2 fw-semibold text-decoration-none">
                <p class="mb-0" style="color: rgba(65, 75, 210, 1);">See</p>
                <p class="mb-0" style="color: rgba(34, 39, 108, 1);">All</p>
              </a>
            </div>
            <!-- Job Card -->
            <div class="col-12 col-md-4">
                         
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
            
            
            <div class="col-12 col-md-4">
              
            
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              
            
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              
            
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              
            
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
            
              <div class="card shadow-sm border-0 rounded-4 position-relative mt-3">
                <div class="card-body">
                  <!-- Top row: badge + Apply button -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1"
                    style="--bs-btn-hover-bg: rgba(65,75,210,1); --bs-btn-hover-border-color: rgba(65,75,210,1);">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </div>
            
                  <!-- Logo and job info -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logofeatured.png') }}" class="rounded-circle me-3" alt="Company Logo" style="width: 40px; height: 40px;">
                    <div>
                      <h5 class="fw-bold mb-0">Forward Security Director</h5>
                      <small class="text-muted">Bauch, Schuppe and Schulist Co</small>
                    </div>
                  </div>
            
                  <!-- Inline job details list -->
                  <div class="d-flex flex-column text-muted small mb-4 gap-1">
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                  </div>
                  
            
                  <!-- Job Details badge -->
                  <span class="position-absolute bottom-0 end-0 m-3">
                    <img src="{{ asset('images/badgefeatured.png') }}" alt="Featured Badge" style="width: 30px; height: auto;">
                  </span>
                </div>
              </div>
            </div>
          </div>
                   
        </div>
        <!--comments section-->
        <div class="comments container py-3 px-sm-4">
          <div class="row  g-4 ">
        
           
            <div class="card col-md-4 border-0">
              <h2 class="fw-bold text-success counter" data-target="12000">0</h2>
              <p class="mb-0 fw-bold fs-4">Clients worldwide</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur provident iure assumenda. Reiciendis, commodi ut.</p>
            </div>
        
          
            <div class="card col-md-4 border-0">
              <h2 class="fw-bold text-success counter" data-target="20000">0</h2>
              <p class="mb-0 fw-bold fs-4">Active Resume</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium voluptas veritatis fuga facere dicta? Ea?</p>
            </div>
        
          
            <div class="card col-md-4 border-0">
              <h2 class="fw-bold text-success counter" data-target="18000">0</h2>
              <p class="mb-0 fw-bold fs-4">Companies</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae veniam dolorum soluta voluptatum quaerat labore.</p>
            </div>
        
          </div>
        </div>
        <!--Testimonials from our customers-->
        <div class="testimonials-of-customers position-relative" >
          <div class="d-flex">

            <!-- Left White Content Area -->
            <div class="flex-grow-1 bg-white"></div>

            <img src="{{ asset('images/Rectangle 21.png') }}" alt="">
          </div>

          <!-- Title Overlapping the Curve -->
          <div class="popular-title-wrapper text-center mt-3">
            <h2 class="fw-bold bg-white px-4 py-2 rounded-pill d-inline-block ">Testimonials From Our Customers</h2>
          </div> 
          
          <div class=" row g-4 mt-0 p-5 " style="background-color: rgba(230,230,250,1)">
        
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 1 -->
            
                        <div class="bg-white p-4 rounded-4 shadow-sm h-100 ">
                          <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <i class="bi bi-quote  fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                          </div>
                          <h5 class="fw-bold">Amazing services</h5>
                          <p class="fst-italic mb-4">Metus faucibus sed turpis lectus feugiat tincidunt. Rhoncus sed tristique in dolor. Mus etiam et vestibulum venenatis</p>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('https://i.pravatar.cc/40?img=1') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                            <div>
                              <strong>Marco Kihn</strong><br>
                              <small class="text-muted">Happy Client</small>
                            </div>
                          </div>
                        </div>
            
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 2 -->
          
                      <div class="bg-white p-4 rounded-4 shadow-sm h-100 ">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                          <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </div>
                          <i class="bi bi-quote fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                        </div>
                        <h5 class="fw-bold">Everything simple</h5>
                        <p class="fst-italic mb-4">Mus etiam et vestibulum venenatis viverra ut. Elit morbi bibendum ullamcorper augue faucibus</p>
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('https://i.pravatar.cc/40?img=2') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                          <div>
                            <strong>Kristin Hester</strong><br>
                            <small class="text-muted">Happy Client</small>
                          </div>
                        </div>
                      </div>
            
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 3 -->
            
                      <div class="bg-white p-4 rounded-4 shadow-sm h-100 ">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                          <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </div>
                          <i class="bi bi-quote  fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                        </div>
                        <h5 class="fw-bold">Awesome, thank you!</h5>
                        <p class="fst-italic mb-4">Rhoncus sed tristique in dolor. Mus etiam et vestibulum venenatis viverra ut. Elit morbi bibendum ullamcorper augue faucibus. Nulla et tempor montes</p>
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('https://i.pravatar.cc/40?img=3') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                          <div>
                            <strong>Zion Cisneros</strong><br>
                            <small class="text-muted">Happy Client</small>
                          </div>
                        </div>
                      </div>
          
                    </div>
                  </div>
                </div>
            
                <!-- Slide 2 -->
                <div class="carousel-item">
                  <div class="row">
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 3 -->
        
                        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                          <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <i class="bi bi-quote  fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                          </div>
                          <h5 class="fw-bold">Awesome, thank you!</h5>
                          <p class="fst-italic mb-4">Rhoncus sed tristique in dolor. Mus etiam et vestibulum venenatis viverra ut. Elit morbi bibendum ullamcorper augue faucibus. Nulla et tempor montes</p>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('https://i.pravatar.cc/40?img=3') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                            <div>
                              <strong>Zion Cisneros</strong><br>
                              <small class="text-muted">Happy Client</small>
                            </div>
                          </div>
                        </div>
            
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 2 -->
       
                      <div class="bg-white p-4 rounded-4 shadow-sm h-100 ">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                          <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </div>
                          <i class="bi bi-quote fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                        </div>
                        <h5 class="fw-bold">Everything simple</h5>
                        <p class="fst-italic mb-4">Mus etiam et vestibulum venenatis viverra ut. Elit morbi bibendum ullamcorper augue faucibus</p>
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('https://i.pravatar.cc/40?img=2') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                          <div>
                            <strong>Kristin Hester</strong><br>
                            <small class="text-muted">Happy Client</small>
                          </div>
                        </div>
                      </div>
         
                    </div>
                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                      <!-- Testimonial Card 1 -->
          
                      <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                          <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </div>
                          <i class="bi bi-quote  fs-2" style="color: rgba(65, 75, 210, 1);"></i>
                        </div>
                        <h5 class="fw-bold">Amazing services</h5>
                        <p class="fst-italic mb-4">Metus faucibus sed turpis lectus feugiat tincidunt. Rhoncus sed tristique in dolor. Mus etiam et vestibulum venenatis</p>
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('https://i.pravatar.cc/40?img=1') }}" class="rounded-circle me-3" alt="Client" style="width: 50px;">
                          <div>
                            <strong>Marco Kihn</strong><br>
                            <small class="text-muted">Happy Client</small>
                          </div>
                        </div>
                      </div>
    
                    </div>
                  </div>
                </div>
            
              </div>
            
             <!--  Optional carousel controls 
              <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
              </button> -->
            </div>
            
            
        
            
        
            
        
          </div>
        </div>

             <!-- Footer Main -->
             @include('user.partials.footer')
       
 
            <script>
              const buttons = document.querySelectorAll('.button-creative');
            
              buttons.forEach(button => {
                button.addEventListener('mousemove', (e) => {
                  const rect = button.getBoundingClientRect();
                  const x = e.clientX - rect.left;
                  const y = e.clientY - rect.top;
                  button.style.setProperty('--x', `${x}px`);
                  button.style.setProperty('--y', `${y}px`);
                });
              });
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
            
          <script>
            //top companies arrows
            const companySlider = document.getElementById('companySlider');
            document.getElementById('nextBtn').addEventListener('click', () => {
              companySlider.scrollBy({ left: 300, behavior: 'smooth' });
            });
            document.getElementById('prevBtn').addEventListener('click', () => {
              companySlider.scrollBy({ left: -300, behavior: 'smooth' });
            });
          </script>
          <script>
            //sponcered companies arrows
            const sponseredSlider = document.getElementById('sponseredSlider');
            document.getElementById('nextBtnsc').addEventListener('click', () => {
              sponseredSlider.scrollBy({ left: 300, behavior: 'smooth' });
            });
            document.getElementById('prevBtnsc').addEventListener('click', () => {
              sponseredSlider.scrollBy({ left: -300, behavior: 'smooth' });
            });
          </script>
          <script>
            //large add arrow buttons
            let currentIndex = 0;
            const slides = document.querySelectorAll('.img-slide');
            const slider = document.getElementById('adSlider');
          
            function showSlide(index) {
              if (index < 0) index = slides.length - 1;
              if (index >= slides.length) index = 0;
              currentIndex = index;
              const offset = -index * 100;
              slider.style.transform = `translateX(${offset}%)`;
            }
          
            function nextSlide() {
              showSlide(currentIndex + 1);
            }
          
            function prevSlide() {
              showSlide(currentIndex - 1);
            }
          
            // Optional: Auto-slide every 5 seconds
            // setInterval(() => nextSlide(), 5000);
          </script>
          <!-- Script to apply scale on card hover -->
          <script>
            document.querySelectorAll('.logo-card').forEach(card => {
              const logo = card.querySelector('.logo-img');
          
              card.addEventListener('mouseover', () => {
                logo.style.transform = 'scale(1.15)';
              });
          
              card.addEventListener('mouseout', () => {
                logo.style.transform = 'scale(1)';
              });
            });
          </script>

<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');

    const animate = () => {
      let count = 0;
      const increment = target / 200;

      const update = () => {
        count += increment;
        if (count < target) {
          counter.innerText = Math.ceil(count).toLocaleString();
          requestAnimationFrame(update);
        } else {
          counter.innerText = (target / 1000).toFixed(0) + 'k+';
          setTimeout(animate, 2000); // wait 2s, then restart
        }
      };

      update();
    };

    animate(); // initial start
  });
</script>


          

          
   <script src="slider-move-script.js"></script>
    <script src="pagination.js"></script>
   <script src="script.js"></script> 
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ads-category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/style-ads.css') }}">
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
        <img src="images/Logo.png" alt="Logo" class="me-2 w-auto">
        <span class="fw-bold">LankanBuy</span>
      </a>

      <!-- Breadcrumb (Visible on all sizes) -->
      <div class="d-flex align-items-center text-white small ms-2">
        <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
        <span1 class="mx-2">&gt;</span>
        <span1 id="breadcrumb-page">All Category</span>
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
            <h2 class="category-title">Find Investors for Your Business</h2>
            <p>Post your business investment opportunities and connect with potential investors.</p>
        </div>
    </header>

    <section class="content py-4 mt-5">
        
            <a href="javascript:history.back()" class="go-back-btn mb-4 mx-4">
                <i class="fas fa-arrow-left"></i> Go Back
              </a>
        
        <div class="container">
            <h1 class="fs-2 mb-4">Advertising</h1>
            <p class="lead">Explore agencies specializing in SEO, social media campaigns, content marketing, and PPC
                advertising to maximize your online presence.</p>
            
            <!--Desktop Menu-->
            <div class="row mt-5">
                <aside class="col-lg-3 d-none d-lg-block category-list">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="advertising" data-title="Advertising">
                                    <i class="fas fa-bullhorn me-2 text-primary"></i>
                                    <span class="fw-semibold">Advertising</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="agriculture" data-title="Agriculture">
                                    <i class="fas fa-tractor me-2 text-success"></i> Agriculture
                                </a>
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="baby-goods" data-title="Baby Goods">
                                    <i class="fas fa-baby me-2 text-info"></i> Baby Goods
                                </a>
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="banking" data-title="Banking">
                                    <i class="fas fa-university me-2 text-warning"></i> Banking
                                </a>
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="beauty-culture" data-title="Beauty Culture">
                                    <i class="fas fa-spa me-2 text-danger"></i> Beauty Culture
                                </a>
                                <a href="#" class="list-group-item list-group-item-action category-item"
                                    data-category="computers" data-title="Computers">
                                    <i class="fas fa-laptop me-2 text-primary"></i> Computers
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="subcategories-display" id="advertising-subcategories">
                        <h3>Advertising Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs"
                                    data-subcategory="Advertising Agencies & Counsellors">Advertising Agencies &
                                    Counsellors</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising - Internet">Advertising -
                                    Internet</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising - Neon">Advertising -
                                    Neon</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising - Outdoor">Advertising -
                                    Outdoor</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising - Overseas">Advertising -
                                    Overseas</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising - Televisions">Advertising -
                                    Televisions</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Advertising LED">Advertising LED</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Digital Marketing">Digital Marketing</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Screen Printing">Screen Printing</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Promotional Items">Promotional Items</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Public Relations">Public Relations</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Online Ads">Online Ads</a>
                            </div>
                        </div>
                    </div>

                    <div class="subcategories-display" id="agriculture-subcategories">
                        <h3>Agriculture Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Organic Farming">Organic Farming</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Dairy Products">Dairy Products</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Farm Equipment">Farm Equipment</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Agricultural Consultants">Agricultural
                                    Consultants</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Seeds & Fertilizers">Seeds &
                                    Fertilizers</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Irrigation Systems">Irrigation
                                    Systems</a>
                            </div>
                        </div>
                    </div>

                    <div class="subcategories-display" id="baby-goods-subcategories">
                        <h3>Baby Goods & Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Baby Clothes">Baby Clothes</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Toys">Toys</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Baby Food">Baby Food</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Nursery Furniture">Nursery Furniture</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Baby Care Products">Baby Care
                                    Products</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Child Safety Products">Child Safety
                                    Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="subcategories-display" id="banking-subcategories">
                        <h3>Banking & Financial Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Personal Banking">Personal Banking</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Business Loans">Business Loans</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Investment Services">Investment
                                    Services</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Mortgage Services">Mortgage Services</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Credit Cards">Credit Cards</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Insurance Services">Insurance
                                    Services</a>
                            </div>
                        </div>
                    </div>

                    <div class="subcategories-display" id="beauty-culture-subcategories">
                        <h3>Beauty & Wellness Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Hair Salons">Hair Salons</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Spa Treatments">Spa Treatments</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Cosmetics">Cosmetics</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Nail Care">Nail Care</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Skin Care">Skin Care</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Makeup Artists">Makeup Artists</a>
                            </div>
                        </div>
                    </div>

                    <div class="subcategories-display" id="computers-subcategories">
                        <h3>Computer Services</h3>
                        <div class="subcategory-columns">
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Computer Repair">Computer Repair</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Software Development">Software
                                    Development</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Computer Accessories">Computer
                                    Accessories</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="IT Services">IT Services</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Network Solutions">Network Solutions</a>
                            </div>
                            <div class="subcategory-item">
                                <a href="#" class="show-jobs" data-subcategory="Data Recovery">Data Recovery</a>
                            </div>
                        </div>
                    </div>

                    <!-- Job Listings -->
                    <div class="listing" id="job-listings">
                        <div class="row g-4 px-4">
                    
                            <!-- Left Column: Job Listings & Company Cards -->
                            <div class="col-lg-8 order-lg-1 order-1">
                                <div class="row g-4">
                    
                                    <!-- Job Card Example (Repeat as needed) -->
                                    <div class="card d-flex flex-column flex-sm-row mb-4 rounded-4 shadow-sm overflow-hidden logo-card"
                                        style="min-height: 180px;">
                                        <div class="half-hexagon-flipped d-flex align-items-center justify-content-center p-3" style="height: 180px;">
                                            <a href="company-details.html">
                                                <img src="{{ asset('images/business-company-logo-png_seeklogo-408837 3.png') }}" alt="Logo" class="logo-img"
                                                    style="min-width: 150px; min-height: 150px; max-height: 160px; max-width: 160px;">
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                                                    <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                                                    <div class="mb-2 text-warning">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                        <span class="text-muted small ms-1">(35)</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3">
                                                    <a href="#"><i class="bi bi-linkedin text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-facebook text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-instagram text-secondary fs-5"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap text-muted small mt-2">
                                                <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1 text-primary"></i> IT
                                                    and Tech</div>
                                                <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1 text-primary"></i> Full
                                                    time</div>
                                                <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                                    New–York, USA</div>
                                                <div class="mb-1"><i class="bi bi-eye-fill me-1 text-primary"></i> 10k</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card d-flex flex-column flex-sm-row mb-4 rounded-4 shadow-sm overflow-hidden logo-card"
                                        style="min-height: 180px;">
                                        <div class="half-hexagon-flipped d-flex align-items-center justify-content-center p-3" style="height: 180px;">
                                            <a href="company-details.html">
                                                <img src="{{ asset('images/business-company-logo-png_seeklogo-408837 3.png') }}" alt="Logo" class="logo-img"
                                                    style="min-width: 150px; min-height: 150px; max-height: 160px; max-width: 160px;">
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                                                    <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                                                    <div class="mb-2 text-warning">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                        <span class="text-muted small ms-1">(35)</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3">
                                                    <a href="#"><i class="bi bi-linkedin text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-facebook text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-instagram text-secondary fs-5"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap text-muted small mt-2">
                                                <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1 text-primary"></i> IT
                                                    and Tech</div>
                                                <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1 text-primary"></i> Full
                                                    time</div>
                                                <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                                    New–York, USA</div>
                                                <div class="mb-1"><i class="bi bi-eye-fill me-1 text-primary"></i> 10k</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card d-flex flex-column flex-sm-row mb-4 rounded-4 shadow-sm overflow-hidden logo-card"
                                        style="min-height: 180px;">
                                        <div class="half-hexagon-flipped d-flex align-items-center justify-content-center p-3" style="height: 180px;">
                                            <a href="company-details.html">
                                                <img src="{{ asset('images/business-company-logo-png_seeklogo-408837 3.png') }}" alt="Logo" class="logo-img"
                                                style="min-width: 150px; min-height: 150px; max-height: 160px; max-width: 160px;">
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                                                    <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                                                    <div class="mb-2 text-warning">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                        <span class="text-muted small ms-1">(35)</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3">
                                                    <a href="#"><i class="bi bi-linkedin text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-facebook text-secondary fs-5"></i></a>
                                                    <a href="#"><i class="bi bi-instagram text-secondary fs-5"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap text-muted small mt-2">
                                                <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1 text-primary"></i> IT
                                                    and Tech</div>
                                                <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1 text-primary"></i> Full
                                                    time</div>
                                                <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                                    New–York, USA</div>
                                                <div class="mb-1"><i class="bi bi-eye-fill me-1 text-primary"></i> 10k</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mt-3">
                                        <button class="btn rounded-circle me-2" style="background-color: rgba(65, 75, 210, 1);"><i
                                                class="bi bi-chevron-left"></i></button>
                                        <button class="btn rounded-circle" style="background-color: rgba(34, 39, 108, 1);"><i
                                                class="bi bi-chevron-right"></i></button>
                                    </div>
                    
                                    <!-- Company Cards Section -->
                                    <!-- <div class="col-12">
                                        <div class="bg-light p-4 rounded-4 shadow-sm">
                    
                                            <div class="d-flex justify-content-end mb-3">
                                                <a href="careers.html" class="d-flex gap-2 fw-semibold text-decoration-none">
                                                    <span style="color: rgba(65, 75, 210, 1);">See</span>
                                                    <span style="color: rgba(34, 39, 108, 1);">All</span>
                                                </a>
                                            </div>
                    
                                            <div class="company-card-list">
                    
                                                <div class="card d-flex flex-column flex-sm-row mb-4 rounded-4 shadow-sm overflow-hidden logo-card"
                                                    style="min-height: 180px;">
                                                    <div class="half-hexagon-flipped d-flex align-items-center justify-content-center p-3"
                                                        style="height: 180px;">
                                                        <a href="company-details.html">
                                                            <img src="images/business-company-logo-png_seeklogo-408837 3.png" alt="Logo"
                                                                class="logo-img"
                                                                style="min-width: 150px; min-height: 150px; max-height: 160px; max-width: 160px;">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-between flex-grow-1 px-4 py-3">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <h5 class="fw-bold mb-1">ABC Tech solutions</h5>
                                                                <p class="text-muted small mb-2">Mraz, Quigley and Feest Inc.</p>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                                        class="bi bi-star-half"></i>
                                                                    <span class="text-muted small ms-1">(35)</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3">
                                                                <a href="#"><i class="bi bi-linkedin text-secondary fs-5"></i></a>
                                                                <a href="#"><i class="bi bi-facebook text-secondary fs-5"></i></a>
                                                                <a href="#"><i class="bi bi-instagram text-secondary fs-5"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap text-muted small mt-2">
                                                            <div class="me-3 mb-1"><i class="bi bi-briefcase-fill me-1 text-primary"></i> IT
                                                                and Tech</div>
                                                            <div class="me-3 mb-1"><i class="bi bi-clock-fill me-1 text-primary"></i> Full
                                                                time</div>
                                                            <div class="me-3 mb-1"><i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                                                New–York, USA</div>
                                                            <div class="mb-1"><i class="bi bi-eye-fill me-1 text-primary"></i> 10k</div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div>
                    
                                            <div class="d-flex justify-content-center mt-3">
                                                <button class="btn rounded-circle me-2" style="background-color: rgba(65, 75, 210, 1);"><i
                                                        class="bi bi-chevron-left"></i></button>
                                                <button class="btn rounded-circle" style="background-color: rgba(34, 39, 108, 1);"><i
                                                        class="bi bi-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div> -->
                    
                                </div>
                            </div>
                    
                            <!-- Right Column: Ads Carousel -->
                            <div class="col-lg-4 order-lg-2 order-4">
                                <div class="sticky-top" style="top: 80px;">
                                    <div id="adCarousel" class="carousel slide rounded-4 shadow-sm overflow-hidden mb-4"
                                        data-bs-ride="carousel" data-bs-interval="3000">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="0" class="active"></button>
                                            <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="1"></button>
                                            <button type="button" data-bs-target="#adCarousel" data-bs-slide-to="2"></button>
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
                    </div>
                      
                </div>
            </div>
        </div>
    </section>

    

    <div class="mobile-menu d-lg-none bg-white shadow-lg mt-5" id="mobileMenu">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between align-items-center px-3 py-3 text-white" style="background-color: rgba(65, 75, 210, 1);">
                <h5 class="mb-0">Categories</h5>
                <button class="btn btn-sm btn-close-white" id="closeMobileMenu">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="accordion accordion-flush px-3" id="mobileMenuAccordion">
                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileAdvertising">
                            <i class="fas fa-bullhorn me-2 text-primary"></i>
                            <span class="fw-semibold">Advertising</span>
                        </button>
                    </div>
                    <div id="mobileAdvertising" class="accordion-collapse collapse"
                        data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="SEO Services">
                                SEO Services
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="PPC Management">
                                PPC Management
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Social Media Ads">
                                Social Media Ads
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Content Marketing">
                                Content Marketing
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileAgriculture">
                            <i class="fas fa-tractor me-2 text-success"></i>
                            <span class="fw-semibold">Agriculture</span>
                        </button>
                    </div>
                    <div id="mobileAgriculture" class="accordion-collapse collapse"
                        data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Organic Farming">
                                Organic Farming
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Dairy Products">
                                Dairy Products
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Farm Equipment">
                                Farm Equipment
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileBabyGoods">
                            <i class="fas fa-baby me-2 text-info"></i>
                            <span class="fw-semibold">Baby Goods</span>
                        </button>
                    </div>
                    <div id="mobileBabyGoods" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Baby Clothes">
                                Baby Clothes
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Toys">
                                Toys
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Baby Food">
                                Baby Food
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileBanking">
                            <i class="fas fa-university me-2 text-warning"></i>
                            <span class="fw-semibold">Banking</span>
                        </button>
                    </div>
                    <div id="mobileBanking" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Personal Banking">
                                Personal Banking
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Business Loans">
                                Business Loans
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Investment Services">
                                Investment Services
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileBeauty">
                            <i class="fas fa-spa me-2 text-danger"></i>
                            <span class="fw-semibold">Beauty Culture</span>
                        </button>
                    </div>
                    <div id="mobileBeauty" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Hair Salons">
                                Hair Salons
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Spa Treatments">
                                Spa Treatments
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Cosmetics">
                                Cosmetics
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed px-3 py-3 d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mobileComputers">
                            <i class="fas fa-laptop me-2 text-primary"></i>
                            <span class="fw-semibold">Computers</span>
                        </button>
                    </div>
                    <div id="mobileComputers" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
                        <div class="accordion-body px-4 py-2">
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Computer Repair">
                                Computer Repair
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="Software Development">
                                Software Development
                            </a>
                            <a href="#" class="d-block py-2 px-2 text-decoration-none text-dark rounded show-jobs"
                                data-subcategory="IT Services">
                                IT Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="floating-categories-btn d-lg-none">
        <button id="toggleCategoriesMenu" class="btn rounded-pill shadow text-white" style="background-color: rgba(65, 75, 210, 1);">
            <i class="fas fa-list me-2"></i>
            Categories
        </button>
    </div>

    <!-- Footer Main -->
    @include('user.partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#mobileMenuBtn').click(function () {
                $('#mobileMenu').addClass('show');
                $('body').css('overflow', 'hidden');
            });

            $('#closeMobileMenu').click(function () {
                $('#mobileMenu').removeClass('show');
                $('body').css('overflow', 'auto');
            });

            let selectedMainCategory = "";

            $('.category-item').click(function (e) {
                e.preventDefault();

                $('.category-item').removeClass('active');
                $(this).addClass('active');

                const category = $(this).data('category');
                const title = $(this).data('title');

                selectedMainCategory = title;

                $('.subcategories-display').removeClass('active');
                $(`#${category}-subcategories`).addClass('active');

                $('h1').text(title);
                $('.lead').text(`Explore ${title.toLowerCase()} services and find the best providers in your area.`);

                $('#job-listings').removeClass('active');
            });

            $(document).on('click', '.show-jobs', function (e) {
                e.preventDefault();

                $('.show-jobs').removeClass('active');
                $(this).addClass('active');

                const subcategoryTitle = $(this).data('subcategory');

                if (!selectedMainCategory) {
                    selectedMainCategory = $(this).closest('.accordion-item').find('.accordion-button span').text().trim();
                }

                if (subcategoryTitle) {
                    $('h1').text(`${selectedMainCategory} / ${subcategoryTitle}`);
                    $('.lead').text(`Discover top-notch ${subcategoryTitle.toLowerCase()} services under ${selectedMainCategory.toLowerCase()}.`);
                } else {
                    $('h1').text(selectedMainCategory);
                }

                $('#job-listings').addClass('active');
            });


            $('.show-jobs').click(function (e) {
                e.preventDefault();

                const subcategory = $(this).data('subcategory');

                $('.subcategories-display').removeClass('active');

                $('#job-listings').addClass('active');

                $('h1').text(subcategory);
                $('.lead').text(`Find the best ${subcategory.toLowerCase()} services in your area.`);
            });

            $('.save-icon-for-job').click(function () {
                $(this).find('i').toggleClass('fa-regular fa-bookmark fa-solid fa-bookmark');
            });

            $('.mobile-menu .show-jobs').click(function (e) {
                e.preventDefault();

                $('#mobileMenu').removeClass('show');
                $('body').css('overflow', 'auto');

                const subcategory = $(this).data('subcategory');

                $('.subcategories-display').removeClass('active');

                $('#job-listings').addClass('active');

                $('h1').text(subcategory);
                $('.lead').text(`Find the best ${subcategory.toLowerCase()} services in your area.`);
            });

            $(document).ready(function () {
                $('#toggleCategoriesMenu').click(function () {
                    $('#mobileMenu').toggleClass('show');
                    $('body').css('overflow', $('#mobileMenu').hasClass('show') ? 'hidden' : 'auto');
                });

                $(document).on('click', function (e) {
                    if (!$(e.target).closest('#mobileMenu, #toggleCategoriesMenu').length && $('#mobileMenu').hasClass('show')) {
                        $('#mobileMenu').removeClass('show');
                        $('body').css('overflow', 'auto');
                    }
                });
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
</body>

</html>
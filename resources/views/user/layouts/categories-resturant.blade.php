<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resturants</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-categories-restuarent.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
          <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">All Categories</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Restaurant</span>
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





   <div class="p-0" style="height: 600px;">
  <div id="imageCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="4000">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Slides -->
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

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</div>

</header>






<!-- ========== Featured Listings Section ========== -->
<section class="featured-listings-section mb-0">
  <a href="javascript:history.back()" class="go-back-btn mt-3 mb-3">
    <i class="fas fa-arrow-left"></i> Go Back
    </a>

    <div class="filter-bar">
    <div class="group">
      <select class="filter-select">
        <option selected>Category</option>
        <option>Restaurant</option>
        <option>Hotel</option>
        <option>Medical</option>
      </select>
    </div>

    <div class="group">
      <select class="filter-select">
        <option selected>Location</option>
        <option>Colombo</option>
        <option>New‑York</option>
      </select>
    </div>

    <div class="group">
      <select class="filter-select">
        <option selected>Price</option>
        <option>$</option><option>$$</option><option>$$$</option>
      </select>
    </div>

    <!-- pushes everything else to the right -->
    <div style="flex:1"></div>

    <span class="sort-label">Sort&nbsp;:</span>
    <div class="group">
      <select class="filter-select">
        <option selected>Recommended</option>
        <option>Most viewed</option>
        <option>Newest</option>
      </select>
    </div>
  </div>
 

  <!-- ========== card ========== -->
  <article class="listing-card">
    <!-- left image -->
    <figure class="thumb">
      <img src="{{ asset('images/resturant.jpg') }}" alt="restaurant">
    </figure>

    <!-- right content -->
    <div class="details">
      <header>
        <div class="info">
          <h3>ABC Restaurant</h3>
          <small>Mraz, Quigley and Feest Inc.</small>

          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            &nbsp;(35)
          </div>
        </div>

        <a href="#" class="visit-btn">Visit website&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </header>

      <!-- image thumbnails -->
      <div class="mini-gallery">
        <img src="{{ asset('images/res-1.jpg') }}" alt="">
        <img src="{{ asset('images/res-2.jpg') }}" alt="">
        <img src="{{ asset('images/res-3.jpg') }}" alt="">
        <img src="{{ asset('images/res-4.jpg') }}" alt="">
        <img src="{{ asset('images/res-5.jpg') }}" alt="">
      </div>

      <!-- meta line -->
      <div class="meta">
        <span><i class="fa-solid fa-briefcase"></i>IT&nbsp;and&nbsp;Tech</span>
        <span><i class="fa-regular fa-clock"></i>Full&nbsp;time</span>
        <span><i class="fa-solid fa-location-dot"></i>New‑York,&nbsp;USA</span>
        <span class="views"><i class="fa-regular fa-eye"></i>10k</span>
      </div>

     
     
    </div>
  </article>

   <article class="listing-card">
    <!-- left image -->
    <figure class="thumb">
      <img src="{{ asset('images/resturant.jpg') }}" alt="restaurant">
    </figure>

    <!-- right content -->
    <div class="details">
      <header>
        <div class="info">
          <h3>ABC Restaurant</h3>
          <small>Mraz, Quigley and Feest Inc.</small>

          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            &nbsp;(35)
          </div>
        </div>

        <a href="#" class="visit-btn">Visit website&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </header>

      <!-- image thumbnails -->
      <div class="mini-gallery">
        <img src="{{ asset('images/res-1.jpg') }}" alt="">
        <img src="{{ asset('images/res-2.jpg') }}" alt="">
        <img src="{{ asset('images/res-3.jpg') }}" alt="">
        <img src="{{ asset('images/res-4.jpg') }}" alt="">
        <img src="{{ asset('images/res-5.jpg') }}" alt="">
      </div>

      <!-- meta line -->
      <div class="meta">
        <span><i class="fa-solid fa-briefcase"></i>IT&nbsp;and&nbsp;Tech</span>
        <span><i class="fa-regular fa-clock"></i>Full&nbsp;time</span>
        <span><i class="fa-solid fa-location-dot"></i>New‑York,&nbsp;USA</span>
        <div class="views">
        <i class="fa-regular fa-eye"></i>10k
      </div>
      </div>

     
     
    </div>
  </article>

   <article class="listing-card">
    <!-- left image -->
    <figure class="thumb">
      <img src="{{ asset('images/resturant.jpg') }}" alt="restaurant">
    </figure>

    <!-- right content -->
    <div class="details">
      <header>
        <div class="info">
          <h3>ABC Restaurant</h3>
          <small>Mraz, Quigley and Feest Inc.</small>

          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            &nbsp;(35)
          </div>
        </div>

        <a href="#" class="visit-btn">Visit website&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </header>

      <!-- image thumbnails -->
      <div class="mini-gallery">
        <img src="{{ asset('images/res-1.jpg') }}" alt="">
        <img src="{{ asset('images/res-2.jpg') }}" alt="">
        <img src="{{ asset('images/res-3.jpg') }}" alt="">
        <img src="{{ asset('images/res-4.jpg') }}" alt="">
        <img src="{{ asset('images/res-5.jpg') }}" alt="">
      </div>

      <!-- meta line -->
      <div class="meta">
        <span><i class="fa-solid fa-briefcase"></i>IT&nbsp;and&nbsp;Tech</span>
        <span><i class="fa-regular fa-clock"></i>Full&nbsp;time</span>
        <span><i class="fa-solid fa-location-dot"></i>New‑York,&nbsp;USA</span>
        <div class="views">
        <i class="fa-regular fa-eye"></i>10k
      </div>
      </div>

     
     
    </div>
  </article>

   <article class="listing-card">
    <!-- left image -->
    <figure class="thumb">
      <img src="{{ asset('images/resturant.jpg') }}" alt="restaurant">
    </figure>

    <!-- right content -->
    <div class="details">
      <header>
        <div class="info">
          <h3>ABC Restaurant</h3>
          <small>Mraz, Quigley and Feest Inc.</small>

          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            &nbsp;(35)
          </div>
        </div>

        <a href="#" class="visit-btn">Visit website&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </header>

      <!-- image thumbnails -->
      <div class="mini-gallery">
        <img src="{{ asset('images/res-1.jpg') }}" alt="">
        <img src="{{ asset('images/res-2.jpg') }}" alt="">
        <img src="{{ asset('images/res-3.jpg') }}" alt="">
        <img src="{{ asset('images/res-4.jpg') }}" alt="">
        <img src="{{ asset('images/res-5.jpg') }}" alt="">
      </div>

      <!-- meta line -->
      <div class="meta">
        <span><i class="fa-solid fa-briefcase"></i>IT&nbsp;and&nbsp;Tech</span>
        <span><i class="fa-regular fa-clock"></i>Full&nbsp;time</span>
        <span><i class="fa-solid fa-location-dot"></i>New‑York,&nbsp;USA</span>
        <div class="views">
        <i class="fa-regular fa-eye"></i>10k
      </div>
      </div>

     
     
    </div>
  </article>

   <article class="listing-card">
    <!-- left image -->
    <figure class="thumb">
      <img src="{{ asset('images/resturant.jpg') }}" alt="restaurant">
    </figure>

    <!-- right content -->
    <div class="details">
      <header>
        <div class="info">
          <h3>ABC Restaurant</h3>
          <small>Mraz, Quigley and Feest Inc.</small>

          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            &nbsp;(35)
          </div>
        </div>

        <a href="#" class="visit-btn">Visit website&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </header>

      <!-- image thumbnails -->
      <div class="mini-gallery">
        <img src="{{ asset('images/res-1.jpg') }}" alt="">
        <img src="{{ asset('images/res-2.jpg') }}" alt="">
        <img src="{{ asset('images/res-3.jpg') }}" alt="">
        <img src="{{ asset('images/res-4.jpg') }}" alt="">
        <img src="{{ asset('images/res-5.jpg') }}" alt="">
      </div>

      <!-- meta line -->
      <div class="meta">
        <span><i class="fa-solid fa-briefcase"></i>IT&nbsp;and&nbsp;Tech</span>
        <span><i class="fa-regular fa-clock"></i>Full&nbsp;time</span>
        <span><i class="fa-solid fa-location-dot"></i>New‑York,&nbsp;USA</span>
        <div class="views">
        <i class="fa-regular fa-eye"></i>10k
      </div>
      </div>

     
     
    </div>
  </article>














  <!-- ========== Pagination Buttons ========== -->
  <div class="pagination">
    <button class="page-btn active" onclick="showPage(1)">1</button>
    <button class="page-btn" onclick="showPage(2)">2</button>
    <button class="page-btn" onclick="showPage(3)">3</button>
  </div>

</section>




@include('user.partials.footer')





<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  const cardsPerPage = 5; // change this to 3 or more as needed
  const cards = document.querySelectorAll(".listing-card");
  const buttons = document.querySelectorAll(".page-btn");

  function showPage(page) {
    // Hide all cards
    cards.forEach((card, index) => {
      card.style.display = (index >= (page - 1) * cardsPerPage && index < page * cardsPerPage) ? "flex" : "none";
    });

    // Update active button style
    buttons.forEach(btn => btn.classList.remove("active"));
    buttons[page - 1].classList.add("active");
  }

  // Initialize page 1 by default
  showPage(1);
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
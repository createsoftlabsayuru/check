<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-products.css') }}">
  <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body >
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
           <span1 class="fw-bold" id="breadcrumb-main-page" >Home</span>
        <span1 class="mx-2">&gt;</span>
        <span1 id="breadcrumb-page" >Product</span>
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
    <h1>PRODUCTS</h1>
    
    <p>Discover the perfect products for your lifestyle smart, reliable, and made just for you.</p>
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




<section class="p-section">
    <div class="sidebar">
      
      <select id="category">
        <option>Category</option>
        <option>Electronics</option>
        <option>Clothing</option>
        <option>Books</option>
        <option>Home Appliances</option>
      </select>
    </div>
    </div>
  
  <div class="p-grid">
    <!-- Card Start -->

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>

    <div class="p-card">
  <img src="{{ asset('images/product-image.jpg') }}" alt="Product Image" class="product-img">

  <div class="p-details">
    <h4 class="product-title">Bluetooth Speaker</h4>
    <p class="description">Portable Bluetooth speaker with great sound</p>

    <div class="rating-row">
      <div class="stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span class="rating-count">(35)</span>
      </div>
    </div>

    <div class="price-row">
      <div class="price">
        <span class="new-price">LKR 300</span>
        <span class="old-price">LKR 300</span>
      </div>
      <div class="available">10 Available</div>
    </div>

    <a href="{{ route('user.productDetails')}}" class="view-btn">View more</a>
  </div>
</div>
</section>

<section class="load-more">
<div class="load-more-wrapper">
  <button class="load-more-button">Load More</button>
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
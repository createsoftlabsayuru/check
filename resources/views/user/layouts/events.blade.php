<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user/events.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
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
        <span1 id="breadcrumb-page">Company</span>
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
            <h2 class="category-title">Events</h2>
            <p>Discover the latest events happening around us.</p>
        </div>
        </form>
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





    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service.jpg') }}" class="card-img-top" alt="Tech Conference">
                    <div class="card-body">
                        <h3 class="card-title h5">Tech Conference 2025</h3>
                        <p class="card-text event-date text-muted small">January 15-17, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Learn UX/UI design principles from industry experts in this hands-on workshop.Learn
                                UX/UI design principles from industry experts in this hands-on workshop.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>

                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service1.jpg') }}" class="card-img-top" alt="Design Workshop">
                    <div class="card-body">
                        <h3 class="card-title h5">Design Workshop</h3>
                        <p class="card-text event-date text-muted small">January 5, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias, eius
                                corrupti doloribus debitis perferendis ratione commodi quaerat est voluptate iusto
                                soluta reiciendis possimus deserunt ipsam odit harum, odio adipisci.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>
                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service3.jpg') }}" class="card-img-top" alt="Startup Pitch Night">
                    <div class="card-body">
                        <h3 class="card-title h5">Startup Pitch Night</h3>
                        <p class="card-text event-date text-muted small">January 2, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias, eius
                                corrupti doloribus debitis perferendis ratione commodi quaerat est voluptate iusto
                                soluta reiciendis possimus deserunt ipsam odit harum, odio adipisci.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>

                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service4.jpg') }}" class="card-img-top" alt="Networking Mixer">
                    <div class="card-body">
                        <h3 class="card-title h5">Networking Mixer</h3>
                        <p class="card-text event-date text-muted small">January 12, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias, eius
                                corrupti doloribus debitis perferendis ratione commodi quaerat est voluptate iusto
                                soluta reiciendis possimus deserunt ipsam odit harum, odio adipisci.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>

                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service5.jpg') }}" class="card-img-top" alt="Networking Mixer">
                    <div class="card-body">
                        <h3 class="card-title h5">Networking Mixer</h3>
                        <p class="card-text event-date text-muted small">January 12, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias, eius
                                corrupti doloribus debitis perferendis ratione commodi quaerat est voluptate iusto
                                soluta reiciendis possimus deserunt ipsam odit harum, odio adipisci.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>

                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card event-card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/service6.jpg') }}" class="card-img-top" alt="Networking Mixer">
                    <div class="card-body">
                        <h3 class="card-title h5">Networking Mixer</h3>
                        <p class="card-text event-date text-muted small">January 12, 2025</p>
                        <hr>
                        <p class="card-text event-description">
                            <span class="description-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias, eius
                                corrupti doloribus debitis perferendis ratione commodi quaerat est voluptate iusto
                                soluta reiciendis possimus deserunt ipsam odit harum, odio adipisci.
                            </span>
                            <button class="read-more-btn btn btn-link p-0"
                                style="display: none; text-decoration: none;">Read More</button>
                        </p>

                        <a href="{{ route('user.eventIndetails')}}" class="btn see-more-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Event pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item "><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>

            </ul>
        </nav>
    </div>
</div>
<!-- Footer Main -->
@include('user.partials.footer')

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const descriptions = document.querySelectorAll('.event-description');

            descriptions.forEach(desc => {
                const textSpan = desc.querySelector('.description-text');
                const readMoreBtn = desc.querySelector('.read-more-btn');

                const fullText = textSpan.innerText.trim();
                const words = fullText.split(/\s+/);

                if (words.length > 15) {
                    const shortText = words.slice(0, 15).join(' ') + '...';
                    textSpan.innerText = shortText;
                    readMoreBtn.style.display = 'inline';

                    readMoreBtn.addEventListener('click', function () {
                        if (readMoreBtn.innerText === 'Read More') {
                            textSpan.innerText = fullText;
                            readMoreBtn.innerText = 'Show Less';
                        } else {
                            textSpan.innerText = shortText;
                            readMoreBtn.innerText = 'Read More';
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>
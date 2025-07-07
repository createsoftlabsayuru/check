<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/style-careers.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>


  @media (max-width: 991px) {
  .full-container {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }
  #footer{
    margin-top: 0 !important;
  }
}

</style>
</head>
<body>
   <!-- Menu Toggle Hidden Checkbox -->
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
         <span1 id="breadcrumb-page">Careers</span>
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


  <div class=" p-0" style="height: 500px ;">


    <div id="imageCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner h-100">
        <div class="carousel-item active h-100">
          <img src="{{ asset('images/frame_image1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 1">
        </div>
        <div class="carousel-item h-100">
          <img src="{{ asset('images/frame_image2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
        </div>
        <div class="carousel-item h-100">
          <img src="{{ asset('images/frame_image3.jpg')}}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 3">
        </div>
      </div>
    </div>
  </div>

  <div class="full-container py-3 mb-0" >
    <a href="javascript:history.back()" class="go-back-btn">
      <i class="fas fa-arrow-left"></i> Go Back
    </a>

        <!-- Search Filter Box -->
        <div class="container">
          <div class=" pb-4 rounded mt-5">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-2">
        
              <!-- Left Filters -->
              <div class="d-flex flex-column flex-sm-row flex-wrap gap-2">
        
                <!-- Job Category -->
                <div class="dropdown">
                  <button class="form-control form-control-sm border-dark text-start d-flex justify-content-between align-items-center px-2 py-1" 
                          type="button" id="categoryDropdownBtn" style="height: 30px; background-color: rgba(230,230,250,1);">
                    <span class="text-truncate px-3">Job Category</span>
                    <i class="bi bi-chevron-down small"></i>
                  </button>
                
                  <ul class="dropdown-menu w-100" id="categoryDropdownBtn">
                    <li><a class="dropdown-item" href="#">All Categories</a></li>
                    <li><a class="dropdown-item" href="#">Hotels & Tourism</a></li>
                    <li><a class="dropdown-item" href="#">Media</a></li>
                    <li><a class="dropdown-item" href="#">Construction</a></li>
                    <li><a class="dropdown-item" href="#">Commerce</a></li>
                  </ul>
                </div>
                <!-- Job Type -->
                <div class="dropdown">
                  <button class="form-control form-control-sm border-dark text-start d-flex justify-content-between align-items-center px-2 py-1" 
                          type="button" id="typeDropdownBtn" style="height: 30px;background-color: rgba(230,230,250,1);">
                    <span class="text-truncate px-3">Job Type</span>
                    <i class="bi bi-chevron-down small"></i>
                  </button>
                
                  <ul class="dropdown-menu w-100" id="typeDropdownBtn">
                    <li><a class="dropdown-item" href="#">All Categories</a></li>
                    <li><a class="dropdown-item" href="#">Hotels & Tourism</a></li>
                    <li><a class="dropdown-item" href="#">Media</a></li>
                    <li><a class="dropdown-item" href="#">Construction</a></li>
                    <li><a class="dropdown-item" href="#">Commerce</a></li>
                  </ul>
                </div>
        
                <!-- Salary Range -->
                <div class="dropdown">
                  <button class="form-control form-control-sm border-dark text-start d-flex justify-content-between align-items-center px-2 py-1" 
                          type="button" id="salaryDropdownBtn" style="height: 30px;background-color: rgba(230,230,250,1);">
                    <span class="text-truncate px-3">Salary</span>
                    <i class="bi bi-chevron-down small"></i>
                  </button>
                
                  <ul class="dropdown-menu w-100" id="salaryDropdownBtn">
                    <li><a class="dropdown-item" href="#"></a></li>
                    <li><a class="dropdown-item" href="#">Hotels & Tourism</a></li>
                    <li><a class="dropdown-item" href="#">Media</a></li>
                    <li><a class="dropdown-item" href="#">Construction</a></li>
                    <li><a class="dropdown-item" href="#">Commerce</a></li>
                  </ul>
                </div>
        
              </div>
        
              <!-- Right Sort -->
              <div class="dropdown d-flex align-items-center gap-2">
                <span class="small">Sort: </span>
              
                <button class="form-control form-control-sm text-start border-dark d-flex justify-content-between align-items-center px-2 py-1"
                  type="button"
                  id="sortRecommendDropdownBtn"
                  style="height: 30px; width: 160px;background-color: rgba(230,230,250,1);">
                  <span class="text-truncate px-2">Recommended</span>
                  <i class="bi bi-chevron-down small"></i>
                </button>
              
                <ul class="dropdown-menu" id="sortRecommendDropdown">
                  <li><a class="dropdown-item" href="#">Latest</a></li>
                  <li><a class="dropdown-item" href="#">Popular</a></li>
                  <li><a class="dropdown-item" href="#">High Salary</a></li>
                </ul>
              </div>
        
            </div>
          </div>
        </div>
        <div class="container ">
          <h6>Apply for saved job</h6>
          <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
              <div class="card-body">
          
                <!-- Top row: badge + Apply button -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                  <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
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
                <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                    <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                </div>
          
                <!-- Job Details button -->
                <div class="position-absolute bottom-0 end-0 m-3">
                  <button class="btn btn-job-details btn-sm text-white">
                    Job Details
                  </button>
                </div>
          
              </div>
            </div>
          </div>
          
          <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
              <div class="card-body">
          
                <!-- Top row: badge + Apply button -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                  <a href="{{ route('user.apply')}}">
                    <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
                      Apply <i class="bi bi-box-arrow-up-right"></i>
                    </button>
                  </a>
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
                <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                    <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                    <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                    <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                    <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                </div>
          
                <!-- Job Details button -->
                <div class="position-absolute bottom-0 end-0 m-3">
                  <a href="{{ route('user.jobDetail')}}">
                    <button class="btn btn-job-details btn-sm text-white">
                      Job Details
                    </button>
                  </a>
                </div>
          
              </div>
            </div>
          </div>
          
          <hr class="fw-bold my-4 ">

          <h6>All jobs</h6>

          <div class="container mt-4">
            <div class="row" id="card-container">
              <div class="col-12">
                <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
                  <div class="card-body">
              
                    <!-- Top row: badge + Apply button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                      <a href="{{ route('user.apply')}}">
                        <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
                          Apply <i class="bi bi-box-arrow-up-right"></i>
                        </button>
                      </a>
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
                    <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                        <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                        <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                        <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                        <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                    </div>
              
                    <!-- Job Details button -->
                    <div class="position-absolute bottom-0 end-0 m-3">
                      <a href="{{ route('user.jobDetail')}}">
                        <button class="btn btn-job-details btn-sm text-white">
                          Job Details
                        </button>
                      </a>
                    </div>
              
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
                  <div class="card-body">
              
                    <!-- Top row: badge + Apply button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                      <a href="{{ route('user.apply')}}">
                        <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
                          Apply <i class="bi bi-box-arrow-up-right"></i>
                        </button>
                      </a>
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
                    <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                        <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                        <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                        <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                        <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                    </div>
              
                    <!-- Job Details button -->
                    <div class="position-absolute bottom-0 end-0 m-3">
                      <a href="{{ route('user.jobDetail')}}">
                        <button class="btn btn-job-details btn-sm text-white">
                          Job Details
                        </button>
                      </a>
                    </div>
              
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
                  <div class="card-body">
              
                    <!-- Top row: badge + Apply button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                      <a href="{{ route('user.apply')}}">
                        <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
                          Apply <i class="bi bi-box-arrow-up-right"></i>
                        </button>
                      </a>
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
                    <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                        <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                        <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                        <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                        <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                    </div>
              
                    <!-- Job Details button -->
                    <div class="position-absolute bottom-0 end-0 m-3">
                      <a href="{{ route('user.jobDetail')}}">
                        <button class="btn btn-job-details btn-sm text-white">
                          Job Details
                        </button>
                      </a>
                    </div>
              
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card shadow-sm border-0 rounded-4 position-relative mt-3 w-100">
                  <div class="card-body">
              
                    <!-- Top row: badge + Apply button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="badge bg-light" style="border: 1px solid rgba(65, 75, 210, 1); color: rgba(65, 75, 210, 1);">10 min ago</span>
                      <a href="{{ route('user.apply')}}">
                        <button class="btn btn-outline-dark btn-sm d-flex align-items-center gap-1">
                          Apply <i class="bi bi-box-arrow-up-right"></i>
                        </button>
                      </a>
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
                    <div class="d-flex flex-column flex-sm-row text-muted small mb-4 gap-2 gap-md-3">
                      <div><img src="{{ asset('images/briefcase.png') }}" alt="Category Icon" class="me-2" style="width: 16px; height: 16px;"> Media</div>
                      <div><img src="{{ asset('images/clock.png') }}" alt="Clock Icon" class="me-2" style="width: 16px; height: 16px;"> Full time</div>
                      <div><img src="{{ asset('images/location.png') }}" alt="Location Icon" class="me-2" style="width: 16px; height: 16px;"> New-York, USA</div>
                      <div><img src="{{ asset('images/salary.png') }}" alt="Salary Icon" class="me-2" style="width: 16px; height: 16px;"> $40000–$42000</div>
                    </div>
              
                    <!-- Job Details button -->
                    <div class="position-absolute bottom-0 end-0 m-3">
                      <a href="{{ route('user.jobDetail')}}">
                        <button class="btn btn-job-details btn-sm text-white">
                          Job Details
                        </button>
                      </a>
                    </div>
              
                  </div>
                </div>
              </div>

            </div>
            <div class="d-flex justify-content-center mt-4 ">
              <nav>
                <ul class="pagination custom-pagination mb-0" id="pagination"></ul>
              </nav>
            </div>
          </div>

        </div>
        
  </div>

  
  <!-- Footer Main -->
  @include('user.partials.footer')
  
  

  
  
  
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const dropdownBtn = document.getElementById('categoryDropdownBtn');
    const dropdownMenu = document.getElementById('categoryDropdown');
    const bsDropdown = new bootstrap.Dropdown(dropdownBtn);
  
    dropdownBtn.addEventListener('click', function (e) {
      e.preventDefault();
      bsDropdown.toggle();
    });
  </script>
  <script>
    const typedropdownBtn = document.getElementById('typeDropdownBtn');
    const typedropdownMenu = document.getElementById('typeDropdown');
    const typebsDropdown = new bootstrap.Dropdown(typedropdownBtn);
  
    typedropdownBtn.addEventListener('click', function (e) {
      e.preventDefault();
      typebsDropdown.toggle();
    });
  </script>
  <script>
    const salarydropdownBtn = document.getElementById('salaryDropdownBtn');
    const salarydropdownMenu = document.getElementById('salaryDropdown');
    const salarybsDropdown = new bootstrap.Dropdown(salarydropdownBtn);
  
    salarydropdownBtn.addEventListener('click', function (e) {
      e.preventDefault();
      salarybsDropdown.toggle();
    });
  </script>
  <script>
    const sortRecommenddropdownBtn = document.getElementById('sortRecommendDropdownBtn');
    const sortRecommenddropdownMenu = document.getElementById('sortRecommendDropdown');
    const sortRecommendbsDropdown = new bootstrap.Dropdown(sortRecommenddropdownBtn);
  
    sortRecommenddropdownBtn.addEventListener('click', function (e) {
      e.preventDefault();
      sortRecommendbsDropdown.toggle();
    });
  </script>
<script>
  //pagination for show 3 cards
  document.addEventListener('DOMContentLoaded', () => {
    const originalCards = [...document.querySelectorAll('#card-container .col-12')];
    const cardsPerPage = 3;
    const pagination = document.getElementById('pagination');
    const cardContainer = document.getElementById('card-container');

    // Move all original cards to a hidden store div
    const hiddenStore = document.createElement('div');
    hiddenStore.style.display = 'none';
    originalCards.forEach(card => hiddenStore.appendChild(card));
    document.body.appendChild(hiddenStore);

    function showPage(page) {
      cardContainer.innerHTML = '';
      const start = (page - 1) * cardsPerPage;
      const end = start + cardsPerPage;
      const cardsToShow = originalCards.slice(start, end);
      cardsToShow.forEach(card => {
        const clonedCard = card.cloneNode(true);
        cardContainer.appendChild(clonedCard);
      });
      updatePagination(page);
    }

    function updatePagination(current) {
      const totalPages = Math.ceil(originalCards.length / cardsPerPage);
      pagination.innerHTML = '';
      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement('li');
        li.className = `page-item ${i === current ? 'active' : ''}`;
        const link = document.createElement('a');
        link.className = 'page-link';
        link.href = '#';
        link.textContent = i;
        link.onclick = (e) => {
          e.preventDefault();
          showPage(i);
        };
        li.appendChild(link);
        pagination.appendChild(li);
      }
    }

    showPage(1); // initialize
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
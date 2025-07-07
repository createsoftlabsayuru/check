<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<style>
  body{
    background-color: rgba(230,230,250,1);
  }
    .body-container-wrapper{
        position: relative;
        top:110px
    }
    #breadcrumb-main-page,
#breadcrumb-page,
.d-flex.align-items-center span1 {
  font-size: clamp(16px, 2vw, 22px); /* Responsive between 16px–22px */
  color: white;                      /* Ensure white text */
  font-weight: 600;
   white-space: nowrap;
}

@media (max-width: 576px) {
  #breadcrumb-main-page,
  #breadcrumb-page,
  .d-flex.align-items-center span1 {
    font-size: 12px;
  }
}
@media (max-width: 576px) {
  #breadcrumb-main-page,
  #breadcrumb-page,
  .d-flex.align-items-center span {
    font-size: 12px;
  }
}

    .job-card {
  background-color: #fff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  cursor: pointer;
  transition: transform 0.3s ease;
}



.job-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.job-header img {
  width: 80px;
  height: 80px;
}

.job-deadline {
  background-color: red;
  color: white;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 20px;
}

.job-main {
  margin-top: 15px;
}

.job-title h3 {
  margin: 0;
  font-size: 24px;
  color: black;
  font-weight: bold;
}

.job-title .company {
  color: #777;
  font-size: 18px;
}



.salary {
  font-weight: bold;
  margin-top: 10px;
  color: #333;
  
}

.job-info {
  margin-top: 15px;
  font-size: 18px;
  display: flex;
  justify-content: space-between;
  color: #555;
}

.job-card:hover {
  transform: translateY(-5px);
}
.apply-btn,
.save-btn{
  background-color: rgba(65,75,210,1);
}
.apply-btn:hover,
.save-btn:hover{
  color: #fff;
  background: linear-gradient(90deg,rgba(65, 75, 210, 1) 0%, rgba(9, 9, 121, 1) 45%, rgba(0, 212, 255, 1) 100%);
}
/* Button container - hidden by default */
.job-buttons {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  flex-direction: column;
  gap: 10px;
  z-index: 10;
}

/* Show buttons on hover */
.job-card:hover .job-buttons {
  display: flex;
}

/* Dim the rest of the card when buttons show (optional) */
.job-card:hover .job-header,
.job-card:hover .job-main,
.job-card:hover .job-info {
  opacity: 0.3;
}

/* Buttons style */
.job-buttons button {
  padding: 10px 20px;
  background-color: #5b43f0;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.job-buttons button:hover {
  background-color: #4a35d1;
}

@media (max-width: 991px) {
  .border-end {
    border-right: none !important;
  }
}


.go-back-btn {
    display: inline-block;
    color: rgba(65,75,210,1);
    text-decoration: none;
    padding: 5px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    transition: background-color 0.3s, transform 0.2s;
    margin-left: 5px;
    margin-bottom: 10px;
     border: 1px solid rgba(65,75,210,1);;
  }

.btn-register-free{
  background-color: rgba(65,75,210,1); border-radius: 8px;
}
.btn-register-free:hover{
  color: #fff;
  background: linear-gradient(90deg,rgba(65, 75, 210, 1) 0%, rgba(9, 9, 121, 1) 45%, rgba(0, 212, 255, 1) 100%);
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
             <span1 id="breadcrumb-page">Software</span>
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
       

<div class="body-container-wrapper py-3" >
    


    <div class="container-fluid py-5" >
        <a href="javascript:history.back()" class="go-back-btn mt-3 mb-3">
            <i class="fas fa-arrow-left"></i> Go Back
            </a>
        <div class="row gx-4 px-4">
            <!-- Left Column -->
            <div class="col-lg-4 col-md-12 border-end border-dark px-3">
                <div class="card px-5 py-3 border-0 shadow-sm" style="background-color: rgba(65,75,210,0.1); border-radius: 16px; font-family: 'Poppins', sans-serif;">
                    <h5 class="fw-bold mb-3">Get Personalised Jobs</h5>
                    <p class="mb-4" style="font-size: 0.95rem;">
                      Tell us what kind of a job you are looking for and stay updated with latest opportunities.
                    </p>
                    <a href="#" class="btn btn-register-free text-white fw-semibold px-4 py-2">
                      Register for free
                    </a>
                </div>
                <div class="card px-5 py-3 border-0 shadow-sm my-4" >
                    <div class="mb-2 d-flex align-items-center gap-2">
                      <i class="bi bi-grid-fill fs-5 text-secondary"></i>
                      <span class="fw-semibold fs-5">Categorise</span>
                    </div>
                    <select class="form-select mt-1 border-dark">
                      <option selected>Technology</option>
                      <option>Finance</option>
                      <option>Health</option>
                    </select>
                  </div>
                <div class="card px-5 py-3 border-0 shadow-sm my-4" style=" font-family: 'Inter', sans-serif;">
                    <h6 class="fw-semibold mb-3">
                      <i class="bi bi-grid-3x3-gap-fill me-2 text-secondary"></i> Sub Category
                    </h6>
                    
                    <div class="form-check ps-0">
                      <input class="form-check-input mt-0 me-2 border-dark" type="checkbox" value="" id="marketingCheck" style="cursor:pointer;">
                      <label class="form-check-label text-secondary fw-medium" for="marketingCheck" style="cursor:pointer;">
                        Marketing
                      </label>
                    </div>
                </div>
                <div class="card px-5 py-3 border-0 shadow-sm my-4" style=" font-family: 'Inter', sans-serif;">
                    <!-- Header with checkbox and title -->
                    <div class="form-check d-flex align-items-center mb-3 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="jobTypeMain" checked style="cursor: pointer;">
                      <label class="form-check-label fw-semibold fs-6" for="jobTypeMain" style="cursor: pointer;">
                        Job Type
                      </label>
                    </div>
                  
                    <!-- Checkbox List -->
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job1">
                      <label class="form-check-label text-secondary" for="job1">Marketing</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job2">
                      <label class="form-check-label text-secondary" for="job2">Marketing</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job3">
                      <label class="form-check-label text-secondary" for="job3">Marketing</label>
                    </div>
                  
                    <div class="form-check ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job4">
                      <label class="form-check-label text-secondary" for="job4">Marketing</label>
                    </div>
                </div>
                <div class="card px-5 py-3 border-0 shadow-sm my-4" style="font-family: 'Inter', sans-serif;">
                    <!-- Header with checkbox and title -->
                    <div class="form-check d-flex align-items-center mb-3 ps-0">
                        <img src="{{ asset('images/weui_location-filled.png') }}" style="width: 15px; height: 15px; margin-right: 5px;"  alt="">
                      <label class="form-check-label fw-semibold fs-6" for="jobTypeMain" style="cursor: pointer;">
                        Location
                      </label>
                    </div>
                  
                    <!-- Checkbox List -->
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job1">
                      <label class="form-check-label text-secondary" for="job1">Chennai</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job2">
                      <label class="form-check-label text-secondary" for="job2">Mumbai</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job3">
                      <label class="form-check-label text-secondary" for="job3">London</label>
                    </div>
                  
                    <div class="form-check ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job4">
                      <label class="form-check-label text-secondary" for="job4">Los Angelese</label>
                    </div>
                </div>
                <div class="card px-5 py-3 border-0 shadow-sm my-4" style=" font-family: 'Inter', sans-serif;">
                    <!-- Header with checkbox and title -->
                    <div class="form-check d-flex align-items-center mb-3 ps-0">
                      <img src="{{ asset('images/tdesign_money.png') }}" style="width: 15px; height: 15px; margin-right: 5px;"  alt="">
                      <label class="form-check-label fw-semibold fs-6" for="jobTypeMain" style="cursor: pointer;">
                        Salary
                      </label>
                    </div>
                  
                    <!-- Checkbox List -->
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job1">
                      <label class="form-check-label text-secondary" for="job1">$0 - $1000</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job2">
                      <label class="form-check-label text-secondary" for="job2">$1000 - $5000</label>
                    </div>
                  
                    <div class="form-check mb-2 ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job3">
                      <label class="form-check-label text-secondary" for="job3">$5000 - $15000</label>
                    </div>
                  
                    <div class="form-check ps-0">
                      <input class="form-check-input me-2 border-dark" type="checkbox" id="job4">
                      <label class="form-check-label text-secondary" for="job4">$15000</label>
                    </div>
                </div>
                  
            </div>
            <div class="col-lg-8 col-md-12 px-3">
                <div class="header-for-cards mb-2">
                    <div class="header d-flex justify-content-left align-items-center">
                      <h5 class="fw-semibold mb-0">Show 2 jobs</h5>
                      
                      <!-- Tag-like closable tab -->
                      <div class="d-flex align-items-center gap-2">
                        <div class="border rounded-pill px-3 py-1 d-flex align-items-center">
                          <p class="mb-0 me-2">software</p>
                          <label for="menu-toggle" class="fs-5 mb-0" style="cursor: pointer;">&times;</label>
                        </div>
                      </div>
                    </div>
                    <hr class="bg-dark">
                  </div>
                  
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-4">
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
                                <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply Now</button></a>
                                <a href="{{ route('user.jobDetail')}}"><button class="save-btn">More Details</button></a>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
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
                                <a href="{{ route('user.apply') }}"><button class="apply-btn">Apply Now</button></a>
                                <a href="{{ route('user.jobDetail')}}"><button class="save-btn">More Details</button></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
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
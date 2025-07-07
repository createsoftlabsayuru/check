<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/apply.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
              <span1 class="fw-bold" id="breadcrumb-main-page">All Categories</span>
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

    <div class="container-fluid py-4" style="background-color: rgba(230,230,250,1);">
        <div class="container py-4">
                    <a href="javascript:history.back()" class="go-back-btn">
                        <i class="fas fa-arrow-left"></i> Go Back
                        </a>
                <div class="row g-4 mt-4">

                    <div class="col-lg-8">
                        <div class="card p-5">
                            <div class="d-flex align-items-start">
                                <div class="logo-wrapper-left position-absolute top-0 start-10 translate-middle-y">
                                    <img src="{{ asset('images/digitalx.png') }}" alt="Company Logo" class="rounded-circle company-logo" />
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-3">Assistant Officer</h4>
                                    <a href="#" class="text-primary fw-semibold">Hemas Consumer Brands</a>
                                    <div class="text-muted small mt-2">
                                        <span class="me-3"><i class="bi bi-briefcase"></i> IT and Tech</span>
                                        <span class="me-3"><i class="bi bi-clock"></i> Full time</span>
                                        <span><i class="bi bi-geo-alt"></i> New-York, USA</span>
                                    </div>
                                    <button class="btn apply-btn fw-bold btn-sm mt-3" data-bs-toggle="modal"
                                        data-bs-target="#applyModal">Apply now</button>
                                    <div class="mt-3 d-flex gap-2">
                                        <button class="btn btn-light d-flex align-items-center btn-sm border">
                                            <i class="bi bi-bookmark me-1"></i> Save
                                        </button>
                                        <button class="btn btn-light d-flex align-items-center btn-sm border">
                                            <i class="bi bi-share me-1"></i> Share
                                        </button>
                                        <button class="btn btn-light d-flex align-items-center btn-sm border">
                                            <i class="bi bi-exclamation-circle me-1"></i> Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Apply Modal -->
                        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-4 rounded-4 white-modal-content">
                                    <div class="modal-header border-0 pb-0">
                                        <h5 class="modal-title fw-bold w-100 text-center" id="applyModalLabel">Application</h5>
                                        <button type="button" class="btn-close position-absolute end-0 top-0 m-3"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Full name</label>
                                                <input type="text" class="form-control input-custom" placeholder="" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control input-custom" placeholder="" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Additional info</label>
                                                <textarea class="form-control input-custom" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Add your CV</label>
                                                <div class="d-flex">
                                                    <input type="file" class="form-control input-custom me-2" />
                                                    <button class="btn btn-warning text-dark fw-bold"
                                                        type="button">Browse</button>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Cover letter (Optional)</label>
                                                <div class="form-control input-custom p-2" contenteditable="true"
                                                    style="height:100px; overflow:auto; border:1px solid #ced4da;"></div>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2">
                                                <button type="reset" class="btn btn-outline-primary">Reset</button>
                                                <button type="submit" class="btn btn-primary px-4">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card p-5 mt-4">
                            <h5 class="fw-bold">Job Description</h5>
                            <hr>
                            <p class="text-muted">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                            </p>

                            <h6 class="fw-bold mt-3">Key Responsibilities :</h6>
                            <ul>
                                <li>Assist in developing and implementing marketing strategies and campaigns</li>
                                <li>Conduct market research and analyze consumer behavior</li>
                                <li>Monitor and report on the effectiveness of marketing campaigns</li>
                            </ul>

                            <h6 class="fw-bold mt-3">Requirements</h6>
                            <hr>
                            <h6 class="fw-semibold">Qualifications :</h6>
                            <ul>
                                <li>Bachelor’s degree in related field</li>
                                <li>1–2 years of experience in marketing</li>
                                <li>Excellent communication and interpersonal skills</li>
                            </ul>

                            <h6 class="fw-semibold">Benefits :</h6>
                            <ul>
                                <li>Competitive salary package</li>
                                <li>Comprehensive health insurance</li>
                                <li>Performance bonuses</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-custom mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/company-logo.png') }}" class="img-fluid mb-3" alt="Company Logo">
                            </div>
                            <h6 class="fw-bold mb-3">EAGON Company</h6>
                            <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+971 4 301 7777</p>
                            <p class="mb-2"><i class="bi bi-envelope-fill me-2"></i>jumeirahAl@gmail.com</p>
                            <p class="mb-3"><i class="bi bi-globe me-2"></i>www.Jueirah.com</p>
                            <button class="btn btn-primary">Company Profile</button>
                        </div>


                        <div class="card-custom">
                            <h6 class="fw-bold">Related Job</h6>
                            <div class="scrollable-card mt-3">
                                <div class="job-card p-3 rounded shadow-sm bg-white d-flex flex-column gap-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <img src="{{ asset('images/digitalx.png') }}" class="job-logo" alt="Nawaloka Logo">
                                        <span class="badge bg-danger small d-flex align-items-center">
                                            <i class="bi bi-clock me-1"></i> 4 days left
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="fw-bold mb-1">Office Assistant</h6>
                                            <p class="text-muted mb-0 small">Navaloka Hospital PLC</p>
                                        </div>
                                        <span class="text-muted fw-bold">Salary : 20K</span>
                                    </div>
                                    <div class="d-flex gap-3 mt-2 text-muted small align-items-center">
                                        <span><i class="bi bi-clock me-1"></i> Full time</span>
                                        <span><i class="bi bi-geo-alt me-1"></i> New-York, USA</span>
                                    </div>
                                </div>

                                <div class="job-card p-3 rounded shadow-sm bg-white d-flex flex-column gap-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <img src="{{ asset('images/company-logo1.jpg') }}" class="job-logo" alt="Nawaloka Logo">
                                        <span class="badge bg-danger small d-flex align-items-center">
                                            <i class="bi bi-clock me-1"></i> 4 days left
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="fw-bold mb-1">Office Assistant</h6>
                                            <p class="text-muted mb-0 small">Navaloka Hospital PLC</p>
                                        </div>
                                        <span class="text-muted fw-bold">Salary : 20K</span>
                                    </div>
                                    <div class="d-flex gap-3 mt-2 text-muted small align-items-center">
                                        <span><i class="bi bi-clock me-1"></i> Full time</span>
                                        <span><i class="bi bi-geo-alt me-1"></i> New-York, USA</span>
                                    </div>
                                </div>

                                <div class="job-card p-3 rounded shadow-sm bg-white d-flex flex-column gap-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <img src="{{ asset('images/company-logo2.png') }}" class="job-logo" alt="Nawaloka Logo">
                                        <span class="badge bg-danger small d-flex align-items-center">
                                            <i class="bi bi-clock me-1"></i> 4 days left
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="fw-bold mb-1">Office Assistant</h6>
                                            <p class="text-muted mb-0 small">Navaloka Hospital PLC</p>
                                        </div>
                                        <span class="text-muted fw-bold">Salary : 20K</span>
                                    </div>
                                    <div class="d-flex gap-3 mt-2 text-muted small align-items-center">
                                        <span><i class="bi bi-clock me-1"></i> Full time</span>
                                        <span><i class="bi bi-geo-alt me-1"></i> New-York, USA</span>
                                    </div>
                                </div>

                                <div class="job-card p-3 rounded shadow-sm bg-white d-flex flex-column gap-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <img src="{{ asset('images/company-logo3.jpg') }}" class="job-logo" alt="Nawaloka Logo">
                                        <span class="badge bg-danger small d-flex align-items-center">
                                            <i class="bi bi-clock me-1"></i> 4 days left
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="fw-bold mb-1">Office Assistant</h6>
                                            <p class="text-muted mb-0 small">Navaloka Hospital PLC</p>
                                        </div>
                                        <span class="text-muted fw-bold">Salary : 20K</span>
                                    </div>
                                    <div class="d-flex gap-3 mt-2 text-muted small align-items-center">
                                        <span><i class="bi bi-clock me-1"></i> Full time</span>
                                        <span><i class="bi bi-geo-alt me-1"></i> New-York, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
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
</body>

</html>
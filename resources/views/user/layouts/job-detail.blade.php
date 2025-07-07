<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/job-detail.css') }}">
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
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto" >
        <span class="fw-bold">LankanBuy</span>
      </a>

      <!-- Breadcrumb (Visible on all sizes) -->
      <div class="d-flex align-items-center text-white small ms-2">
        <span1 class="fw-bold" id="breadcrumb-main-page">Jobs</span>
        <span1 class="mx-2">&gt;</span>
        <span1 id="breadcrumb-page">Job Details</span>
      </div>

    </div>

    <!-- Right: Buttons -->
    <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
      <button class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
      <button class="btn btn-signup text-white"  data-bs-toggle="modal"
        data-bs-target="#registerModal">Sign Up</button>
    </div>
  </div>
</nav>
  <!-- Sidebar Menu -->
  @include('user.partials.sidebar')
  @include('user.partials.login-modal')
  @include('user.partials.signup-modal')

  <div class="body-container-wrapper py-3">
    <div class="container py-5">
        <a href="javascript:history.back()" class="go-back-btn">
        <i class="fas fa-arrow-left"></i> Go Back
        </a>


        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card-custom mb-4">
                    <h5 class="fw-bold">Assistant Officer</h5>
                    <hr>
                    <p class="text-muted">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                    <h6 class="fw-bold">Skill Set :</h6>
                    <div class="mb-3">
                        <span class="skill-badge">Quick in problem resolution</span>
                        <span class="skill-badge">Technical Skill</span>
                        <span class="skill-badge">Time management</span>
                        <span class="skill-badge">Technical Skill</span>
                        <span class="skill-badge">Time management</span>
                    </div>
                </div>
                <div class="card-custom border rounded p-5">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="fw-bold">Job Service</h6>
                        <button class="btn btn-share btn-sm"><i class="bi bi-share-fill me-2"></i>Share</button>
                    </div>

                    <div class="job-info-item d-flex justify-content-between"><span>Vacancy :</span><span>01</span>
                    </div>
                    <div class="job-info-item d-flex justify-content-between"><span>Job Type
                            :</span><span>Freelance</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Experience :</span><span>02
                            Years</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Job Location :</span><span>Colombo,
                            Sri Lanka</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Salary
                            :</span><span>LKR.12000</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Role :</span><span>Assistant</span>
                    </div>
                    <div class="job-info-item d-flex justify-content-between"><span>Gender :</span><span>Male</span>
                    </div>
                    <div class="job-info-item d-flex justify-content-between"><span>Education :</span><span>NVQ 4,
                            5</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Date :</span><span>05 Nov
                            2025</span></div>
                    <div class="job-info-item d-flex justify-content-between"><span>Time :</span><span>02.00 pm</span>
                    </div>
                    <div class="job-info-item d-flex justify-content-between"><span>Publish on :</span><span>05 Nov
                            2025</span></div>

                    <div class="mt-3 text-center">
                        <a href="{{ route('user.apply')}}"><button class="btn apply-btn fw-bold" data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                            now</button></a>
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
                            <form id="applicationForm" onsubmit="submitForm(event)">
                                <div class="mb-4 form-floating-custom">
                                    <label class="form-label">Full name</label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="mb-4 form-floating-custom">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required />
                                </div>
                                <div class="mb-4 form-floating-custom">
                                    <label class="form-label">Additional info</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="mb-5 form-floating-custom position-relative">
                                    <label class="form-label">Add your CV</label>
                                    <div class="custom-file-wrapper d-flex justify-content-between align-items-center">
                                        <input type="file" id="cv-upload" class="d-none" />
                                        <span class="file-name text-muted">No file chosen</span>
                                        <button class="btn btn-warning text-dark fw-bold" type="button"
                                            onclick="document.getElementById('cv-upload').click()">Browse</button>
                                    </div>
                                </div>

                                <div class="mb-4 form-floating-custom position-relative">
                                    <label class="form-label">Cover letter (Optional)</label>
                                    <div id="editor-container">
                                        <div id="editor"></div>
                                    </div>
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


            <div class="col-lg-4">
                <div class="card-custom mb-4">
                    <div class="text-center">
                        <img src="{{ asset('images/company-logo.png') }}" class="img-fluid mb-3" alt="Company Logo">
                    </div>
                    <h6 class="fw-bold mb-3">EAGON Company</h6>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+971 4 301 7777</p>
                    <p class="mb-2"><i class="bi bi-envelope-fill me-2"></i>jumeirahAl@gmail.com</p>
                    <p class="mb-3"><i class="bi bi-globe me-2"></i>www.Jueirah.com</p>
                    <button class="btn btn-profile">Company Profile</button>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
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
        let quill;

        document.addEventListener('DOMContentLoaded', function () {
            quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Type your cover letter...',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                        ['link', 'clean']
                    ]
                }
            });

            const form = document.getElementById('applicationForm');
            const fileInput = document.getElementById('cv-upload');
            const fileNameSpan = document.querySelector('.file-name');

            fileInput.addEventListener('change', function () {
                fileNameSpan.textContent = this.files[0]?.name || "No file chosen";
            });

            form.addEventListener('reset', function () {
                fileInput.value = '';
                fileNameSpan.textContent = "No file chosen";

                quill.setText('');
            });
        });

        function submitForm(event) {
            event.preventDefault();
            alert("Form submitted!");
        }
    </script>
      
</body>

</html>
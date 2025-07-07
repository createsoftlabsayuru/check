<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Your Business</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user/add3.css')}}">
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
          <img src="{{ asset('images/Logo.png')}}" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">For Business</span>
          
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

    <div class="form-section d-flex">
        
        <div class="left-panel p-5">
            <a href="javascript:history.back()" class="go-back-btn">
                <i class="fas fa-arrow-left"></i> Go Back
                </a>
            <h5 class="fw-bold">Add your Business</h5>
            <p class="text-muted">Add information about your business below...</p>

            <form>
                <div class="static-label-wrapper">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" />
                </div>

                <div class="static-label-wrapper">
                    <label for="businessName">Business Name</label>
                    <input type="text" class="form-control" id="businessName" />
                </div>

                <div class="static-label-wrapper">
                    <label for="address1">Address 1</label>
                    <input type="text" class="form-control" id="address1" />
                </div>

                <div class="static-label-wrapper">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" id="address2" />
                </div>

                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="static-label-wrapper">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="static-label-wrapper">
                            <label for="postal">Postal Code</label>
                            <input type="text" class="form-control" id="postal" />
                        </div>
                    </div>
                </div>

                <div class="phone-input-wrapper">
                    <label for="phone">Phone number</label>
                    <div class="input-group flex-nowrap">
                        <select class="form-select border-end-0" style="max-width: 80px;">
                            <option selected>+94</option>
                            <option>+1</option>
                            <option>+44</option>
                        </select>
                        <input type="tel" class="form-control border-start-0" id="phone" />
                    </div>
                </div>

                <div class="static-label-wrapper">
                    <label for="web">Web Address</label>
                    <input type="text" class="form-control" id="web" />
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>Mon</option>
                            <option>Tue</option>
                            <option>Wed</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>9.00 a.m</option>
                            <option>10.00 a.m</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>6.00 p.m</option>
                            <option>5.00 p.m</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-dark w-100">Add Hours</button>
                    </div>
                </div>

                <div class="static-label-wrapper mt-4">
                    <label for="category">Categories</label>
                    <select class="form-select" id="category">
                        <option selected disabled>Category</option>
                    </select>
                </div>

                <div class="static-label-wrapper mt-4">
                    <label for="subcategory">Sub Categories</label>
                    <select class="form-select" id="subcategory">
                        <option selected disabled>Sub Category</option>
                    </select>
                </div>

                <div class="static-label-wrapper mt-4">
                    <label for="email">Your Email Address</label>
                    <input type="email" class="form-control" id="email" />
                </div>

                <div class="mb-3">
                    <div class="upload-box rounded-2 p-3 text-center position-relative">
                        <div id="file-preview" class="d-none position-relative">
                            <img id="preview-image" src="#" alt="Preview" class="img-fluid rounded" />
                            <button type="button"
                                class="btn btn-sm btn-danger position-absolute top-0 end-0 me-1 mt-1 rounded-circle px-2 py-0"
                                id="remove-btn">&times;</button>
                        </div>

                        <div id="upload-placeholder">
                            <div><i class="fas fa-cloud-upload-alt fs-1 text-muted mb-2"></i>

                            </div>
                            <div>Upload Payment Resit<br>
                                <small class="text-secondary">JPEG, PNG and JPG formats, Up to 10MB</small>
                            </div>
                            <input type="file" id="file-input" class="form-control mt-2" hidden />
                            <button type="button" class="btn btn-outline-secondary mt-2"
                                onclick="document.getElementById('file-input').click()">Browse File</button>
                            <div id="file-name" class="mt-2 text-muted small"></div>
                        </div>
                    </div>
                </div>


                <div class="form-check mb-3">
                    <input class="form-check-input border border-secondary" type="checkbox" id="agree" />
                    <label class="form-check-label small" for="agree">Agree to terms and conditions.</label>
                </div>

                <p class="small text-muted">
                    By continuing, you agree to Help’s <a href="{{ route('user.terms')}}">Business Terms</a> and acknowledge our <a
                        href="{{ route('user.policy')}}">Privacy Policy</a>.
                </p>

                <a href="{{ route('user.paymentVerify')}}"><button type="submit" class="btn btn-add-business">Add Business</button></a>
            </form>
        </div>

        <div class="right-panel d-none d-md-block">
        </div>
    </div>
    @include('user.partials.footer')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const fileInput = document.getElementById('file-input');
        const preview = document.getElementById('file-preview');
        const previewImage = document.getElementById('preview-image');
        const uploadPlaceholder = document.getElementById('upload-placeholder');
        const fileNameDisplay = document.getElementById('file-name');
        const removeBtn = document.getElementById('remove-btn');

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = e => {
                    previewImage.src = e.target.result;
                    preview.classList.remove('d-none');
                    uploadPlaceholder.classList.add('d-none');
                    fileNameDisplay.textContent = file.name;
                };
                reader.readAsDataURL(file);
            }
        });

        removeBtn.addEventListener('click', () => {
            fileInput.value = '';
            preview.classList.add('d-none');
            uploadPlaceholder.classList.remove('d-none');
            fileNameDisplay.textContent = '';
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
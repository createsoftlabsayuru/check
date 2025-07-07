<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user/pay.css') }}">
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
              <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="me-2 w-auto">
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
        <div class="left-panel p-4">
            <div class="col-lg-6 form-control">
                <div class="card border-0 rounded-4 mb-4 shadow-sm bg-light position-relative overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('images/card.jpg') }}" class="w-100 rounded-3" />
                        <div class="account-overlay p-3">
                            <h5 class="fw-bold mb-3">Account Details</h5>
                            <p><strong>Account number:</strong> <span>A.B.C. Jhon</span></p>
                            <p><strong>Account holder:</strong> <span>1234 1234 1234</span></p>
                            <p><strong>Bank:</strong> <span>Commercial Credit</span></p>
                        </div>
                    </div>
                </div>

                <div class="card p-4 border border-2 rounded-3">
                    <h5 class="fw-bold mb-4">Verify Payment</h5>
                    <form id="payment-form">
                        <div class="mb-3">
                            <input type="text" class="form-control border-0 border-bottom rounded-0" placeholder="Name"
                                required />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control border-0 border-bottom rounded-0"
                                placeholder="Email" required />
                        </div>

                        <div class="mb-3">
                            <div class="upload-box border border-1 rounded-2 p-3 text-center position-relative">
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

                        <div class="text-center">
                            <button type="submit" class="btn btn-submit px-4 fw-semibold">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="right-panel d-none d-md-block">
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
</body>

</html>
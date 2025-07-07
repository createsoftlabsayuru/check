<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('css/user/sale.css') }}" rel="stylesheet">
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
              <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
              <span1 class="mx-2">&gt;</span>
              <span1 id="breadcrumb-page">Business For Sale</span>
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
            <h2 class="category-title">Business For sale</h2>
            <p>Connect with potential buyers and find the best deal.</p>
        </div>
        </form>
    </header>
    <div class="container-fluid min-vh-100 py-5 bg-light-purple">
        <a href="javascript:history.back()" class="go-back-btn mb-4 mx-4">
            <i class="fas fa-arrow-left"></i> Go Back
          </a>
        <div class="row justify-content-center">
            <div class="col-lg-6 px-4 mb-4 position-relative custom-divider">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control form-input" placeholder="Business name">
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <select class="form-select form-input" required>
                                <option value="" disabled selected hidden>Category</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="health">Health</option>
                            </select>
                        </div>
                          
                        <div class="col">
                            <input type="text" class="form-control form-input" placeholder="Price / Rs.">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-input" placeholder="Location">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-input" rows="4" placeholder="Description"></textarea>
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

                    <div class="mb-3">
                        <input type="email" class="form-control form-input" placeholder="E-mail">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-purp px-4">Post Listing</button>
                    </div>

                </form>
            </div>

            <div class="col-lg-5 px-4">
                <div class="scroll-box">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="fw-bold"><img src="images/palid.png" class="me-2"></div>
                                <span class="badge bg-light text-secondary small">10 min ago</span>
                            </div>
                            <p class="mt-2 small text-muted">
                                A business description provides a concise overview of a company, including its purpose,
                                products & services, target market, and unique selling points.
                            </p>
                            <div class="d-flex justify-content-between mt-2">
                                <span class="text-danger fw-bold">LKR. 5000</span>
                                <span class="text-muted small">Saloon</span>
                            </div>
                            <p class="mb-1 small">Colombo, SriLanka</p>
                            <p class="mb-0 small">plaidprivate@gmail.com</p>
                            <div class="text-end mt-2">
                                <i class="bi bi-pencil-fill me-2 text-dark"></i>
                                <i class="bi bi-trash-fill text-dark"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="fw-bold"><img src="images/palid.png" class="me-2"></div>
                                <span class="badge bg-light text-secondary small">19 min ago</span>
                            </div>
                            <p class="mt-2 small text-muted">
                                A business description provides a concise overview of a company, including its purpose,
                                products & services, target market, and unique selling points.
                            </p>
                            <div class="d-flex justify-content-between mt-2">
                                <span class="text-danger fw-bold">LKR. 5000</span>
                                <span class="text-muted small">Saloon</span>
                            </div>
                            <p class="mb-1 small">Colombo, SriLanka</p>
                            <p class="mb-0 small">plaidprivate@gmail.com</p>
                            <div class="text-end mt-2">
                                <i class="bi bi-pencil-fill me-2 text-dark"></i>
                                <i class="bi bi-trash-fill text-dark"></i>
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
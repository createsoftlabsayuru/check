<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="menu-signup-login-modal.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top py-3 border-bottom"
    style="background: rgba(0, 0, 0, 0.477); z-index: 1030;">
    <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
  
      <!-- Left Section: Menu Icon + Logo + Breadcrumb -->
      <div class="d-flex align-items-center gap-3">
        <!-- Menu Icon (Mobile) -->
        <label for="menu-toggle" class="menu-icon-wrapper text-white fs-4 d-lg-none m-0">
          <i class='bx bx-menu' id="menu-icon"></i>
        </label>
  
        <!-- Logo -->
        <a class="navbar-brand d-flex flex-column align-items-center p-0" href="#">
          <img src="images/Logo.png" alt="Logo" class="me-2 w-auto" style="max-width: 50px;">
          <span class="fw-bold" style="color: #414BD2;">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span class="fw-bold" id="breadcrumb-main-page">Loading</span>
          <span class="mx-2">&gt;</span>
          <span id="breadcrumb-page">Loading...</span>
        </div>

      </div>
  
      <!-- Right: Buttons -->
      <div class="links-and-buttons d-none d-lg-flex gap-2 align-items-center">
        <button class="btn btn-light text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login In</button>
        <button class="btn text-white" style="background-color: #414BD2;" data-bs-toggle="modal"
          data-bs-target="#registerModal">Sign Up</button>
      </div>
    </div>
  </nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="((asset('menu-signup-login-modal.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/nav.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top py-3 border-bottom"
    style="background: rgba(0, 0, 0, 0.477); z-index: 1030;">
    <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
  
      <!-- Left Section: Menu Icon + Logo + Breadcrumb -->
      <div class="d-flex align-items-center gap-3">
        <!-- Logo -->
        <a class="navbar-brand d-flex flex-column align-items-center p-0" href="#">
          <img src="images/Logo.png" alt="Logo" class="me-2 w-auto" style="max-width: 50px;">
          <span class="fw-bold" style="color: #414BD2;">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span class="fw-bold">Admin</span>
          <span class="mx-2">&gt;</span>
          <span>add</span>
        </div>
      </div>

      <div class="d-none d-lg-flex flex-grow-1 justify-content-center mx-3">
        <div class="input-group search-bar">
          <input type="text" class="form-control rounded-start-pill" placeholder="What are you looking for ?" />
          <input type="text" class="form-control rounded-0" placeholder="Colombo, SriLanka" />
          <button class="btn rounded-end-pill"><i class="bx bx-search"></i></button>
        </div>
        </div>
  
      <!-- Right: Buttons (Mobile & Desktop) -->
      <div class="d-flex align-items-center">
        <!-- Desktop menu icon (already on the right) -->
        <div class="d-none d-lg-flex gap-2 align-items-center">
          <label for="menu-toggle" class="menu-icon-wrapper text-white fs-4 m-0">
            <i class='bx bx-menu' id="menu-icon"></i>
          </label>
        </div>
      
        <!-- Mobile menu icon (always on far right) -->
        <div class="d-flex d-lg-none justify-content-end align-items-center ms-auto">
          <label for="menu-toggle" class="menu-icon-wrapper text-white m-0">
            <i class='bx bx-menu' id="menu-icon-mobile"></i>
          </label>
        </div>
      </div>

    </div>
  </nav>
</body>
</html>
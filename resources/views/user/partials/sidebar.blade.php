<div class="side-menu  text-white">
    <div class="p-4">
      <!-- Sidebar Header: Title + Close Icon -->
      <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="m-0">Menu</h4>
        <label for="menu-toggle" class="fs-2 mb-0">&times;</label>
      </div>

      <!-- Sidebar Links -->
      <ul class="list-unstyled">
        <li><a href="{{ url('/main') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Home</a></li>
        <li><a href="{{ url('/about') }}" class="d-block text-white fw-bold text-decoration-none mb-3">About</a></li>
        <li><a href="{{ url('/products') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Product</a></li>
        <li><a href="{{ url('/service') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Service</a></li>
        <li><a href="{{ url('/job') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Jobs</a></li>
        <li><a href="{{ url('/blog') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Blogs</a></li>
        <li><a href="{{ url('/events') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Events</a></li>
        <li><a href="{{ url('/advertising') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Advertise</a></li>
        <li><a href="{{ url('/contact') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Contact Us</a></li>
      </ul>
      <a href="{{ url('/add-business3') }}" class="d-block text-white fw-bold text-decoration-none mb-3">Add Business</a>
      <a href="#" class="d-block text-white fw-bold text-decoration-none mb-3">Write a Review</a>
      
      <!-- Sidebar Buttons -->
      <button class="btn btn-light w-100 mb-2 text-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      <button class="btn btn-signup w-100 text-white" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
    </div>
  </div>
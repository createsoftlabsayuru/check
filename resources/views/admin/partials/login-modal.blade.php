<!--login modal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-fullscreen-sm-down custom-modal-width">
      <div class="modal-content rounded-4 border-0  text-white py-5" style="background: rgba(40, 40, 90, 0.7); backdrop-filter: blur(10px);">
  
        <div class="modal-header border-0 justify-content-center">
          <h3 class="fw-bold text-center w-100">WELCOME BACK !</h3>
          <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
        </div>
  
        <div class="modal-body text-center px-4 fs-4">
          <p>Please enter your details to sign in</p>
  
          <!-- Social Icons -->
          <div class="d-flex justify-content-center gap-3 my-3">
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2" style="width: 60px; height: 60px;">
              <img src="images/google-icon.png" alt="Google" style="width: 30px; height: 30px;">
            </button>
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2" style="width: 60px; height: 60px;">
              <img src="images/apple-icon.png" alt="Apple" style="width: 30px; height: 30px;">
            </button>
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2" style="width: 60px; height: 60px;">
              <img src="images/twitter-x-icon.png" alt="Twitter X" style="width: 30px; height: 30px;">
            </button>
          </div>
          
  
          <!-- OR Separator -->
          <div class="d-flex align-items-center my-3">
            <div class="flex-grow-1 border-bottom border-light"></div>
            <span class="mx-2">or</span>
            <div class="flex-grow-1 border-bottom border-light"></div>
          </div>
  
          <div class="mx-auto" style="max-width: 400px;">
            <div class="text-start mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control bg-form py-2 fs-4" id="email">          
            </div>
    
            <!-- Password -->
            <div class="text-start mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control bg-form py-2 fs-4" id="password">          
            </div>
            <!-- Remember and Forgot -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start mb-4">
              <div class="form-check text-start">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label text-white" for="remember">Remember me</label>
              </div>
              <a href="#" class="text-white text-decoration-underline small">Forgot Password?</a>
            </div>
    
            <!-- Login Button -->
            <button class="btn btn-light w-100 mb-3 rounded-pill">Login In</button>
    
            <!-- Sign up text -->
            <p class="small">Don't have an account? <a href="#" class="text-white fw-bold text-decoration-underline">Sign Up</a></p>
          
          </div>
        </div>
      </div>
    </div>
  </div>
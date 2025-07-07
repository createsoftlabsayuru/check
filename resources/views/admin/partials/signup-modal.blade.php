<!--Sign up form modal-->
<div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-fullscreen-sm-down custom-modal-width">
      <div class="modal-content rounded-4 border-0 text-white py-5" style="background: rgba(40, 40, 90, 0.7); backdrop-filter: blur(10px);">
  
        <div class="modal-header border-0 justify-content-center ">
          <h3 class="fw-bold text-center w-100">Get Started now !</h3>
          <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
        </div>
  
        <div class="modal-body text-center px-4 fs-4 ">
  
          <p>Enter your credentials to access your account</p>
  
          <!-- Radio Buttons -->
          <div class="d-flex justify-content-center gap-3 mb-3  fw-bold fs-3">
            <div class="form-check">
              <input class="form-check-input custom-radio"  type="radio" name="accountType" id="businessRadio" checked>
              <label class="form-check-label" for="businessRadio">Business Account</label>
            </div>
            <div class="form-check">
              <input class="form-check-input custom-radio" type="radio" name="accountType" id="personalRadio">
              <label class="form-check-label" for="personalRadio">Personal Account</label>
            </div>
          </div>
          
  
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
  
          <!-- OR separator -->
          <div class="d-flex align-items-center my-3">
            <div class="flex-grow-1 border-bottom border-light"></div>
            <span class="mx-2">or</span>
            <div class="flex-grow-1 border-bottom border-light"></div>
          </div>
  
          <!-- Business Form -->
          <form id="businessForm" class="mx-auto" style="max-width: 420px;">
            <div class="mb-3 text-start">
              <label for="companyName" class="form-label">Company Name</label>
              <input type="text" class="form-control bg-form py-2 fs-4" id="companyName" >
            </div>
            <div class="mb-3 text-start">
              <label for="companyEmail" class="form-label">Company Email</label>
              <input type="email" class="form-control bg-form py-2 fs-4" id="companyEmail" >
            </div>
            <div class="mb-3 text-start">
              <label for="companyPassword" class="form-label">Password</label>
              <input type="password" class="form-control bg-form py-2 fs-4" id="companyPassword" >
            </div>
            <div class="mb-3 text-start">
              <label for="companyConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control bg-form py-2 fs-4" id="companyConfirmPassword" >
            </div>
            <div class="form-check mb-3 text-start">
              <input type="checkbox" class="form-check-input" id="companyTerms">
              <label class="form-check-label" for="companyTerms">I agree to <a href="#" class="text-white text-decoration-underline">term & condition</a></label>
            </div>
            <button class="btn btn-primary w-100 rounded-pill mb-3 fs-4">Login In</button>
          </form>
  
          <!-- Personal Form -->
          <form id="personalForm" class="d-none mx-auto" style="max-width: 420px;">
            <div class="mb-3 text-start">
              <label for="fullName" class="form-label">Your Full Name</label>
              <input type="text" class="form-control bg-form py-2 fs-4" id="fullName" >
            </div>
            <div class="mb-3 text-start">
              <label for="personalEmail" class="form-label">Your Email</label>
              <input type="email" class="form-control bg-form py-2 fs-4" id="personalEmail" >
            </div>
            <div class="mb-3 text-start">
              <label for="personalPassword" class="form-label">Password</label>
              <input type="password" class="form-control bg-form py-2 fs-4" id="personalPassword" >
            </div>
            <div class="mb-3 text-start">
              <label for="personalConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control bg-form py-2 fs-4" id="personalConfirmPassword" >
            </div>
            <div class="form-check mb-3 text-start">
              <input type="checkbox" class="form-check-input" id="personalTerms">
              <label class="form-check-label" for="personalTerms">I agree to <a href="#" class="text-white text-decoration-underline">term & condition</a></label>
            </div>
            <button class="btn btn-primary w-100 rounded-pill mb-3 fs-4">Login In</button>
          </form>
  
          <p class="small fs-4">Already have an account? <a href="#" class="text-white fw-bold text-decoration-underline">Login In</a></p>
        </div>
      </div>
    </div>
  </div>

  
<!--Sign up form modal-->
<div class="signup-modal modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-fullscreen-sm-down custom-modal-width">
      <div class="modal-content rounded-4 border-0 text-white py-5">
        <div class="modal-header border-0 justify-content-center">
          <h3 class="fw-bold text-center w-100">Get Started now !</h3>
          <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
        </div>
  
        <div class="modal-body text-center px-4 fs-4">
          <p>Enter your credentials to access your account</p>
  
          <!-- Radio Buttons -->
          <div class="d-flex justify-content-center gap-3 mb-3 fw-bold fs-3">
            <div class="form-check">
              <input class="form-check-input custom-radio" type="radio" name="accountType" id="businessRadio" checked>
              <label class="form-check-label" for="businessRadio">Business Account</label>
            </div>
            <div class="form-check">
              <input class="form-check-input custom-radio" type="radio" name="accountType" id="personalRadio">
              <label class="form-check-label" for="personalRadio">Personal Account</label>
            </div>
          </div>
  
          <!-- Social Icons -->
          <div class="social-icons-buttons d-flex justify-content-center gap-3 my-3">
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2">
              <img src="{{ asset('images/google-icon.png') }}" alt="Google">
            </button>
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2">
              <img src="{{ asset('images/apple-icon.png') }}" alt="Apple">
            </button>
            <button class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-2">
              <img src="{{ asset('images/twitter-x-icon.png') }}" alt="Twitter X">
            </button>
          </div>
  
          <!-- OR separator -->
          <div class="d-flex align-items-center my-3">
            <div class="flex-grow-1 border-bottom border-light"></div>
            <span class="mx-2">or</span>
            <div class="flex-grow-1 border-bottom border-light"></div>
          </div>
  
          <!-- Business Form -->
          <form method="POST"  id="businessForm" class="mx-auto" style="max-width: 420px;">
            @csrf
          
            <div class="mb-3 text-start">
              <label for="companyName" class="form-label">Company Name</label>
              <input type="text" name="company_name" class="form-control bg-form py-2 fs-4" id="companyName" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="companyEmail" class="form-label">Company Email</label>
              <input type="email" name="email" class="form-control bg-form py-2 fs-4" id="companyEmail" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="companyPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control bg-form py-2 fs-4" id="companyPassword" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="companyConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control bg-form py-2 fs-4" id="companyConfirmPassword" required>
            </div>
          
            <div class="form-check mb-3 text-start">
              <input type="checkbox" class="form-check-input" id="companyTerms" required>
              <label class="form-check-label" for="companyTerms">
                I agree to <a href="#" class="text-white text-decoration-underline">terms & conditions</a>
              </label>
            </div>
          
            <button type="submit" class="btn btn-primary w-100 rounded-pill mb-3 fs-4">Sign Up</button>
          </form>
          
  
          <!-- Personal Form -->
          <form method="POST"  id="personalForm" class="d-none mx-auto" style="max-width: 420px;">
            @csrf
          
            <div class="mb-3 text-start">
              <label for="fullName" class="form-label">Your Full Name</label>
              <input type="text" name="full_name" class="form-control bg-form py-2 fs-4" id="fullName" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="personalEmail" class="form-label">Your Email</label>
              <input type="email" name="email" class="form-control bg-form py-2 fs-4" id="personalEmail" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="personalPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control bg-form py-2 fs-4" id="personalPassword" required>
            </div>
          
            <div class="mb-3 text-start">
              <label for="personalConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control bg-form py-2 fs-4" id="personalConfirmPassword" required>
            </div>
          
            <div class="form-check mb-3 text-start">
              <input type="checkbox" class="form-check-input" id="personalTerms" required>
              <label class="form-check-label" for="personalTerms">
                I agree to <a href="#" class="text-white text-decoration-underline">terms & conditions</a>
              </label>
            </div>
          
            <button type="submit" class="btn btn-primary w-100 rounded-pill mb-3 fs-4">Sign Up</button>
          </form>
          
  
          <p class="small fs-4">Already have an account? 
            <a href="#loginModal" class="text-white fw-bold text-decoration-underline" data-bs-toggle="modal">Login In</a>
          </p>
        </div>
      </div>
    </div>
  </div>
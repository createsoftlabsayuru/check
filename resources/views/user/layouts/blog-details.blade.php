<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog-Details</title>
  <link rel="stylesheet" href="{{ asset('css/user/style-blog-details.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body style="background-color: rgba(230,230,250,1);"> 
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
          <img src="images/Logo.png" alt="Logo" class="me-2 w-auto">
          <span class="fw-bold">LankanBuy</span>
        </a>
  
        <!-- Breadcrumb (Visible on all sizes) -->
        <div class="d-flex align-items-center text-white small ms-2">
          <span1 class="fw-bold" id="breadcrumb-main-page">Home</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Company</span>
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
  
   <div class="about-overlay">
    
    <p>Why UX Design Matters in 2025</p>
    
  </div>
</header>


   <div class="d-flex flex-wrap justify-content-center gap-5 mt-5 mb-5">
          <!-- Repeat this block for each menu item -->
          <a href="{{ route('user.main')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle p-2" >
              <img src="{{ asset('images/flat-color-icons_home.png') }}" class="icon-img mb-1 " alt="Home" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Home</div>
            </div>
          </a>
          
          <a href="{{ route('user.about')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/fluent-color_contact-card-24.png') }}" class="icon-img mb-1" alt="About" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">About</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.products')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/Phone Contact.png') }}" class="icon-img mb-1" alt="Product" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Product</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.service')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/flat-color-icons_services.png') }}" class="icon-img mb-1" alt="Service" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Service</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.job')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('images/Job.png') }}" class="icon-img mb-1" alt="Jobs" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Jobs</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.blog')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle" >
              <img src="{{ asset('https://img.icons8.com/color/48/blogger.png') }}" class="icon-img mb-1" alt="Blogs" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Blogs</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.events')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/event-accepted-tentatively.png') }}" class="icon-img mb-1" alt="Event" style="width: 30px; height: 30px;" >
              <div class="label small text-white" style="font-size: 15px;">Event</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.advertising')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/google-ads.png') }}" class="icon-img mb-1" alt="Advertise" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Advertise</div>
            </div>
          </a>
          
      
          <a href="{{ route('user.contact')}}" target="_blank" style="text-decoration: none;">
            <div class="d-flex flex-column align-items-center justify-content-center bg-black rounded-circle circle">
              <img src="{{ asset('https://img.icons8.com/color/48/phone.png') }}" class="icon-img mb-1" alt="Contact us" style="width: 30px; height: 30px;">
              <div class="label small text-white" style="font-size: 15px;">Contact us</div>
            </div>
          </a>
   </div>
        





<div class="blog-container">
  <div class="blog-left">
    <h2><span class="highlight">ABOUT</span> | Blog</h2>

    <div class="blog-section">
      <h3>🌟 <strong>Introduction</strong></h3>
      <p>
        In a world dominated by digital experiences, User Experience (UX) Design is no longer just a
        “nice-to-have” — it's a business necessity. As we move into 2025, companies that prioritize UX will
        have a significant edge over competitors who don't. But what exactly makes UX design so critical today?
      </p>
    </div>

    <div class="blog-section">
      <h3>🔍 <strong>What is UX Design?</strong></h3>
      <p>
        UX Design refers to the process of enhancing user satisfaction by improving the usability,
        accessibility, and pleasure provided in the interaction with a product.
      </p>
      <ul>
        <li>Research and user interviews</li>
        <li>Wireframes and prototypes</li>
        <li>Interaction design</li>
        <li>Usability testing</li>
      </ul>
      <p class="quote">“Good design is invisible, but its effects are powerful.”</p>
    </div>

    <div class="blog-section">
      <h3>📈 <strong>Why UX Design is Essential in 2025</strong></h3>
      <ol>
        <li><strong>User Expectations Are Higher Than Ever</strong><br>
        People expect fast, clean, intuitive interfaces. Slow and cluttered designs lead to lost trust.</li>
      </ol>
    </div>
  </div>



  <div class="blog-right">
    <img src="images/author-image.jpg" alt="Author" class="author-img" />
    <h4>Author - James Daniel</h4>
    <p><a href="mailto:jumeirahAI@gmail.com" class="email">jumeirahAI@gmail.com</a></p>
    <p><strong>Publish Date :</strong> 09/05/2025</p>
    <div class="social-icons">
      <i class="fab fa-linkedin"></i>
      <i class="fab fa-facebook"></i>
      <i class="fab fa-instagram"></i>
    </div>
  </div>
</div>






<div class="blog-container">
  <!-- Left Blog Section -->
    <div class="blog-left">
    <div class="blog-section">
      <h3>📈 <strong>Why UX Design is Essential in 2025</strong></h3>
      <ol>
        <li>
          <strong>User Expectations Are Higher Than Ever</strong><br>
          People expect fast, clean, intuitive interfaces. Slow and cluttered designs lead to lost trust.
        </li>
        <li>
          <strong>Mobile-First World</strong><br>
          Over 65% of users access websites via mobile. Responsive UX is no longer optional.
        </li>
        <li>
          <strong>AI and Personalization</strong><br>
          UX now incorporates AI to provide personalized experiences — from smart product suggestions to context-aware layouts.
        </li>
        <li>
          <strong>Accessibility is a Legal Requirement</strong><br>
          Inclusive design ensures your app or site is usable by people with disabilities — and avoids legal issues.
        </li>
      </ol>
    </div>

    <div class="blog-section">
      <h3>🎨 <strong>Real-World Example: Apple vs. Others</strong></h3>
      <p>
        Apple is famous for its focus on minimalistic, intuitive UX. That’s one reason their products are loved globally.
        Meanwhile, apps with poor UX suffer from low retention and poor reviews.
      </p>

      <h4>🚀 How to Improve Your UX Today</h4>
      <ul>
        <li>Conduct real user interviews (not just surveys)</li>
        <li>Use Figma or Adobe XD for interactive prototypes</li>
        <li>Test with actual users regularly</li>
        <li>Don’t rely only on aesthetics — focus on functionality</li>
      </ul>
    </div>

    <div class="blog-section">
      <h3>📌 <strong>Final Thoughts</strong></h3>
      <p>
        UX Design is about understanding people. If you know your users, your design will serve them better — and that leads to loyalty, growth, and success.
        In 2025 and beyond, businesses that invest in UX will thrive.
      </p>
      <div class="social-icons">
      <i class="fab fa-linkedin"></i>
      <i class="fab fa-facebook"></i>
      <i class="fab fa-instagram"></i>
    </div>
    </div>
  </div>
 

  <!-- Right Sidebar: Related Articles -->
  <div class="blog-right">
    <h4><span class="highlight">Article</span> | Related</h4>
    <hr class="divider" />
    <div class="related-list">
      <div class="related-item">
        <img src="{{ asset('images/blog-details1.jpg') }}" alt="Figma Plugins">
        <div class="related-text">10 Figma Plugins<br><small>Every Designer Should Use</small></div>
      </div>
      <div class="related-item">
        <img src="{{ asset('images/blog-details2.jpg') }}" alt="UI vs UX">
        <div class="related-text">UI vs UX:<br><small>What’s the Difference?</small></div>
      </div>
      <div class="related-item">
        <img src="{{ asset('images/blog-details2.jpg') }}" alt="UX Audit">
        <div class="related-text">How to Conduct a UX Audit</div>
      </div>
      <div class="related-item">
        <img src="{{ asset('images/blog-details 3.jpg') }}" alt="UX Audit">
        <div class="related-text">How to Conduct a UX Audit</div>
      </div>
      <div class="related-item">
        <img src="{{ asset('images/blog-details 3.jpg') }}" alt="UX Audit">
        <div class="related-text">How to Conduct a UX Audit</div>
      </div>
    </div>
  </div>
</div>



<div class="comment-and-sidebar">
  <!-- Left: Comment Section -->
  <div class="comment-section">
    <h3>Leave & Comment</h3>
    <form class="comment-form">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="comment" rows="4" placeholder="Comment" required></textarea>
      <button type="submit">Submit Comment</button>
    </form>
  </div>
  

  <!-- Right: Sidebar Section -->
  <div class="sidebar-section">
    <!-- Tags/Category -->
    <div class="tags-box">
      <h4>Tags / Category</h4>
      <div class="tags">
        <span>#Technology</span>
        <span>#Business</span>
        <span>#Design</span>
        <span>#UI / UX</span>
        <span>#Productivity</span>
      </div>
    </div>

    <!-- QR Code -->
    <div class="qr-box">
      <h4>QR Code</h4>
      <img src="{{ asset('images/QR.png') }}" alt="QR Code" class="qr-image" />
      <p>Scan to Read on Your Phone</p>
      <small>Only read</small>
    </div>
  </div>
</div>


@include('user.partials.footer')
<!-- Bootstrap 5 JS Bundle with Popper -->
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

</body>
</html>
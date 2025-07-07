<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing Plans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user/promotion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css')}}">
</head>

<body class="bg-light-purple">
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
          <span1 class="fw-bold" id="breadcrumb-main-page">All Categories</span>
          <span1 class="mx-2">&gt;</span>
          <span1 id="breadcrumb-page">Promote</span>
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
        
        <div class="promo-text-container">
            <h1 class="promo-text">Promote <br> your Business</h1>
        </div>
    </header>

    <div class="container text-center mt-5 mb-5">
        <h2 class="fw-bold mb-2">Affordable plans for any situation</h2>
        <p class="text-muted mb-4">Choose a Premium plan and promote your business without limits on your phone, speaker
            and other devices. Pay in various ways. Cancel anytime.</p>
        <div class="card-icons d-flex justify-content-center gap-4 mb-4">
            <img src="{{ asset('images/amex.png') }}" alt="Visa" />
            <img src="{{ asset('images/master.png') }}" alt="MasterCard" />
            <img src="{{ asset('images/visa.png') }}" alt="PayPal" />
            <img src="{{ asset('images/paypal.png') }}" alt="Amex" />
        </div>

        <div class="plan-tabs mb-5">
            <div class="tab-options">
                <button class="tab-btn" data-type="monthly">Monthly</button>
                <button class="tab-btn active" data-type="annually">Annualy</button>
                <button class="tab-btn" data-type="lifetime">Life Time</button>
            </div>
        </div>


        <div class="row justify-content-center" id="plansContainer">
            <!-- Plans will be injected here -->
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
        const plans = {
            monthly: [
                {
                    name: 'Basic',
                    price: 'Rs. 500',
                    color: '#28c745',
                    features: [
                        '1 Featured Listing for 2 Days',
                        'Priority tag on business profile',
                        'Basic support'
                    ]
                },
                {
                    name: 'Pro',
                    price: 'Rs. 1200',
                    color: '#f8e71c',
                    features: [
                        'Homepage spotlight for 3 Days',
                        '1 Job Boost',
                        'Featured in search + category pages'
                    ]
                },
                {
                    name: 'Business',
                    price: 'Rs. 1800',
                    color: '#e03131',
                    features: [
                        'Homepage spotlight for 5 Days',
                        'Social Media Story mention',
                        'Priority support'
                    ]
                }
            ],
            annually: [
                {
                    name: 'Basic',
                    price: 'Rs. 1,500',
                    color: '#28c745',
                    features: [
                        '1 Featured Listing for 7 Days',
                        'Highlighted placement in search results',
                        'Priority tag on business profile',
                        'Appear in "Recommended Businesses"'
                    ]
                },
                {
                    name: 'Pro',
                    price: 'Rs. 3,500',
                    color: '#f8e71c',
                    features: [
                        'Homepage spotlight for 7 Days',
                        '2 Job Boosts (top of job listing results)',
                        'Featured in search + category pages',
                        'Social media story mention',
                        'Business badge ("Trusted Seller")'
                    ]
                },
                {
                    name: 'Business',
                    price: 'Rs. 5,000',
                    color: '#e03131',
                    features: [
                        'Homepage spotlight for 14 Days',
                        '1 Job Boost + 1 Service Ad Boost',
                        'Instagram + Facebook post (carousel or reel)',
                        'Priority customer support',
                        'Appears first in all category filters'
                    ]
                }
            ],
            lifetime: [
                {
                    name: 'Basic',
                    price: 'Rs. 5,000',
                    color: '#28c745',
                    features: [
                        'Featured listing for lifetime',
                        'Priority support',
                        'Appears in business filters'
                    ]
                },
                {
                    name: 'Pro',
                    price: 'Rs. 9,000',
                    color: '#f8e71c',
                    features: [
                        'Homepage spotlight lifetime',
                        'Unlimited Job Boosts',
                        'Permanent Featured listing',
                        'Trusted Seller badge'
                    ]
                },
                {
                    name: 'Business',
                    price: 'Rs. 13,000',
                    color: '#e03131',
                    features: [
                        'All features lifetime',
                        'Dedicated manager',
                        'Social media marketing inclusion',
                        'Top of all category results'
                    ]
                }
            ]
        };

        const planContainer = document.getElementById('plansContainer');
        const toggleButtons = document.querySelectorAll('.tab-btn');

        let selectedType = 'annually';
        let selectedPlanIndex = null;

        function renderPlans(type) {
            planContainer.innerHTML = '';
            selectedPlanIndex = null;

            plans[type].forEach((plan, index) => {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-4 d-flex';

                const card = document.createElement('div');
                card.className = 'plan-card bg-white h-100';
                card.style.setProperty('--header-color', plan.color);

                if (plan.color === '#f8e71c') {
                    card.classList.add('yellow-plan');
                }


                card.onclick = () => {
                    document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
                    card.classList.add('selected');
                    selectedPlanIndex = index;
                };

                const header = document.createElement('div');
                header.className = 'plan-header';
                header.innerText = plan.name;

                const price = document.createElement('h4');
                price.className = 'plan-price text-center mb-4';
                price.innerText = plan.price;

                const featureList = document.createElement('div');
                featureList.className = 'plan-features';
                plan.features.forEach(f => {
                    const item = document.createElement('div');
                    item.className = 'feature-item';
                    item.textContent = f;
                    featureList.appendChild(item);
                });

                const selectBtn = document.createElement('button');
                selectBtn.className = 'btn btn-select text-white';
                selectBtn.style.backgroundColor = plan.color;
                selectBtn.innerText = 'Select';
                selectBtn.onclick = (e) => {
                    e.stopPropagation();
                    alert(`You selected ${plan.name} (${type}) plan`);
                    window.location.href = `billing.html`;
                };

                card.appendChild(header);
                card.appendChild(price);
                card.appendChild(featureList);
                card.appendChild(selectBtn);
                col.appendChild(card);
                planContainer.appendChild(col);
            });
        }


        toggleButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                toggleButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                selectedType = btn.getAttribute('data-type');
                renderPlans(selectedType);
            });
        });

        renderPlans(selectedType);

    </script>
</body>

</html>
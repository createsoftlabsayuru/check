<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/Reviews.css') }}">
</head>
<body>
    <div class="container-wrapper">
        <!-- Main Content -->
        <div class="main-content">
          <h2 class="underline-heading">Reviews</h2>

            <!-- Reviews Section -->
            <div class="reviews-section">
                <div class="reviews-header">
                    
                    <div class="tab-buttons">
                        <button class="tab-btn active" onclick="switchTab('received')">All Received Reviews</button>
                        <button class="tab-btn" onclick="switchTab('sent')">All Sent Reviews</button>
                    </div>
                </div>

                <!-- Received Reviews Tab -->
                <div id="received-tab" class="tab-content active">
                    <div class="reviews-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Listing Name</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Rating</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Mia Skin care</td>
                                    <td>Nimantha</td>
                                    <td>nimanthaloki23@gmail.com</td>
                                    <td>Super</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>02</strong></td>
                                    <td>Mia Skin care</td>
                                    <td>Nimantha</td>
                                    <td>nimanthaloki23@gmail.com</td>
                                    <td>Super</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Mia Skin care</td>
                                    <td>Nimantha</td>
                                    <td>nimanthaloki23@gmail.com</td>
                                    <td>Super</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>04</strong></td>
                                    <td>Mia Skin care</td>
                                    <td>Nimantha</td>
                                    <td>nimanthaloki23@gmail.com</td>
                                    <td>Super</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sent Reviews Tab -->
                <div id="sent-tab" class="tab-content">
                    <div class="reviews-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Business Name</th>
                                    <th>Owner</th>
                                    <th>Email</th>
                                    <th>Your Review</th>
                                    <th>Rating</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Green Valley Restaurant</td>
                                    <td>John Smith</td>
                                    <td>john@greenvalley.com</td>
                                    <td>Excellent food and service!</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>02</strong></td>
                                    <td>Tech Solutions Pro</td>
                                    <td>Sarah Wilson</td>
                                    <td>sarah@techsolutions.com</td>
                                    <td>Great technical support</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Fashion Forward</td>
                                    <td>Emily Chen</td>
                                    <td>emily@fashionforward.com</td>
                                    <td>Amazing collection and quality</td>
                                    <td>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="delete-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }

        function switchTab(tab) {
            // Remove active class from all tabs
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab
            event.target.classList.add('active');
            document.getElementById(tab + '-tab').classList.add('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const menuBtn = document.querySelector('.mobile-menu-btn');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(event.target) && 
                !menuBtn.contains(event.target) && 
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>
</html>
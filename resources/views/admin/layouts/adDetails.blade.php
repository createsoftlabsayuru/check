<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/adDetails.css') }}">
</head>
<body>
    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay" onclick="toggleSidebar()"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-3">
            <button class="btn btn-outline-light me-3 d-md-none" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-wave-square me-2"></i>
                LankaBuy
            </a>
            
            <div class="navbar-actions d-flex align-items-center">
                <span class="text-white me-3 d-none d-lg-inline">Colombo, Sri Lanka</span>
                <button class="btn btn-outline-light btn-sm me-2 d-none d-sm-inline">Add business</button>
                <button class="btn btn-outline-light btn-sm me-2 d-none d-sm-inline">Write a review</button>
                <button class="btn btn-outline-light btn-sm me-2">Login</button>
                <button class="btn btn-light btn-sm">Sign Up</button>
            </div>

            <div class="search-container mx-3">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control search-input" placeholder="What are you looking for ?">
            </div>
        </div>
    </nav>

    

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2 class="underline-heading">Ad Details</h2>
            <button class="btn btn-add-product">
                <i class="fas fa-plus me-2"></i>
                Add New Ad Post
            </button>
        </div>

        <div class="ads-container">
            <!-- Desktop Table View -->
            <div class="ads-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ad Post name</th>
                            <th>Views</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="views-badge">86</span></td>
                            <td><span class="status-active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn"><i class="fas fa-trash"></i></button>
                                    <button class="action-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="views-badge">121</span></td>
                            <td><span class="status-active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn"><i class="fas fa-trash"></i></button>
                                    <button class="action-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>3</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="views-badge">39</span></td>
                            <td><span class="status-active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn"><i class="fas fa-trash"></i></button>
                                    <button class="action-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>4</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="views-badge">8</span></td>
                            <td><span class="status-active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn"><i class="fas fa-trash"></i></button>
                                    <button class="action-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>5</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="views-badge">12k</span></td>
                            <td><span class="status-active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn"><i class="fas fa-trash"></i></button>
                                    <button class="action-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="ads-cards">
                <div class="ad-card">
                    <div class="ad-header">
                        <div class="ad-number">1</div>
                        <h3 class="ad-title">Delmler auto</h3>
                    </div>
                    <div class="ad-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image-mobile">
                        <div class="ad-details">
                            <div class="ad-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="ad-stats">
                        <span class="views-badge-mobile">86 Views</span>
                        <span class="status-active-mobile">Active</span>
                    </div>
                    <div class="ad-actions">
                        <button class="mobile-action-btn edit">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="mobile-action-btn delete">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                        <button class="mobile-action-btn copy">
                            <i class="fas fa-copy"></i>
                            Copy
                        </button>
                    </div>
                </div>

                <div class="ad-card">
                    <div class="ad-header">
                        <div class="ad-number">2</div>
                        <h3 class="ad-title">Delmler auto</h3>
                    </div>
                    <div class="ad-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image-mobile">
                        <div class="ad-details">
                            <div class="ad-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="ad-stats">
                        <span class="views-badge-mobile">121 Views</span>
                        <span class="status-active-mobile">Active</span>
                    </div>
                    <div class="ad-actions">
                        <button class="mobile-action-btn edit">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="mobile-action-btn delete">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                        <button class="mobile-action-btn copy">
                            <i class="fas fa-copy"></i>
                            Copy
                        </button>
                    </div>
                </div>

                <div class="ad-card">
                    <div class="ad-header">
                        <div class="ad-number">3</div>
                        <h3 class="ad-title">Delmler auto</h3>
                    </div>
                    <div class="ad-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image-mobile">
                        <div class="ad-details">
                            <div class="ad-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="ad-stats">
                        <span class="views-badge-mobile">39 Views</span>
                        <span class="status-active-mobile">Active</span>
                    </div>
                    <div class="ad-actions">
                        <button class="mobile-action-btn edit">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="mobile-action-btn delete">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                        <button class="mobile-action-btn copy">
                            <i class="fas fa-copy"></i>
                            Copy
                        </button>
                    </div>
                </div>

                <div class="ad-card">
                    <div class="ad-header">
                        <div class="ad-number">4</div>
                        <h3 class="ad-title">Delmler auto</h3>
                    </div>
                    <div class="ad-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="ad-image-mobile">
                        <div class="ad-details">
                            <div class="ad-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="ad-stats">
                        <span class="views-badge-mobile">8 Views</span>
                        <span class="status-active-mobile">Active</span>
                    </div>
                    <div class="ad-actions">
                        <button class="mobile-action-btn edit">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="mobile-action-btn delete">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                        <button class="mobile-action-btn copy">
                            <i class="fas fa-copy"></i>
                            Copy
                        </button>
                    </div>
                </div>

                <div class="ad-card">
                    <div class="ad-header">
                        <div class="ad-number">5</div>
                        <h3 class="ad-title">Delmler auto</h3>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </body>
                </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/allProduct.css') }}">
</head>
<body>
    <div class="container-wrapper">
        <!-- Main Content -->
        <div class="main-content">
            <div class="content-header">
                <h2 class="underline-heading">All Products</h2>
                <button class="btn btn-add-product">
                    <i class="fas fa-plus me-2"></i>
                    Add New Product
                </button>
            </div>

            <!-- Desktop Table View -->
            <div class="products-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
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
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="House Cleaning" class="product-image me-3">
                                    <div>
                                        <strong>House Cleaning Service</strong>
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
                                    <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Add New Product" class="product-image me-3">
                                    <div>
                                        <strong>Add New Product</strong>
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
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Cotton & Accesories" class="product-image me-3">
                                    <div>
                                        <strong>Cotton & Accesories</strong>
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
                                    <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="product-image me-3">
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
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="product-image me-3">
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
                        <tr>
                            <td><strong>6</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Add New Product" class="product-image me-3">
                                    <div>
                                        <strong>Add New Product</strong>
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
                            <td><strong>7</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="House Cleaning Service" class="product-image me-3">
                                    <div>
                                        <strong>House Cleaning Service</strong>
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
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="product-cards">
                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">1</div>
                        <div class="product-name">House Cleaning Service</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="House Cleaning" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">86 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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

                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">2</div>
                        <div class="product-name">Add New Product</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Add New Product" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">121 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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

                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">3</div>
                        <div class="product-name">Cotton & Accessories</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Cotton & Accessories" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">39 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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

                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">4</div>
                        <div class="product-name">Delmler Auto</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">8 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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

                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">5</div>
                        <div class="product-name">Delmler Auto</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Delmler auto" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">12k Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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

                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">6</div>
                        <div class="product-name">Add New Product</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Add New Product" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">121 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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


                <div class="product-card">
                    <div class="product-header">
                        <div class="product-number">6</div>
                        <div class="product-name">Add New Product</div>
                    </div>
                    <div class="product-info">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Add New Product" class="product-image me-3">
                        <div class="product-details">
                            <div class="product-date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="product-stats">
                        <span class="views-badge">121 Views</span>
                        <span class="status-active">Active</span>
                    </div>
                    <div class="product-actions">
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
            </div>
        </div>
    </div>
</body>
</html>


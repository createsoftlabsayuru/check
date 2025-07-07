<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/listingDetails.css') }}">
</head>
<body>

    <!-- Main Content -->
    <div class="main-content">
      <h2 class="underline-heading">Listing Details</h2>
            <div class="d-flex gap-2 align-items-center">
                <select class="category-dropdown">
                    <option>Category</option>
                    <option>Electronics</option>
                    <option>Automotive</option>
                    <option>Services</option>
                    <option>Real Estate</option>
                </select>
                <button class="btn btn-add-product">
                    Add New Listing
                </button>
            </div>


        <!-- Desktop Table View -->
        <div class="listings-table">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Listing name</th>
                        <th>Rating</th>
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
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="rating-badge">0</span></td>
                        <td><span class="views-badge">0</span></td>
                        <td><span class="status-active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-share"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>2</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="rating-badge">0</span></td>
                        <td><span class="views-badge">0</span></td>
                        <td><span class="status-active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-share"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>3</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="rating-badge">0</span></td>
                        <td><span class="views-badge">0</span></td>
                        <td><span class="status-active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-share"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>4</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="rating-badge">0</span></td>
                        <td><span class="views-badge">0</span></td>
                        <td><span class="status-active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-share"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>5</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="rating-badge">0</span></td>
                        <td><span class="views-badge">0</span></td>
                        <td><span class="status-active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-share"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="listing-cards">
            <div class="listing-card">
                <div class="listing-header">
                    <div class="listing-number">1</div>
                    <div class="listing-name">Delmler auto</div>
                </div>
                <div class="listing-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                    <div class="listing-details">
                        <div class="listing-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="listing-stats">
                    <div class="stats-group">
                        <span class="rating-badge">0 Rating</span>
                        <span class="views-badge">0 Views</span>
                    </div>
                    <span class="status-active">Active</span>
                </div>
                <div class="listing-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn">
                        <i class="fas fa-eye"></i>
                        View
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-share"></i>
                        Share
                    </button>
                </div>
            </div>

            <div class="listing-card">
                <div class="listing-header">
                    <div class="listing-number">2</div>
                    <div class="listing-name">Delmler auto</div>
                </div>
                <div class="listing-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                    <div class="listing-details">
                        <div class="listing-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="listing-stats">
                    <div class="stats-group">
                        <span class="rating-badge">0 Rating</span>
                        <span class="views-badge">0 Views</span>
                    </div>
                    <span class="status-active">Active</span>
                </div>
                <div class="listing-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn">
                        <i class="fas fa-eye"></i>
                        View
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-share"></i>
                        Share
                    </button>
                </div>
            </div>

            <div class="listing-card">
                <div class="listing-header">
                    <div class="listing-number">3</div>
                    <div class="listing-name">Delmler auto</div>
                </div>
                <div class="listing-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                    <div class="listing-details">
                        <div class="listing-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="listing-stats">
                    <div class="stats-group">
                        <span class="rating-badge">0 Rating</span>
                        <span class="views-badge">0 Views</span>
                    </div>
                    <span class="status-active">Active</span>
                </div>
                <div class="listing-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn">
                        <i class="fas fa-eye"></i>
                        View
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-share"></i>
                        Share
                    </button>
                </div>
            </div>

            <div class="listing-card">
                <div class="listing-header">
                    <div class="listing-number">4</div>
                    <div class="listing-name">Delmler auto</div>
                </div>
                <div class="listing-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="listing-image me-3">
                    <div class="listing-details">
                        <div class="listing-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="listing-stats">
                    <div class="stats-group">
                        <span class="rating-badge">0 Rating</span>
                        <span class="views-badge">0 Views</span>
                    </div>
                    <span class="status-active">Active</span>
                </div>
                <div class="listing-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn">
                        <i class="fas fa-eye"></i>
                        View
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-share"></i>
                        Share
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
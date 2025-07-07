<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard - Promotions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/Promotion.css') }}">
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2 class="underline-heading">Promotions</h2>
            <button class="btn btn-start-promotion">
                Start new Promotions
            </button>
        </div>

        <!-- Desktop Table View -->
        <div class="promotions-table">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Listing name</th>
                        <th>End Date</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td>21 Jun 2025</td>
                        <td>7 Days</td>
                        <td><span class="status-expired">Expired</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-activate">Activate</button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>2</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td>21 Jun 2025</td>
                        <td>7 Days</td>
                        <td><span class="status-expired">Expired</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-activate">Activate</button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>3</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td>21 Jun 2025</td>
                        <td>7 Days</td>
                        <td><span class="status-expired">Expired</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-activate">Activate</button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>4</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td>21 Jun 2025</td>
                        <td>7 Days</td>
                        <td><span class="status-expired">Expired</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-activate">Activate</button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>5</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                                <div>
                                    <strong>Delmler auto</strong>
                                    <br><small class="text-muted">21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td>21 Jun 2025</td>
                        <td>7 Days</td>
                        <td><span class="status-expired">Expired</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-activate">Activate</button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="promotion-cards">
            <div class="promotion-card">
                <div class="promotion-header">
                    <div class="promotion-number">1</div>
                    <div class="promotion-name">Delmler auto</div>
                </div>
                <div class="promotion-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                    <div class="promotion-details">
                        <div class="promotion-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="promotion-stats">
                    <div class="stat-item">
                        <span class="stat-label">End Date</span>
                        <span class="stat-value">21 Jun 2025</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">7 Days</span>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <span class="status-expired">Expired</span>
                </div>
                <div class="promotion-actions">
                    <button class="mobile-action-btn activate">
                        <i class="fas fa-play"></i>
                        Activate
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-header">
                    <div class="promotion-number">2</div>
                    <div class="promotion-name">Delmler auto</div>
                </div>
                <div class="promotion-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                    <div class="promotion-details">
                        <div class="promotion-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="promotion-stats">
                    <div class="stat-item">
                        <span class="stat-label">End Date</span>
                        <span class="stat-value">21 Jun 2025</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">7 Days</span>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <span class="status-expired">Expired</span>
                </div>
                <div class="promotion-actions">
                    <button class="mobile-action-btn activate">
                        <i class="fas fa-play"></i>
                        Activate
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-header">
                    <div class="promotion-number">3</div>
                    <div class="promotion-name">Delmler auto</div>
                </div>
                <div class="promotion-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                    <div class="promotion-details">
                        <div class="promotion-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="promotion-stats">
                    <div class="stat-item">
                        <span class="stat-label">End Date</span>
                        <span class="stat-value">21 Jun 2025</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">7 Days</span>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <span class="status-expired">Expired</span>
                </div>
                <div class="promotion-actions">
                    <button class="mobile-action-btn activate">
                        <i class="fas fa-play"></i>
                        Activate
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-header">
                    <div class="promotion-number">4</div>
                    <div class="promotion-name">Delmler auto</div>
                </div>
                <div class="promotion-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                    <div class="promotion-details">
                        <div class="promotion-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="promotion-stats">
                    <div class="stat-item">
                        <span class="stat-label">End Date</span>
                        <span class="stat-value">21 Jun 2025</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">7 Days</span>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <span class="status-expired">Expired</span>
                </div>
                <div class="promotion-actions">
                    <button class="mobile-action-btn activate">
                        <i class="fas fa-play"></i>
                        Activate
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

                        <div class="promotion-card">
                <div class="promotion-header">
                    <div class="promotion-number">4</div>
                    <div class="promotion-name">Delmler auto</div>
                </div>
                <div class="promotion-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="promotion-image me-3">
                    <div class="promotion-details">
                        <div class="promotion-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="promotion-stats">
                    <div class="stat-item">
                        <span class="stat-label">End Date</span>
                        <span class="stat-value">21 Jun 2025</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">7 Days</span>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <span class="status-expired">Expired</span>
                </div>
                <div class="promotion-actions">
                    <button class="mobile-action-btn activate">
                        <i class="fas fa-play"></i>
                        Activate
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
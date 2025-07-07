<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #4f46e5;
            --dark-blue: #3730a3;
            --light-purple: #e0e7ff;
            --yellow-accent: #ffd60a;
            --gray-bg: #f8fafc;
        }

        body {
            background-color: var(--gray-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
        }

        /* Main container to center all content */
        .page-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 0.5rem 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .search-container {
            position: relative;
            max-width: 400px;
        }

        .search-input {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding-left: 3rem;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }


        .menu-item {
            display: block;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            margin: 0.2rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
        }

        .menu-item.active {
            background: var(--yellow-accent);
            color: #333;
            font-weight: 600;
        }

        .menu-item i {
            width: 20px;
            margin-right: 0.5rem;
        }

        .main-content {
            margin-left: 0;
            padding: 2rem;
            transition: margin-left 0.3s ease;
            width: 100%;
        }

        .content-header {
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .btn-add-product {
            background: var(--yellow-accent);
            color: #333;
            border: none;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
        }

        .btn-add-product:hover {
            background: #ffed4e;
            color: #333;
        }

        .ads-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        /* Desktop Table View */
        .ads-table {
            display: block;
        }

        .table thead {
            border: 8px solid var(--primary-blue);
        }

        .table thead th {
            background: var(--light-purple);
            border: none;
            color: #4c1d95;
            font-weight: 600;
            padding: 1rem;
        }

        .table tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }

        .table tbody tr:nth-child(even) {
            background: var(--light-purple);
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
        }

        .ad-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .views-badge {
            background: var(--primary-blue);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status-active {
            background: var(--yellow-accent);
            color: #333;
            padding: 0.25rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            background: none;
            border: none;
            color: #6b7280;
            font-size: 1.1rem;
            padding: 0.25rem;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background: #f3f4f6;
            color: var(--primary-blue);
        }

        /* Mobile Card View */
        .ads-cards {
            display: none;
            padding: 1rem;
        }

        .ad-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            padding: 1.5rem;
            border-left: 4px solid var(--primary-blue);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .ad-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .ad-card:nth-child(even) {
            background: var(--light-purple);
        }

        .ad-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .ad-number {
            background: var(--primary-blue);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1rem;
            margin-right: 1rem;
        }

        .ad-title {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
            margin: 0;
        }

        .ad-content {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .ad-image-mobile {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 1rem;
        }

        .ad-details {
            flex: 1;
        }

        .ad-date {
            color: #6b7280;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .ad-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .views-badge-mobile {
            background: var(--primary-blue);
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status-active-mobile {
            background: var(--yellow-accent);
            color: #333;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .ad-actions {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .mobile-action-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex: 1;
            justify-content: center;
            max-width: 100px;
        }

        .mobile-action-btn:hover {
            background: var(--dark-blue);
            color: white;
            transform: translateY(-1px);
        }

        .mobile-action-btn.edit {
            background: #10b981;
        }

        .mobile-action-btn.edit:hover {
            background: #059669;
        }

        .mobile-action-btn.delete {
            background: #ef4444;
        }

        .mobile-action-btn.delete:hover {
            background: #dc2626;
        }

        .mobile-action-btn.copy {
            background: #8b5cf6;
        }

        .mobile-action-btn.copy:hover {
            background: #7c3aed;
        }

        .underline-heading {
            border-bottom: 3px solid var(--primary-blue);
            padding-bottom: 0.5rem;
            margin-bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .navbar-custom .navbar-nav {
                display: none !important;
            }
            
            .search-container {
                max-width: 250px;
            }

            .navbar-actions {
                gap: 0.5rem;
            }

            .navbar-actions .btn {
                font-size: 0.85rem;
                padding: 0.4rem 0.8rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
                padding: 1rem;
            }

            .content-header {
                flex-direction: column;
                align-items: stretch;
                text-align: center;
            }

            .content-header h2 {
                margin-bottom: 1rem;
            }

            .btn-add-product {
                width: 100%;
            }

            /* Hide table on mobile */
            .ads-table {
                display: none;
            }

            /* Show cards on mobile */
            .ads-cards {
                display: block;
            }

            .ads-container {
                box-shadow: none;
                background: transparent;
            }

            /* Mobile navbar adjustments */
            .search-container {
                order: 3;
                width: 100%;
                margin-top: 1rem;
                max-width: none;
            }

            .navbar-custom .container-fluid {
                flex-wrap: wrap;
            }

            .navbar-actions {
                order: 2;
                display: flex;
                gap: 0.25rem;
            }

            .navbar-actions .btn {
                font-size: 0.75rem;
                padding: 0.3rem 0.6rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 0.5rem;
            }

            .ad-content {
                flex-direction: column;
                text-align: center;
            }

            .ad-image-mobile {
                margin-right: 0;
                margin-bottom: 1rem;
            }

            .ad-actions {
                flex-direction: column;
                gap: 0.75rem;
            }

            .mobile-action-btn {
                max-width: none;
                width: 100%;
            }

            .ad-stats {
                justify-content: center;
                text-align: center;
            }

            .ad-header {
                justify-content: center;
                text-align: center;
            }

            .navbar-actions .btn:not(.mobile-menu-btn) {
                display: none;
            }

            .navbar-actions {
                justify-content: flex-end;
            }
        }

        /* Overlay for mobile sidebar */
        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        .mobile-overlay.show {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay" onclick="toggleSidebar()"></div>

    <!-- Page Container for Centering -->
    <div class="page-container">
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
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image me-3">
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
                                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image me-3">
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
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image me-3">
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
                                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image me-3">
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
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image me-3">
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
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image-mobile">
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
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image-mobile">
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
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image-mobile">
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
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image-mobile">
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
                        <div class="ad-content">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="ad-image-mobile">
                            <div class="ad-details">
                                <div class="ad-date">21 Jun 2025</div>
                            </div>
                        </div>
                        <div class="ad-stats">
                            <span class="views-badge-mobile">12k Views</span>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>
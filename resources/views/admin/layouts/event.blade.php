<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Events Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/event.css') }}">
</head>
<body>
    <div class="page-container">
        <!-- Main Content -->
        <div class="main-content">
            <div class="content-header">
                <h2 class="underline-heading">Events</h2>
                <button class="btn btn-add-event">
                    <i class="fas fa-plus me-2"></i>
                    Add New Event
                </button>
            </div>

            <!-- Desktop Table View -->
            <div class="events-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Event Name</th>
                            <th>Event date</th>
                            <th>Views</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="House Cleaning" class="event-image me-3">
                                    <div>
                                        <strong>House Cleaning Service</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="event-image me-3">
                                    <div>
                                        <strong>Add New Product</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="event-image me-3">
                                    <div>
                                        <strong>Cotton & Accessories</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="event-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="event-image me-3">
                                    <div>
                                        <strong>Delmler auto</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">12k</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Add New Product" class="event-image me-3">
                                    <div>
                                        <strong>Add New Product</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="House Cleaning Service" class="event-image me-3">
                                    <div>
                                        <strong>House Cleaning Service</strong>
                                        <br><small class="text-muted">21 Jun 2025</small>
                                    </div>
                                </div>
                            </td>
                            <td>19 Jun 2025</td>
                            <td><span class="views-badge">86</span></td>
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
            <div class="event-cards">
                <div class="event-card">
                    <div class="event-header">
                        <div class="event-number">1</div>
                        <div class="event-name">House Cleaning Service</div>
                    </div>
                    <div class="event-info">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="House Cleaning" class="event-image me-3">
                        <div class="event-details">
                            <div class="event-date">Event Date: 19 Jun 2025</div>
                            <small class="text-muted">Created: 21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="event-stats">
                        <span class="views-badge">86 Views</span>
                    </div>
                    <div class="event-actions">
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

                <div class="event-card">
                    <div class="event-header">
                        <div class="event-number">2</div>
                        <div class="event-name">Add New Product</div>
                    </div>
                    <div class="event-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="event-image me-3">
                        <div class="event-details">
                            <div class="event-date">Event Date: 19 Jun 2025</div>
                            <small class="text-muted">Created: 21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="event-stats">
                        <span class="views-badge">86 Views</span>
                    </div>
                    <div class="event-actions">
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

                <div class="event-card">
                    <div class="event-header">
                        <div class="event-number">3</div>
                        <div class="event-name">Cotton & Accessories</div>
                    </div>
                    <div class="event-info">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="event-image me-3">
                        <div class="event-details">
                            <div class="event-date">Event Date: 19 Jun 2025</div>
                            <small class="text-muted">Created: 21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="event-stats">
                        <span class="views-badge">86 Views</span>
                    </div>
                    <div class="event-actions">
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

                <div class="event-card">
                    <div class="event-header">
                        <div class="event-number">4</div>
                        <div class="event-name">Delmler Auto</div>
                    </div>
                    <div class="event-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="event-image me-3">
                        <div class="event-details">
                            <div class="event-date">Event Date: 19 Jun 2025</div>
                            <small class="text-muted">Created: 21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="event-stats">
                        <span class="views-badge">86 Views</span>
                    </div>
                    <div class="event-actions">
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

                <div class="event-card">
                    <div class="event-header">
                        <div class="event-number">5</div>
                        <div class="event-name">Delmler Auto</div>
                    </div>
                    <div class="event-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="event-image me-3">
                        <div class="event-details">
                            <div class="event-date">Event Date: 19 Jun 2025</div>
                            <small class="text-muted">Created: 21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="event-stats">
                        <span class="views-badge">12k Views</span>
                    </div>
                    <div class="event-actions">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/myServiceBookings.css') }}">
</head>
<body>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h1 class="content-title">My Service Bookings</h1>
            <div class="search-bar-container">
                <i class="fas fa-search search-bar-icon"></i>
                <input type="search" class="search-bar" placeholder="Search">
            </div>
        </div>

        <!-- Desktop Table View -->
        <div class="bookings-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Expert Profile</th>
                        <th>Enquirer Name</th>
                        <th>Details</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="booking-number">1</div>
                        </td>
                        <td>
                            <div class="expert-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                                <div class="expert-details">
                                    <h6>Delmler auto</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><strong>Nimantha</strong></td>
                        <td>
                            <div class="contact-info">
                                <div><strong>Phone:</strong> +94771113782</div>
                                <div><strong>Email Id:</strong> nimantha123@gmail.com</div>
                                <div><strong>Location:</strong> Colombo</div>
                                <div><strong>Date:</strong> 21 Jun 2025</div>
                                <div><strong>Time:</strong> 11:00 Am</div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-message">Message</button>
                        </td>
                        <td>
                            <span class="status-badge status-new">New</span>
                            <button class="btn btn-manage">Manage</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="booking-number">2</div>
                        </td>
                        <td>
                            <div class="expert-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                                <div class="expert-details">
                                    <h6>Delmler auto</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><strong>Nimantha</strong></td>
                        <td>
                            <div class="contact-info">
                                <div><strong>Phone:</strong> +94771113782</div>
                                <div><strong>Email Id:</strong> nimantha123@gmail.com</div>
                                <div><strong>Location:</strong> Colombo</div>
                                <div><strong>Date:</strong> 21 Jun 2025</div>
                                <div><strong>Time:</strong> 11:00 Am</div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-message">Message</button>
                        </td>
                        <td>
                            <span class="status-badge status-new">New</span>
                            <button class="btn btn-manage">Manage</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="booking-number">3</div>
                        </td>
                        <td>
                            <div class="expert-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                                <div class="expert-details">
                                    <h6>Delmler auto</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><strong>Nimantha</strong></td>
                        <td>
                            <div class="contact-info">
                                <div><strong>Phone:</strong> +94771113782</div>
                                <div><strong>Email Id:</strong> nimantha123@gmail.com</div>
                                <div><strong>Location:</strong> Colombo</div>
                                <div><strong>Date:</strong> 21 Jun 2025</div>
                                <div><strong>Time:</strong> 11:00 Am</div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-message">Message</button>
                        </td>
                        <td>
                            <span class="status-badge status-new">New</span>
                            <button class="btn btn-manage">Manage</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="booking-cards">
            <div class="booking-card">
                <div class="card-header">
                    <div class="booking-number">1</div>
                    <span class="status-badge status-new">New</span>
                </div>
                <div class="card-body">
                    <div class="expert-info mb-3">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                        <div class="expert-details">
                            <h6>Delmler auto</h6>
                            <small>21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="mb-2"><strong>Enquirer:</strong> Nimantha</div>
                    <div class="contact-info">
                        <div><strong>Phone:</strong> +94771113782</div>
                        <div><strong>Email:</strong> nimantha123@gmail.com</div>
                        <div><strong>Location:</strong> Colombo</div>
                        <div><strong>Date:</strong> 21 Jun 2025</div>
                        <div><strong>Time:</strong> 11:00 Am</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-message">Message</button>
                    <button class="btn btn-manage">Manage</button>
                    <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                </div>
            </div>

            <div class="booking-card">
                <div class="card-header">
                    <div class="booking-number">2</div>
                    <span class="status-badge status-new">New</span>
                </div>
                <div class="card-body">
                    <div class="expert-info mb-3">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                        <div class="expert-details">
                            <h6>Delmler auto</h6>
                            <small>21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="mb-2"><strong>Enquirer:</strong> Nimantha</div>
                    <div class="contact-info">
                        <div><strong>Phone:</strong> +94771113782</div>
                        <div><strong>Email:</strong> nimantha123@gmail.com</div>
                        <div><strong>Location:</strong> Colombo</div>
                        <div><strong>Date:</strong> 21 Jun 2025</div>
                        <div><strong>Time:</strong> 11:00 Am</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-message">Message</button>
                    <button class="btn btn-manage">Manage</button>
                    <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                </div>
            </div>

            <div class="booking-card">
                <div class="card-header">
                    <div class="booking-number">3</div>
                    <span class="status-badge status-new">New</span>
                </div>
                <div class="card-body">
                    <div class="expert-info mb-3">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="expert-avatar">
                        <div class="expert-details">
                            <h6>Delmler auto</h6>
                            <small>21 Jun 2025</small>
                        </div>
                    </div>
                    <div class="mb-2"><strong>Enquirer:</strong> Nimantha</div>
                    <div class="contact-info">
                        <div><strong>Phone:</strong> +94771113782</div>
                        <div><strong>Email:</strong> nimantha123@gmail.com</div>
                        <div><strong>Location:</strong> Colombo</div>
                        <div><strong>Date:</strong> 21 Jun 2025</div>
                        <div><strong>Time:</strong> 11:00 Am</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-message">Message</button>
                    <button class="btn btn-manage">Manage</button>
                    <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
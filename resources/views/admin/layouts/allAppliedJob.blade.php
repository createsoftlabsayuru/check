<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Jobs Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/allAppliedJob.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Main Content -->
        <div class="main-content">
            <div class="content-header">
                <h2 class="underline-heading">All Applied Jobs</h2>
            </div>

            <!-- Desktop Table View -->
            <div class="jobs-table-container">
                <table class="jobs-table table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Job Title</th>
                            <th>Applied Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-image me-3">
                                    <div>
                                        <div class="job-title">Deimler auto</div>
                                        <div class="job-date">21 Jun 2025</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>21 Mar 2025, 9:44 pm</strong>
                            </td>
                            <td>
                                <button class="action-btn">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2</strong></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-image me-3">
                                    <div>
                                        <div class="job-title">Deimler auto</div>
                                        <div class="job-date">21 Jun 2025</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>21 Mar 2025, 9:44 pm</strong>
                            </td>
                            <td>
                                <button class="action-btn">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>3</strong></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-image me-3">
                                    <div>
                                        <div class="job-title">Deimler auto</div>
                                        <div class="job-date">21 Jun 2025</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>21 Mar 2025, 9:44 pm</strong>
                            </td>
                            <td>
                                <button class="action-btn">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>4</strong></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-image me-3">
                                    <div>
                                        <div class="job-title">Deimler auto</div>
                                        <div class="job-date">21 Jun 2025</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>21 Mar 2025, 9:44 pm</strong>
                            </td>
                            <td>
                                <button class="action-btn">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>5</strong></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-image me-3">
                                    <div>
                                        <div class="job-title">Deimler auto</div>
                                        <div class="job-date">21 Jun 2025</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>21 Mar 2025, 9:44 pm</strong>
                            </td>
                            <td>
                                <button class="action-btn">
                                    <i class="fas fa-eye me-1"></i>
                                    View
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="job-cards">
                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-number">1</div>
                        <div class="job-card-title">Deimler auto</div>
                    </div>
                    <div class="job-card-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-card-image">
                        <div class="job-card-details">
                            <div class="job-card-date">Posted: 21 Jun 2025</div>
                            <div class="job-card-applied-date">Applied: 21 Mar 2025, 9:44 pm</div>
                        </div>
                    </div>
                    <div class="job-card-actions">
                        <button class="mobile-action-btn">
                            <i class="fas fa-eye"></i>
                            View Details
                        </button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-number">2</div>
                        <div class="job-card-title">Deimler auto</div>
                    </div>
                    <div class="job-card-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-card-image">
                        <div class="job-card-details">
                            <div class="job-card-date">Posted: 21 Jun 2025</div>
                            <div class="job-card-applied-date">Applied: 21 Mar 2025, 9:44 pm</div>
                        </div>
                    </div>
                    <div class="job-card-actions">
                        <button class="mobile-action-btn">
                            <i class="fas fa-eye"></i>
                            View Details
                        </button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-number">3</div>
                        <div class="job-card-title">Deimler auto</div>
                    </div>
                    <div class="job-card-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-card-image">
                        <div class="job-card-details">
                            <div class="job-card-date">Posted: 21 Jun 2025</div>
                            <div class="job-card-applied-date">Applied: 21 Mar 2025, 9:44 pm</div>
                        </div>
                    </div>
                    <div class="job-card-actions">
                        <button class="mobile-action-btn">
                            <i class="fas fa-eye"></i>
                            View Details
                        </button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-number">4</div>
                        <div class="job-card-title">Deimler auto</div>
                    </div>
                    <div class="job-card-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-card-image">
                        <div class="job-card-details">
                            <div class="job-card-date">Posted: 21 Jun 2025</div>
                            <div class="job-card-applied-date">Applied: 21 Mar 2025, 9:44 pm</div>
                        </div>
                    </div>
                    <div class="job-card-actions">
                        <button class="mobile-action-btn">
                            <i class="fas fa-eye"></i>
                            View Details
                        </button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-number">5</div>
                        <div class="job-card-title">Deimler auto</div>
                    </div>
                    <div class="job-card-content">
                        <img src="{{asset('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop') }}" alt="Deimler auto" class="job-card-image">
                        <div class="job-card-details">
                            <div class="job-card-date">Posted: 21 Jun 2025</div>
                            <div class="job-card-applied-date">Applied: 21 Mar 2025, 9:44 pm</div>
                        </div>
                    </div>
                    <div class="job-card-actions">
                        <button class="mobile-action-btn">
                            <i class="fas fa-eye"></i>
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
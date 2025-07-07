<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/listingInDetails.css') }}">
</head>
<body>
    <div class="container-wrapper">
        <div class="main-content">
            <div class="content-header">
                <h2 style="color: #1f2937; font-weight: 600;">Listing Details</h2>
            </div>

            <div class="listing-details-card">
                <!-- Listing Header -->
                <div class="listing-header">
                    <div class="company-logo">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="company-info">
                        <h2>Officer Assistant</h2>
                        <div class="company-category">
                            <i class="fas fa-laptop"></i>
                            <span>IT and Tech</span>
                        </div>
                    </div>
                </div>

                <!-- Listing Content -->
                <div class="listing-content">
                    <!-- Company Description -->
                    <div class="section">
                        <h3>Company Description</h3>
                        <p class="description-text">
                            Company profile settings — Untitled UI designed by Jordan Hughes®. Connect with them on Dribbble; 
                            the global community for designers and creative professionals. A job description outlines the 
                            responsibilities, skills, and qualifications required for a specific role. It serves as a crucial tool for both 
                            hiring and clarifying expectations for the position. A well-crafted job description helps attract qualified 
                            candidates and ensures a clear understanding of the role's purpose within the organization.
                        </p>
                    </div>

                    <!-- Offered -->
                    <div class="section">
                        <h3>Offered</h3>
                        <div class="offered-images">
                            <div class="offered-image">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="offered-image">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="offered-image">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="offered-image">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="offered-image">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Service Areas -->
                    <div class="section">
                        <h3>Service Areas</h3>
                        <div class="service-areas">
                            <span class="service-tag">Alexander city</span>
                            <span class="service-tag">Selma</span>
                            <span class="service-tag">Montgomery</span>
                            <span class="service-tag">Decatur</span>
                            <span class="service-tag">Avondale</span>
                        </div>
                    </div>

                    <!-- Company Offers -->
                    <div class="section">
                        <h3>Company Offers</h3>
                        <div class="company-offers">
                            <div class="offer-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="offer-content">
                                <h4>50% Offers Only Today</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Company Video -->
                    <div class="section">
                        <h3>Company Video</h3>
                        <p><strong>Link:</strong> <a href="#" class="video-link">http://www.company.com.al/g/o/c.html</a></p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons-footer">
                    <button class="btn-reject">Reject</button>
                    <button class="btn-approve">Approve</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
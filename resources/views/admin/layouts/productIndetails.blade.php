<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/productIndetails.css') }}">
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="content-container">
            <div class="content-header">
                <h2 style="color: #1f2937; font-weight: 600;">Product Approval - Admin Panel</h2>
            </div>

            <div class="product-details-card">
                <!-- Admin Status Badge -->
                <div class="admin-status-badge status-pending" id="statusBadge">
                    <i class="fas fa-clock me-1"></i>
                    Pending Review
                </div>
                <!-- Product Header -->
                <div class="product-header">
                    <div class="product-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="product-info">
                        <h2>iPhone 14 Pro Max</h2>
                        <div class="product-category">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Smartphones</span>
                        </div>
                        <div class="product-price">LKR 425,000</div>
                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>(Expected rating based on similar products)</span>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="product-content">
                    <!-- Admin Information -->
                    <div class="section">
                        <h3>Submission Information</h3>
                        <div class="admin-info-grid">
                            <div class="admin-info-item">
                                <div class="admin-info-label">Submitted By</div>
                                <div class="admin-info-value">TechWorld Lanka</div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Submission Date</div>
                                <div class="admin-info-value">June 24, 2025 - 2:30 PM</div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Product ID</div>
                                <div class="admin-info-value">#PRD-2025-0847</div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Category</div>
                                <div class="admin-info-value">Electronics > Smartphones</div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Seller Status</div>
                                <div class="admin-info-value">Verified Merchant</div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Priority</div>
                                <div class="admin-info-value">High Value Product</div>
                            </div>
                        </div>
                    </div>

                    <!-- Availability Status -->
                    <div class="availability-status status-in-stock">
                        <i class="fas fa-check-circle"></i>
                        <span>In Stock - 15 units available</span>
                    </div>

                    <!-- Product Description -->
                    <div class="section">
                        <h3>Product Description</h3>
                        <p class="description-text">
                            The iPhone 14 Pro Max pushes the boundaries of what's possible in a smartphone. With the revolutionary 
                            A16 Bionic chip, Pro camera system, and stunning Super Retina XDR display, this device delivers 
                            unparalleled performance and photography capabilities. The 6.7-inch screen provides an immersive 
                            viewing experience, while the advanced camera system captures professional-quality photos and videos. 
                            Built with premium materials and featuring all-day battery life, the iPhone 14 Pro Max is designed 
                            for those who demand the very best in mobile technology.
                        </p>
                    </div>

                    <!-- Product Gallery -->
                    <div class="section">
                        <h3>Product Images</h3>
                        <div class="product-gallery">
                            <div class="gallery-image">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="gallery-image">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="gallery-image">
                                <i class="fas fa-battery-full"></i>
                            </div>
                            <div class="gallery-image">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="gallery-image">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <div class="gallery-image">
                                <i class="fas fa-video"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Specifications -->
                    <div class="section">
                        <h3>Specifications</h3>
                        <div class="specifications-grid">
                            <div class="spec-item">
                                <div class="spec-label">Display</div>
                                <div class="spec-value">6.7" Super Retina XDR</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Processor</div>
                                <div class="spec-value">A16 Bionic chip</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Storage</div>
                                <div class="spec-value">256GB</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Camera</div>
                                <div class="spec-value">48MP Pro camera system</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Battery</div>
                                <div class="spec-value">Up to 29 hours video</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Connectivity</div>
                                <div class="spec-value">5G, Wi-Fi 6E, Bluetooth 5.3</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Color</div>
                                <div class="spec-value">Deep Purple</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Weight</div>
                                <div class="spec-value">240g</div>
                            </div>
                        </div>
                    </div>

                    <!-- Warranty Information -->
                    <div class="section">
                        <h3>Warranty & Support</h3>
                        <div class="warranty-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>1 Year International Warranty</span>
                        </div>
                        <p class="description-text mt-2">
                            Comprehensive warranty coverage including hardware repairs and technical support. 
                            Extended warranty options available at checkout.
                        </p>
                    </div>

                    <!-- Shipping Information -->
                    <div class="section">
                        <h3>Shipping & Delivery</h3>
                        <div class="shipping-info">
                            <div class="shipping-option">
                                <span><i class="fas fa-truck me-2"></i>Standard Delivery (3-5 days)</span>
                                <strong>LKR 500</strong>
                            </div>
                            <div class="shipping-option">
                                <span><i class="fas fa-shipping-fast me-2"></i>Express Delivery (1-2 days)</span>
                                <strong>LKR 1,200</strong>
                            </div>
                            <div class="shipping-option">
                                <span><i class="fas fa-store me-2"></i>Store Pickup</span>
                                <strong>Free</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Seller Information -->
                    <div class="section">
                        <h3>Seller Verification</h3>
                        <div class="seller-info">
                            <div class="seller-avatar">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="seller-details">
                                <h4>TechWorld Lanka</h4>
                                <p>Authorized Apple Reseller • Colombo</p>
                                <div class="seller-rating">
                                    <div class="rating-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>(4.9) • 1,247 reviews • Verified Merchant</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admin Review Section -->
                    <div class="section">
                        <h3>Admin Review</h3>
                        <div class="admin-notes">
                            <label for="adminNotes" style="font-weight: 600; color: #374151; margin-bottom: 0.5rem; display: block;">
                                Review Notes (Optional)
                            </label>
                            <textarea 
                                id="adminNotes" 
                                rows="4" 
                                placeholder="Add any notes about this product review, pricing concerns, policy compliance, etc..."
                            ></textarea>
                        </div>
                        
                        <div class="admin-info-grid">
                            <div class="admin-info-item">
                                <div class="admin-info-label">Content Policy</div>
                                <div class="admin-info-value">
                                    <i class="fas fa-check-circle text-success me-2"></i>Compliant
                                </div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Image Quality</div>
                                <div class="admin-info-value">
                                    <i class="fas fa-check-circle text-success me-2"></i>High Quality
                                </div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Price Validation</div>
                                <div class="admin-info-value">
                                    <i class="fas fa-exclamation-triangle text-warning me-2"></i>Needs Review
                                </div>
                            </div>
                            <div class="admin-info-item">
                                <div class="admin-info-label">Information Accuracy</div>
                                <div class="admin-info-value">
                                    <i class="fas fa-check-circle text-success me-2"></i>Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons-footer">
                    <button class="btn-reject" onclick="rejectProduct()">
                        <i class="fas fa-times"></i>
                        Reject
                    </button>
                    <button class="btn-approve" onclick="approveProduct()">
                        <i class="fas fa-check"></i>
                        Approve
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Admin approval functions
        function approveProduct() {
            const statusBadge = document.getElementById('statusBadge');
            const adminNotes = document.getElementById('adminNotes').value;
            
            // Simulate API call
            setTimeout(() => {
                statusBadge.className = 'admin-status-badge status-approved';
                statusBadge.innerHTML = '<i class="fas fa-check-circle me-1"></i>Approved';
                
                // Show success message
                showNotification('Product approved successfully!', 'success');
                
                // Disable action buttons
                document.querySelector('.btn-approve').disabled = true;
                document.querySelector('.btn-reject').disabled = true;
                document.querySelector('.btn-approve').style.opacity = '0.6';
                document.querySelector('.btn-reject').style.opacity = '0.6';
                
                // Log admin action
                console.log('Product approved by admin', {
                    productId: '#PRD-2025-0847',
                    adminNotes: adminNotes,
                    timestamp: new Date().toISOString()
                });
            }, 500);
        }

        function rejectProduct() {
            const statusBadge = document.getElementById('statusBadge');
            const adminNotes = document.getElementById('adminNotes').value;
            
            // Confirm rejection
            if (confirm('Are you sure you want to reject this product? This action cannot be undone.')) {
                // Simulate API call
                setTimeout(() => {
                    statusBadge.className = 'admin-status-badge status-rejected';
                    statusBadge.innerHTML = '<i class="fas fa-times-circle me-1"></i>Rejected';
                    
                    // Show rejection message
                    showNotification('Product rejected.', 'error');
                    
                    // Disable action buttons
                    document.querySelector('.btn-approve').disabled = true;
                    document.querySelector('.btn-reject').disabled = true;
                    document.querySelector('.btn-approve').style.opacity = '0.6';
                    document.querySelector('.btn-reject').style.opacity = '0.6';
                    
                    // Log admin action
                    console.log('Product rejected by admin', {
                        productId: '#PRD-2025-0847',
                        adminNotes: adminNotes,
                        timestamp: new Date().toISOString()
                    });
                }, 500);
            }
        }

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 1rem 1.5rem;
                border-radius: 8px;
                color: white;
                font-weight: 600;
                z-index: 9999;
                transform: translateX(100%);
                transition: transform 0.3s ease;
                ${type === 'success' ? 'background: #10b981;' : 'background: #ef4444;'}
            `;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Gallery image click handlers
        document.querySelectorAll('.gallery-image').forEach(image => {
            image.addEventListener('click', function() {
                // Here you would typically open a modal or lightbox for admin review
                showNotification('Image viewer opened for detailed inspection', 'success');
            });
        });

        // Auto-save admin notes
        let notesTimeout;
        document.getElementById('adminNotes').addEventListener('input', function() {
            clearTimeout(notesTimeout);
            notesTimeout = setTimeout(() => {
                // Simulate auto-save
                console.log('Admin notes auto-saved:', this.value);
            }, 1000);
        });

        // Keyboard shortcuts for admin actions
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey || e.metaKey) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    approveProduct();
                } else if (e.key === 'Backspace') {
                    e.preventDefault();
                    rejectProduct();
                }
            }
        });

// Initialize admin panel
document.addEventListener('DOMContentLoaded', function () {
    console.log('Admin product review panel initialized');

    // Add keyboard shortcut hints
    const shortcuts = document.createElement('div');
    shortcuts.style.cssText = `
        position: fixed;
        bottom: 20px;
        left: 20px;
        background: rgba(0,0,0,0.8);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-size: 0.8rem;
        z-index: 1000;
    `;
});

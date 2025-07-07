<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/blogPost.css') }}">
</head>
<body>
    <div class="page-container">

        <!-- Main Content -->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="content-header">
                    <h2 class="underline-heading">Blog Details</h2>
                    <button class="btn btn-add-post">
                        <i class="fas fa-plus me-2"></i>
                        Add New Post
                    </button>
                </div>

                <!-- Desktop Table View -->
                <div class="blog-table">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Post Name</th>
                                <th>Views</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $index => $post)
                            <tr>
                                <td><strong>{{ $index + 1 }}</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . ($post->image->file_path ?? 'default.jpg')) }}" alt="{{ $post->title }}" class="post-image me-3">
                                        <div>
                                            <strong>{{ $post->title }}</strong>
                                            <br><small class="text-muted">{{ $post->published_at ? $post->published_at->format('d M Y') : '' }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">0</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><a href="{{ route('blog.edit', $post->id) }}" class="action-btn edit"><i class="fas fa-edit"></i></a></button>
                                        <form action="{{ route('blog.delete', $post->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button class="action-btn delete" onclick="return confirm('Delete this post?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td><strong>2</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="post-image me-3">
                                        <div>
                                            <strong>Add New Product</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">121</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>3</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="post-image me-3">
                                        <div>
                                            <strong>Cotton & Accessories</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">39</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>4</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                                        <div>
                                            <strong>Delmler auto</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">8</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>5</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                                        <div>
                                            <strong>Delmler auto</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">12k</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>6</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Add New Product" class="post-image me-3">
                                        <div>
                                            <strong>Add New Product</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">121</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>7</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="House Cleaning Service" class="post-image me-3">
                                        <div>
                                            <strong>House Cleaning Service</strong>
                                            <br><small class="text-muted">21 Jun 2025</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="views-badge">86</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn copy"><i class="fas fa-copy"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="blog-cards">
                    @foreach($posts as $index => $post)
                    <div class="blog-card">
                        <div class="blog-header">
                            <div class="blog-number">{{ $index + 1 }}</div>
                            <h3 class="blog-title">{{ $post->title }}</h3>
                        </div>
                        <div class="blog-content">
                            <img src="{{ asset('storage/' . ($post->image->file_path ?? 'default.jpg')) }}" alt="{{ $post->title }}" class="post-image me-3">
                            <div class="blog-details">
                                <div class="blog-date">{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M Y') : '' }}</div>
                                <div class="blog-views">
                                    <span class="views-badge">0 Views</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-actions">
                            <button class="mobile-action-btn edit">
                                <a href="{{ route('blog.edit', $post->id) }}" class="action-btn edit"><i class="fas fa-edit"></i>Edit</a>
                            </button>
                            <form action="{{ route('blog.delete', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="mobile-action-btn delete" onclick="return confirm('Delete this post?')">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                            <button class="mobile-action-btn copy">
                                <i class="fas fa-copy"></i>
                                Copy
                            </button>
                        </div>
                    </div>
                    @endforeach
                    <div class="blog-card">
                        <div class="blog-header">
                            <div class="blog-number">2</div>
                            <h3 class="blog-title">Add New Product</h3>
                        </div>
                        <div class="blog-content">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="post-image me-3">
                            <div class="blog-details">
                                <div class="blog-date">21 Jun 2025</div>
                                <div class="blog-views">
                                    <span class="views-badge">121 Views</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-actions">
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

                    <div class="blog-card">
                        <div class="blog-header">
                            <div class="blog-number">3</div>
                            <h3 class="blog-title">Cotton & Accessories</h3>
                        </div>
                        <div class="blog-content">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="post-image me-3">
                            <div class="blog-details">
                                <div class="blog-date">21 Jun 2025</div>
                                <div class="blog-views">
                                    <span class="views-badge">39 Views</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-actions">
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

                    <div class="blog-card">
                        <div class="blog-header">
                            <div class="blog-number">4</div>
                            <h3 class="blog-title">Delmler Auto</h3>
                        </div>
                        <div class="blog-content">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                            <div class="blog-details">
                                <div class="blog-date">21 Jun 2025</div>
                                <div class="blog-views">
                                    <span class="views-badge">8 Views</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-actions">
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

                    <div class="blog-card">
                        <div class="blog-header">
                            <div class="blog-number">5</div>
                            <h3 class="blog-title">Delmler Auto</h3>
                        </div>
                        <div class="blog-content">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                            <div class="blog-details">
                                <div class="blog-date">21 Jun 2025</div>
                                <div class="blog-views">
                                    <span class="views-badge">12k Views</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-actions">
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
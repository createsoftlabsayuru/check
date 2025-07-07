<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard - Blog Posts</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/binBlog.css') }}">
</head>
<body>

    <!-- Main Content -->
    <main class="main-content">
        <div class="content-header">
            <h2 class="content-title">Blog Post Bin</h2>
        </div>

        <!-- Desktop Table View -->
        <div class="blog-table-container">
            <table class="table blog-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Post Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($binPosts as $index => $post)
                    <tr>
                        <td><strong>{{ $index + 1 }}</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="{{ asset('storage/' . ($post->image->file_path ?? 'default.jpg')) }}" alt="{{ $post->title }}" class="post-image">
                                <div class="post-details">
                                    <h6>{{ $post->title }}</h6>
                                    <small>{{ \Carbon\Carbon::parse($post->deleted_at)->format('d M Y') }}</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-{{ $post->status }}">{{ ucfirst($post->status) }}</span></td>
                        <td><form action="{{ route('blog.restore', $post->id) }}" method="POST">
                            @csrf
                            <button class="btn-restore" onclick="return confirm('Restore this post?')">
                                <i class="fas fa-undo me-2"></i>Restore
                            </button>
                            </form></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><strong>2</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="post-image">
                                <div class="post-details">
                                    <h6>Add New Product</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-post">Post</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                    <tr>
                        <td><strong>3</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="post-image">
                                <div class="post-details">
                                    <h6>Cotton & Accessories</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-draft">Draft</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                    <tr>
                        <td><strong>4</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image">
                                <div class="post-details">
                                    <h6>Delmler auto</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-draft">Draft</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                    <tr>
                        <td><strong>5</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image">
                                <div class="post-details">
                                    <h6>Delmler auto</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-draft">Draft</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                    <tr>
                        <td><strong>6</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Add New Product" class="post-image">
                                <div class="post-details">
                                    <h6>Add New Product</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-post">Post</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                    <tr>
                        <td><strong>7</strong></td>
                        <td>
                            <div class="post-info">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="House Cleaning Service" class="post-image">
                                <div class="post-details">
                                    <h6>House Cleaning Service</h6>
                                    <small>21 Jun 2025</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-badge status-draft">Draft</span></td>
                        <td><button class="btn-restore"><i class="fas fa-undo me-2"></i>Restore</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="blog-cards">
            @foreach($binPosts as $index => $post)
            <div class="blog-card">
                <div class="card-header">
                    <div class="card-number">{{ $index + 1 }}</div>
                    <h5 class="card-title">{{ $post->title }}</h5>
                </div>
                <div class="card-body">
                    <div class="mobile-post-info">
                        <img src="{{ asset('storage/' . ($post->image->file_path ?? 'default.jpg')) }}" alt="{{ $post->title }}" class="mobile-post-image">
                        <div class="mobile-post-details">
                            <div class="date">{{ \Carbon\Carbon::parse($post->deleted_at)->format('d M Y') }}</div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <span class="status-badge status-{{ $post->status }} mobile-status-badge">{{ ucfirst($post->status) }}</span>
                        <form action="{{ route('blog.restore', $post->id) }}" method="POST">
                            @csrf
                            <button class="mobile-btn-restore" onclick="return confirm('Restore this post?')">
                                <i class="fas fa-undo"></i>
                                Restore
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="blog-card">
                <div class="card-header">
                    <div class="card-number">2</div>
                    <h5 class="card-title">Add New Product</h5>
                </div>
                <div class="card-body">
                    <div class="mobile-post-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="mobile-post-image">
                        <div class="mobile-post-details">
                            <div class="date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <span class="status-badge status-post mobile-status-badge">Post</span>
                        <button class="mobile-btn-restore">
                            <i class="fas fa-undo"></i>
                            Restore
                        </button>
                    </div>
                </div>
            </div>

            <div class="blog-card">
                <div class="card-header">
                    <div class="card-number">3</div>
                    <h5 class="card-title">Cotton & Accessories</h5>
                </div>
                <div class="card-body">
                    <div class="mobile-post-info">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="mobile-post-image">
                        <div class="mobile-post-details">
                            <div class="date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <span class="status-badge status-draft mobile-status-badge">Draft</span>
                        <button class="mobile-btn-restore">
                            <i class="fas fa-undo"></i>
                            Restore
                        </button>
                    </div>
                </div>
            </div>

            <div class="blog-card">
                <div class="card-header">
                    <div class="card-number">4</div>
                    <h5 class="card-title">Delmler Auto</h5>
                </div>
                <div class="card-body">
                    <div class="mobile-post-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="mobile-post-image">
                        <div class="mobile-post-details">
                            <div class="date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <span class="status-badge status-draft mobile-status-badge">Draft</span>
                        <button class="mobile-btn-restore">
                            <i class="fas fa-undo"></i>
                            Restore
                        </button>
                    </div>
                </div>
            </div>

              <div class="blog-card">
                <div class="card-header">
                    <div class="card-number">4</div>
                    <h5 class="card-title">Delmler Auto</h5>
                </div>
                <div class="card-body">
                    <div class="mobile-post-info">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="mobile-post-image">
                        <div class="mobile-post-details">
                            <div class="date">21 Jun 2025</div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <span class="status-badge status-draft mobile-status-badge">Draft</span>
                        <button class="mobile-btn-restore">
                            <i class="fas fa-undo"></i>
                            Restore
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
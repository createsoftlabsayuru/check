<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard - Draft Blog Posts</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/draftBlog.css') }}">
</head>
<body>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2 class="underline-heading">Draft Blog Posts</h2>
            <button class="btn btn-add-post">
                <i class="fas fa-plus me-2"></i>
                Add New Post
            </button>
        </div>

        <!-- Desktop Table View -->
        <div class="draft-posts-table">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Post Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($drafts as $index => $draft)
                    <tr>
                        <td><strong>{{ $index + 1 }}</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . ($draft->image->file_path ?? 'default.jpg')) }}" alt="{{ $draft->title }}" class="post-image me-3">
                                <div>
                                    <strong>{{ $draft->title }}</strong>
                                    <br><small class="text-muted">{{ $draft->drafted_at ? $draft->drafted_at->format('d M Y') : '' }}</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit"><a href="{{ route('blog.edit', $draft->id) }}" class="action-btn edit"><i class="fas fa-edit"></i></a></button>
                                <form action="{{ route('blog.delete', $draft->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button class="action-btn delete" onclick="return confirm('Delete this draft?')"><i class="fas fa-trash"></i></button>
                                </form>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
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
                        <td><span class="status-draft">Draft</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="draft-posts-cards">
            @foreach($drafts as $index => $draft)
            <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">{{ $index + 1 }}</div>
                    <div class="post-name">{{ $draft->title }}</div>
                </div>
                <div class="post-info">
                    <img src="{{ asset('storage/' . ($draft->image->file_path ?? 'default.jpg')) }}" alt="{{ $draft->title }}" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">{{ $draft->drafted_at ? $draft->drafted_at->format('d M Y') : '' }}</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <a href="{{ route('blog.edit', $draft->id) }}" class="action-btn edit"><i class="fas fa-edit"></i></a>
                    </button>
                    <form action="{{ route('blog.delete', $draft->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="action-btn mobile-action-btn delete" onclick="return confirm('Delete this draft?')"><i class="fas fa-trash"></i>Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">2</div>
                    <div class="post-name">Add New Product</div>
                </div>
                <div class="post-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Add New Product" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">3</div>
                    <div class="post-name">Cotton & Accessories</div>
                </div>
                <div class="post-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Cotton & Accessories" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">4</div>
                    <div class="post-name">Delmler Auto</div>
                </div>
                <div class="post-info">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

            <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">5</div>
                    <div class="post-name">Delmler Auto</div>
                </div>
                <div class="post-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <button class="mobile-action-btn delete">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>

                    <div class="draft-post-card">
                <div class="post-header">
                    <div class="post-number">5</div>
                    <div class="post-name">Delmler Auto</div>
                </div>
                <div class="post-info">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" alt="Delmler auto" class="post-image me-3">
                    <div class="post-details">
                        <div class="post-date">21 Jun 2025</div>
                    </div>
                </div>
                <div class="post-stats">
                    <span class="status-draft">Draft</span>
                </div>
                <div class="post-actions">
                    <button class="mobile-action-btn edit">
                        <a href="{{ route('blog.edit', $draft->id) }}" class="action-btn edit"><i class="fas fa-edit"></i>Edit</a>
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
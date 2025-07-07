<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Tag Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/admin/blogTag.css') }}">
</head>
<body>
    <div class="container">
        <h5 class="mt-5 underline-heading">Blog Tag</h5>
        <div class="header">
            
            <button class="add-btn" onclick="openModal()">
                <i class="fas fa-plus"></i>
                Add Blog Tag
            </button>
        </div>

        <div class="tags-grid" id="tagsGrid">
            <!-- Sample Tags -->
            <div class="tag-card services">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">SERVICES</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <div class="tag-card products">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">PRODUCTS</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <div class="tag-card fashion">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">FASHION</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <div class="tag-card automotive">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">AUTOMOTIVE</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <div class="tag-card cleaning">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">CLEANING</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <div class="tag-card electronics">
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        21 Jun 2025
                    </div>
                    <div class="tag-name-badge">ELECTRONICS</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add/Edit Tag Modal -->
    <div class="modal-overlay" id="modalOverlay" onclick="closeModal(event)">
        <div class="modal" onclick="event.stopPropagation()">
            <button class="close-btn" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Add New Blog Tag</h2>
                <p class="modal-subtitle" id="modalSubtitle">Create a new tag for organizing your blog posts</p>
            </div>

            <form id="tagForm" onsubmit="submitTag(event)">
                <div class="form-group">
                    <label class="form-label" for="tagName">
                        <i class="fas fa-tag"></i>
                        Tag Name
                    </label>
                    <input 
                        type="text" 
                        id="tagName" 
                        class="form-input" 
                        placeholder="Enter tag name (e.g., Technology, Travel)"
                        required
                        maxlength="30"
                    >
                </div>

                <div class="form-group">
                    <label class="form-label" for="tagCategory">
                        <i class="fas fa-palette"></i>
                        Category Style
                    </label>
                    <select id="tagCategory" class="form-select" required>
                        <option value="">Choose a category style</option>
                        <option value="services">Services (Green)</option>
                        <option value="products">Products (Orange)</option>
                        <option value="fashion">Fashion (Pink)</option>
                        <option value="automotive">Automotive (Blue)</option>
                        <option value="cleaning">Cleaning (Teal)</option>
                        <option value="electronics">Electronics (Purple)</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="modal-btn modal-btn-secondary" onclick="closeModal()">
                        <i class="fas fa-times"></i>
                        Cancel
                    </button>
                    <button type="submit" class="modal-btn modal-btn-primary" id="submitBtn">
                        <i class="fas fa-plus"></i>
                        Add Tag
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let editingCard = null;

        // Open modal for adding new tag
        function openModal() {
            const modal = document.getElementById('modalOverlay');
            const title = document.getElementById('modalTitle');
            const subtitle = document.getElementById('modalSubtitle');
            const submitBtn = document.getElementById('submitBtn');
            
            title.textContent = 'Add New Blog Tag';
            subtitle.textContent = 'Create a new tag for organizing your blog posts';
            submitBtn.innerHTML = '<i class="fas fa-plus"></i> Add Tag';
            
            editingCard = null;
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
            
            // Focus on first input
            setTimeout(() => {
                document.getElementById('tagName').focus();
            }, 300);
        }

        // Open modal for editing existing tag
        function editTag(button) {
            const card = button.closest('.tag-card');
            const tagName = card.querySelector('.tag-name-badge').textContent;
            const tagClass = Array.from(card.classList).find(cls => cls !== 'tag-card');
            
            const modal = document.getElementById('modalOverlay');
            const title = document.getElementById('modalTitle');
            const subtitle = document.getElementById('modalSubtitle');
            const submitBtn = document.getElementById('submitBtn');
            const tagNameInput = document.getElementById('tagName');
            const tagCategorySelect = document.getElementById('tagCategory');
            
            title.textContent = 'Edit Blog Tag';
            subtitle.textContent = 'Update the tag information';
            submitBtn.innerHTML = '<i class="fas fa-save"></i> Update Tag';
            
            tagNameInput.value = tagName;
            tagCategorySelect.value = tagClass;
            
            editingCard = card;
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                tagNameInput.focus();
                tagNameInput.select();
            }, 300);
        }

        // Close modal
        function closeModal(event) {
            if (event && event.target !== event.currentTarget && !event.target.classList.contains('close-btn') && !event.target.classList.contains('fa-times')) {
                return;
            }
            
            const modal = document.getElementById('modalOverlay');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
            
            // Reset form
            document.getElementById('tagForm').reset();
            editingCard = null;
        }

        // Submit tag (add or edit)
        function submitTag(event) {
            event.preventDefault();
            
            const tagName = document.getElementById('tagName').value.trim();
            const tagCategory = document.getElementById('tagCategory').value;
            
            if (!tagName || !tagCategory) {
                showNotification('Please fill in all fields', 'error');
                return;
            }

            if (editingCard) {
                // Update existing tag
                updateTagCard(editingCard, tagName, tagCategory);
                showNotification(`"${tagName}" tag updated successfully!`, 'success');
            } else {
                // Create new tag
                const newCard = createTagCard(tagName, tagCategory);
                const tagsGrid = document.getElementById('tagsGrid');
                tagsGrid.appendChild(newCard);
                showNotification(`"${tagName}" tag added successfully!`, 'success');
            }
            
            closeModal();
        }

        // Update existing tag card
        function updateTagCard(card, name, category) {
            // Remove old category class and add new one
            const oldCategory = Array.from(card.classList).find(cls => cls !== 'tag-card');
            if (oldCategory) {
                card.classList.remove(oldCategory);
            }
            card.classList.add(category);
            
            // Update badge text
            card.querySelector('.tag-name-badge').textContent = name.toUpperCase();
        }

        // Create new tag card
        function createTagCard(name, category) {
            const card = document.createElement('div');
            card.className = `tag-card ${category}`;
            
            const currentDate = new Date().toLocaleDateString('en-GB', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            });

            card.innerHTML = `
                <div class="tag-image"></div>
                <div class="tag-content">
                    <div class="tag-date">
                        <i class="fas fa-calendar"></i>
                        ${currentDate}
                    </div>
                    <div class="tag-name-badge">${name.toUpperCase()}</div>
                    <div class="tag-actions">
                        <button class="action-btn edit-btn" onclick="editTag(this)">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>
                        <button class="action-btn delete-btn" onclick="deleteTag(this)">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                    </div>
                </div>
            `;

            // Add entrance animation
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);

            return card;
        }

        // Delete tag
        function deleteTag(button) {
            const card = button.closest('.tag-card');
            const tagName = card.querySelector('.tag-name-badge').textContent;
            
            if (confirm(`Are you sure you want to delete the "${tagName}" tag?`)) {
                card.style.transition = 'all 0.4s ease';
                card.style.transform = 'translateX(-100%) scale(0.8)';
                card.style.opacity = '0';
                
                setTimeout(() => {
                    card.remove();
                }, 400);
                
                showNotification(`"${tagName}" tag deleted successfully!`, 'success');
            }
        }

        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            
            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                ${message}
            `;
            
            document.body.appendChild(notification);
            
            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);
            
            // Hide after 3 seconds
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Prevent form submission on Enter in input fields (except submit button)
        document.getElementById('tagName').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('tagCategory').focus();
            }
        });
    </script>
</body>
</html>
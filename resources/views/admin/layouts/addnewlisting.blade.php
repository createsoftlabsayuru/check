<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Responsive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/Addnewlisting.css') }}">
</head>

<body>

    <div class="container">
        <h5 class="mt-5 underline-heading">Add new listing</h5>
        <div class="form-container">
            
            <!-- Main Form Area -->
            <button type="button" class="btn mb-4 bck" onclick="history.back()"><img
                    src="images/img_weuiarrowfilled.svg" alt=""></button>
            <form class="form-content" id="listingForm">
                <!-- Company Name -->
                <div class="form-group mb-5">
                    <div class="floating-label">
                        <input type="text" id="companyName" name="companyName" required class="form-control" />
                        <label for="companyName">Company name</label>
                    </div>
                </div>
                <!-- Company About -->
                <div class="form-group mb-5">
                    <div class="floating-label">
                        <textarea id="companyAbout" name="companyAbout" required class="form-control"
                            rows="3"></textarea>
                        <label for="companyAbout">Company about</label>
                    </div>
                </div>
                <!-- Service Offer -->
                <div class="form-group mb-5">
                    <div class="floating-label">
                        <label class="upload-label mb-2">Service offer</label>
                        <div class="upload-grid border-box">
                            <div class="upload-item" onclick="uploadFile('serviceUpload1')">
                                <input type="file" id="serviceUpload1" name="serviceImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('serviceUpload2')">
                                <input type="file" id="serviceUpload2" name="serviceImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('serviceUpload3')">
                                <input type="file" id="serviceUpload3" name="serviceImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('serviceUpload4')">
                                <input type="file" id="serviceUpload4" name="serviceImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item add" onclick="addMoreServices()">
                                <img src="images/img_mingcuteplusfill.svg" alt="Add" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Area -->
                <div class="form-group mb-5">
                    <div class="floating-label">
                        <input type="text" id="serviceArea" name="serviceArea" required class="form-control" />
                        <label for="serviceArea">Service area</label>
                    </div>
                </div>
                <!-- Product -->
                <div class="form-group mb-3">
                    <div class="floating-label">
                        <label class="upload-label mb-2">Product</label>
                        <div id="product-container" class="border-box">
                            <!-- Product block gets cloned from here -->
                            <div class="product-block d-flex gap-3 mb-3">
                                <div class="product-upload">
                                    <input type="file" id="productImage-0" name="productImage" class="d-none"
                                        onchange="showPreview(event, this.parentElement)" />
                                    <img src="{{ asset('images/img_materialsymbolsupload.svg')}}" alt="Upload" class="upload-icon"
                                        onclick="uploadFile('productImage-0')" />
                                    <span class="upload-text">Upload</span>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="product-fields ">
                                        <input type="text" class="product-input form-control" placeholder="Name"
                                            name="productName" />
                                        <input type="text" class="product-input form-control" placeholder="Price"
                                            name="productPrice" />
                                        <select name="productGender" class="product-input form-control mb-3">
                                            <option value="" selected disabled>Category</option>
                                            <option value="male">Electronics</option>
                                            <option value="female">Fashion</option>
                                            <option value="unisex">Home & Garden</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="add-product-btn" onclick="addProduct()">
                                    <img src="images/img_vector.svg" alt="Add Product" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="form-group my-3 mb-5 mt-5">
                    <div class="floating-label">
                        <label class="quill-label">Additional info</label>
                        <div class="quill-wrapper">
                            <div id="editor1" class="quill-container"></div>
                        </div>
                    </div>
                </div>
                <!-- YouTube Video -->
                <div class="form-group mb-4">
                    <label class="upload-label mb-2">Youtube video</label>
                    <div class="youtube-section">
                        <input type="url" placeholder="Enter YouTube URL" name="youtubeUrl" />
                        <img src="images/img_mdiyoutube.svg" alt="YouTube" class="youtube-icon" />
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn text-white px-4 btn-primary-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Promotion Dialog -->
    <div class="promotion-dialog d-none" id="promotionDialog">
        <div class="dialog-content p-4 bg-white shadow rounded">
            <img src="images/img_proiconscancel.svg" alt="Close" class="dialog-close float-end"
                onclick="closeDialog()" />
            <h3 class="dialog-title">Do you want to promote your company?</h3>
            <div class="radio-group my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="promoteYes" name="promote" value="yes" />
                    <label class="form-check-label" for="promoteYes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="promoteNo" name="promote" value="no" />
                    <label class="form-check-label" for="promoteNo">No</label>
                </div>
            </div>
            <button class="btn btn-success w-100" onclick="handlePromotion()">OK</button>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <script>
            // File upload functionality
            function uploadFile(inputId) {
                const input = document.getElementById(inputId);
                if (input) {
                    input.click();
                }
            }

            // Show image preview
            function showPreview(event, container) {
                const file = event.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        // Remove existing icon and text
                        const icon = container.querySelector('.upload-icon');
                        const text = container.querySelector('.upload-text');
                        if (icon) icon.remove();
                        if (text) text.remove();

                        // Create and append preview image
                        const preview = document.createElement('img');
                        preview.src = e.target.result;
                        preview.style.width = '100%';
                        preview.style.height = '100%';
                        preview.style.objectFit = 'cover';
                        preview.style.borderRadius = '10px';
                        container.appendChild(preview);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid image file');
                }
            }

            // Add more services
            function addMoreServices() {
                const uploadGrid = document.querySelector('.upload-grid');
                const uploadCount = document.querySelectorAll('.upload-item:not(.add)').length + 1;
                const newUploadItem = document.createElement('div');
                newUploadItem.className = 'upload-item';
                newUploadItem.setAttribute('onclick', `uploadFile('serviceUpload${uploadCount}')`);
                newUploadItem.innerHTML = `
            <input type="file" id="serviceUpload${uploadCount}" name="serviceImages[]" accept="image/*" class="d-none" onchange="showPreview(event, this.parentElement)">
            <img src="images/img_materialsymbolsupload.svg" alt="Upload" class="upload-icon" />
            <span class="upload-text">Upload</span>
        `;
                uploadGrid.insertBefore(newUploadItem, uploadGrid.lastElementChild);
            }

            let productIndex = 1;

            function uploadFile(inputId) {
                document.getElementById(inputId).click();
            }

            function addProduct() {
                const container = document.getElementById('product-container');
                const original = container.querySelector('.product-block');
                const clone = original.cloneNode(true);

                // Update input IDs and event handlers to avoid duplicates
                const newId = `productImage-${productIndex++}`;
                const input = clone.querySelector('input[type="file"]');
                const uploadIcon = clone.querySelector('img[alt="Upload"]');

                input.id = newId;
                uploadIcon.setAttribute('onclick', `uploadFile('${newId}')`);

                // Clear previous input values
                clone.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
                clone.querySelector('select').selectedIndex = 0;

                container.appendChild(clone);
            }

            // Rich text editor functionality
            const quill1 = new Quill('#editor1', { theme: 'snow' });

            // Dialog functionality
            function closeDialog() {
                document.getElementById('promotionDialog')?.classList.add('d-none');
            }

            function handlePromotion() {
                const selectedOption = document.querySelector('input[name="promote"]:checked');
                if (selectedOption) {
                    alert(`You selected: ${selectedOption.value}`);
                    closeDialog();
                } else {
                    alert('Please select an option');
                }
            }

            // Form submission
            document.getElementById('listingForm')?.addEventListener('submit', function (e) {
                e.preventDefault();
                const companyName = document.getElementById('companyName')?.value;
                const companyAbout = document.getElementById('companyAbout')?.value;
                const serviceArea = document.getElementById('serviceArea')?.value;
                const additionalInfo = document.getElementById('additionalInfo')?.innerHTML;
                const youtubeUrl = document.querySelector('input[name="youtubeUrl"]')?.value;

                if (!companyName || !companyAbout || !serviceArea) {
                    alert('Please fill in all required fields');
                    return;
                }

                if (youtubeUrl && !youtubeUrl.match(/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+$/)) {
                    alert('Please enter a valid YouTube URL');
                    return;
                }

                alert('Listing submitted successfully!');
                document.getElementById('promotionDialog')?.classList.remove('d-none');
            });

            // Menu item interactions
            document.querySelectorAll('.menu-item').forEach(item => {
                item.addEventListener('click', function () {
                    document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Search functionality
            function performSearch() {
                const searchInput = document.querySelector('.search-input');
                if (searchInput?.value) {
                    alert(`Searching for: ${searchInput.value}`);
                } else {
                    alert('Please enter a search term');
                }
            }

            // File input change handlers
            document.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', function (e) {
                    if (e.target.files.length > 0) {
                        const fileName = e.target.files[0].name;
                        alert(`File selected: ${fileName}`);
                    }
                });
            });

            // Back arrow functionality
            document.querySelector('.back-arrow')?.addEventListener('click', function () {
                if (confirm('Are you sure you want to go back? Any unsaved changes will be lost.')) {
                    window.history.back();
                }
            });
            
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const menuItems = document.querySelectorAll(".menu-item");

                menuItems.forEach(item => {
                    item.addEventListener("click", () => {
                        menuItems.forEach(btn => btn.classList.remove("active"));
                        item.classList.add("active");
                    });
                });
            });
        </script>
        <script>
            (function () {
                let productIndex = 0;

                function addProductField() {
                    const container = document.getElementById("product-fields");
                    const newField = document.createElement("input");
                    newField.className = "product-input";
                    newField.name = `product[${productIndex}]`;
                    newField.placeholder = "Enter product name";
                    container.appendChild(newField);
                    productIndex++;
                }

                function initProductForm() {
                    const addBtn = document.getElementById("add-product-btn");
                    if (addBtn) {
                        addBtn.addEventListener("click", addProductField);
                    } else {
                        console.warn("add-product-btn not found!");
                    }
                }

                // Delay the binding until DOM is updated
                setTimeout(initProductForm, 0); // short delay lets DOM render first
            })();
        </script>            
        
</body>

</html>
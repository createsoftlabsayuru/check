<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/add-product.css') }}">
</head>

<body>
    <div class="container">
        <h5 class="mt-5 underline-heading">Add new product</h5>
        <div class="form-container">
            <form>
                <button type="button" class="btn mb-4 bck" onclick="history.back()"><img src="images/img_weuiarrowfilled.svg" alt=""></button>
                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Product name</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Product description</label>
                        <textarea class="form-control rounded" rows="3"></textarea>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="floating-label">
                    <label class="upload-label">Product Images</label>
                
                    <!-- Add border directly to upload-grid -->
                    <div class="upload-grid border-box">
                        <!-- Upload Items -->
                        <div class="upload-item" onclick="uploadFile('productUpload1')">
                            <input type="file" id="productUpload1" name="productImages[]" accept="image/*" class="d-none"
                                onchange="showPreview(event, this.parentElement)">
                            <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                            <span class="upload-text">Upload</span>
                        </div>
                        <div class="upload-item" onclick="uploadFile('productUpload2')">
                            <input type="file" id="productUpload2" name="productImages[]" accept="image/*" class="d-none"
                                onchange="showPreview(event, this.parentElement)">
                            <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                            <span class="upload-text">Upload</span>
                        </div>
                        <div class="upload-item" onclick="uploadFile('productUpload3')">
                            <input type="file" id="productUpload3" name="productImages[]" accept="image/*" class="d-none"
                                onchange="showPreview(event, this.parentElement)">
                            <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                            <span class="upload-text">Upload</span>
                        </div>
                        <div class="upload-item" onclick="uploadFile('productUpload4')">
                            <input type="file" id="productUpload4" name="productImages[]" accept="image/*" class="d-none"
                                onchange="showPreview(event, this.parentElement)">
                            <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                            <span class="upload-text">Upload</span>
                        </div>
                        <div class="upload-item add" onclick="addMoreProducts()">
                            <img src="{{ asset('images/img_mingcuteplusfill.svg') }}" alt="Add" />
                        </div>
                    </div>
                </div>
                </div>
                
                

                <div class="mb-3">
                    <label class="form-label op">Product colors :</label>
                    <div id="color-container" class="d-inline-flex align-items-center flex-wrap gap-3">
                        <!-- Example color -->
                        <div class="color-wrapper">
                            <span class="color-box" style="background-color: red;"></span>
                            <span class="remove-color">&times;</span>
                        </div>
                    </div>
                    <!-- Hidden field for selected colors -->
                    <input type="hidden" name="product_colors" id="productColorsInput">
                    <!-- Hidden color input -->
                    <input type="color" id="colorPicker" style="display: none;" />
                    <!-- Trigger Button -->
                    <button type="button" class="btn btn-sm btn-primary ms-3" id="openColorModal">+</button>

                    <!-- Hidden input for form submission -->
                    <input type="hidden" name="product_colors" id="productColorsInput" />

                    <!-- Color Preview Section -->
                    <div id="color-container" class="d-inline-flex align-items-center flex-wrap gap-2 mt-2"></div>

                    <!-- Modal for color picker -->
                    <div class="modal fade" id="colorModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-3">
                                <div class="modal-body text-center">
                                    <input type="color" id="customColorInput"
                                        class="form-control form-control-color mb-3" value="#000000">
                                    <button type="button" class="btn btn-success" id="confirmColorBtn">Add
                                        Color</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center gap-2 flex-wrap">
                    <label class="form-label mb-0 op">Product sizes:</label>
                    <div id="size-options" class="d-flex gap-3 flex-wrap">
                        <button type="button" class="size-btn">XS</button>
                        <button type="button" class="size-btn">S</button>
                        <button type="button" class="size-btn">M</button>
                        <button type="button" class="size-btn">L</button>
                        <button type="button" class="size-btn">XL</button>
                    </div>
                    <input type="hidden" name="product_sizes" id="selectedSizes">
                </div>


                <div class="mb-3">
                    <label class="form-label me-2 op">Stock :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="stock" id="available" checked>
                        <label class="form-check-label" for="available">Available</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="stock" id="unavailable">
                        <label class="form-check-label" for="unavailable">Unavailable</label>
                    </div>
                </div>

                <div class="mb-2 mt-5">
                    <label class="form-label me-2 op">Free delivery :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="free_delivery" id="deliveryYes" checked>
                        <label class="form-check-label" for="deliveryYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="free_delivery" id="deliveryNo">
                        <label class="form-check-label" for="deliveryNo">No</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label me-2 op">Return delivery :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="return_delivery" id="returnYes" checked>
                        <label class="form-check-label" for="returnYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="return_delivery" id="returnNo">
                        <label class="form-check-label" for="returnNo">No</label>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn text-white px-4 btn-primary-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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

        // Add more products
        function addMoreProducts() {
            const uploadGrid = document.querySelector('.upload-grid');
            const uploadCount = document.querySelectorAll('.upload-item:not(.add)').length + 1;
            const newUploadItem = document.createElement('div');
            newUploadItem.className = 'upload-item';
            newUploadItem.setAttribute('onclick', `uploadFile('productUpload${uploadCount}')`);
            newUploadItem.innerHTML = `
        <input type="file" id="productUpload${uploadCount}" name="productImages[]" accept="image/*" class="d-none" onchange="showPreview(event, this.parentElement)">
        <img src="images/img_materialsymbolsupload.svg" alt="Upload" class="upload-icon" />
        <span class="upload-text">Upload</span>`;
            uploadGrid.insertBefore(newUploadItem, uploadGrid.lastElementChild);
        }


        const colorModal = new bootstrap.Modal(document.getElementById('colorModal'));
        const openColorModalBtn = document.getElementById('openColorModal');
        const confirmColorBtn = document.getElementById('confirmColorBtn');
        const customColorInput = document.getElementById('customColorInput');
        const colorContainer = document.getElementById('color-container');
        const colorsInput = document.getElementById('productColorsInput');

        const MAX_COLORS = 6;
        let selectedColors = [];

        openColorModalBtn.addEventListener('click', () => {
            if (selectedColors.length >= MAX_COLORS) {
                alert('Maximum 6 colors allowed.');
                return;
            }
            colorModal.show();
        });

        confirmColorBtn.addEventListener('click', () => {
            const colorValue = customColorInput.value;
            if (!selectedColors.includes(colorValue)) {
                selectedColors.push(colorValue);
                updateColorDisplay();
            }
            confirmColorBtn.disabled = true; // prevent rapid re-clicks
            colorModal.hide();

            colorModal._element.addEventListener('hidden.bs.modal', () => {
                confirmColorBtn.blur(); // remove focus from the button inside hidden modal
                confirmColorBtn.disabled = false;
            });

        });

        function updateColorDisplay() {
            colorContainer.innerHTML = '';
            selectedColors.forEach(color => {
                const wrapper = document.createElement('div');
                wrapper.className = 'color-wrapper';

                const box = document.createElement('span');
                box.className = 'color-box';
                box.style.backgroundColor = color;

                const remove = document.createElement('span');
                remove.className = 'remove-color';
                remove.innerHTML = '&times;';
                remove.onclick = () => {
                    selectedColors = selectedColors.filter(c => c !== color);
                    updateColorDisplay();
                };

                wrapper.appendChild(box);
                wrapper.appendChild(remove);
                colorContainer.appendChild(wrapper);
            });

            colorsInput.value = selectedColors.join(',');
        }

        const sizeButtons = document.querySelectorAll('.size-btn');
        const selectedSizesInput = document.getElementById('selectedSizes');
        let selectedSizes = [];

        sizeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const size = button.textContent;
                button.classList.toggle('active');

                if (selectedSizes.includes(size)) {
                    selectedSizes = selectedSizes.filter(s => s !== size);
                } else {
                    selectedSizes.push(size);
                }

                selectedSizesInput.value = selectedSizes.join(',');
            });
        });

    </script>
</body>

</html>
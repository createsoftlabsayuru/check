<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/add-product.css') }}">
</head>

<body>
    <div class="container">
        <h5 class="mt-5 underline-heading">Add new event</h5>
        <div class="form-container">
            <form>
                <button type="button" class="btn mb-4 bck" onclick="history.back()"><img
                        src="{{ asset('images/img_weuiarrowfilled.svg') }}" alt=""></button>
                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Event name</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Sub title</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <div class="floating-label">
                                <label for="jobField" class="form-label">Start date</label>
                                <input type="date" class="form-control" id="jobField">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mb-5">
                            <div class="floating-label">
                                <label for="jobType" class="form-label">End date</label>
                                <input type="date" class="form-control" id="jobType">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Time</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="mb-5">
                    <div class="floating-label">
                        <label class="upload-label">Past event images</label>

                        <!-- Add border directly to upload-grid -->
                        <div class="upload-grid border-box">
                            <!-- Upload Items -->
                            <div class="upload-item" onclick="uploadFile('productUpload1')">
                                <input type="file" id="productUpload1" name="productImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('productUpload2')">
                                <input type="file" id="productUpload2" name="productImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('productUpload3')">
                                <input type="file" id="productUpload3" name="productImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item" onclick="uploadFile('productUpload4')">
                                <input type="file" id="productUpload4" name="productImages[]" accept="image/*"
                                    class="d-none" onchange="showPreview(event, this.parentElement)">
                                <img src="{{ asset('images/img_materialsymbolsupload.svg') }}" alt="Upload" class="upload-icon" />
                                <span class="upload-text">Upload</span>
                            </div>
                            <div class="upload-item add" onclick="addMoreProducts()">
                                <img src="{{ asset('images/img_mingcuteplusfill.svg') }}" alt="Add" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3 mb-5">
                    <div class="floating-label">
                        <label class="quill-label form-label">Additonal info</label>
                        <div class="quill-wrapper">
                            <div id="editor1" class="quill-container"></div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Meeting link (Optional)</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn text-white px-4 btn-secondary-custom">Save as Draft</button>
                    <button type="submit" class="btn text-white px-4 btn-primary-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        const quill1 = new Quill('#editor1', { theme: 'snow' });
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
    </script>
</body>

</html>
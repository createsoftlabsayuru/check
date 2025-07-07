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
        <h5 class="mt-5 underline-heading">Add new post</h5>
        <div class="form-container">
            <form>
                <button type="button" class="btn mb-4 bck" onclick="history.back()"><img
                        src="{{asset('images/img_weuiarrowfilled.svg') }}" alt=""></button>
                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">Add title</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">AD placement</label>
                        <input type="text" class="form-control rounded" />
                    </div>
                </div>

                <!-- Upload Ad Section -->
                <div class="mb-4 position-relative">
                    <label class="floating-label-static">Optional</label>
                    <div id="uploadBox" class="border border-secondary-subtle rounded-3 p-4 text-center"
                        style="border-style: dashed;">
                        <div id="uploadInfo">
                            <i class='bx bx-cloud-upload text-secondary' style="font-size: 3rem;"></i>
                            <p class="mb-1 fw-semibold">Upload Ad</p>
                            <p class="text-muted small">JPEG, PNG and JPG formats, Up to 10MB</p>
                        </div>

                        <input type="file" class="form-control d-none" id="uploadAdInput" accept=".jpg, .jpeg, .png"
                            multiple>
                        <label for="uploadAdInput" class="btn btn-outline-secondary mt-2">Browse File</label>

                        <!-- Preview Area -->
                        <div class="row mt-3" id="previewContainer"></div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="floating-label">
                        <label class="form-label">What kind of design do you need?</label>
                        <textarea id="companyAbout" name="companyAbout" required class="form-control"
                            rows="3"></textarea>
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
        const uploadInput = document.getElementById('uploadAdInput');
        const previewContainer = document.getElementById('previewContainer');
        const uploadInfo = document.getElementById('uploadInfo');

        uploadInput.addEventListener('change', function () {
            const files = Array.from(this.files);

            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;
                if (file.size > 10 * 1024 * 1024) {
                    alert(`${file.name} is larger than 10MB.`);
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    const col = document.createElement('div');
                    col.classList.add('col-md-4', 'mb-3', 'position-relative');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded border';
                    img.style.maxHeight = '200px';

                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0 m-1';
                    removeBtn.innerHTML = '&times;';
                    removeBtn.onclick = () => {
                        col.remove();
                        if (previewContainer.children.length === 0) {
                            uploadInfo.style.display = 'block';
                        }
                    };

                    col.appendChild(img);
                    col.appendChild(removeBtn);
                    previewContainer.appendChild(col);

                    uploadInfo.style.display = 'none';
                };
                reader.readAsDataURL(file);
            });

            // Reset input so same file can be re-selected if deleted
            this.value = '';
        });
    </script>


</body>

</html>
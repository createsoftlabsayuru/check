<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/admin/User-profile.css') }}">
</head>

<body>
    <div class="container mt-5">
        <h5 class="mt-5 underline-heading">User Profile</h5>
        <div class="d-flex justify-content-end">
            <button class="btn btn-warning btn-edit">Edit Profile Page</button>
        </div>

        <div class="profile-container">
            <div class="row g-3">
                <div class="col-md-4"><label class="form-label">Profile Expiry</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">Name</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">Email</label></div>
                <div class="col-md-8"><input type="email" class="form-control" value=""
                         /></div>

                <div class="col-md-4"><label class="form-label">Profile Password</label></div>
                <div class="col-md-8"><input type="password" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">Mobile Number</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">ID Card</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4">
                    <label class="form-label">Profile Picture</label>
                </div>
                <div class="col-md-8 position-relative">
                    <!-- Hidden file input -->
                    <input type="file" id="hiddenUpload" class="d-none" onchange="showFileName(this)" />
                
                    <!-- Clickable readonly input field -->
                    <input type="text" class="form-control pe-5" id="fileNameDisplay" value="" readonly
                        onclick="document.getElementById('hiddenUpload').click()" />
                
                    <button type="button" class="btn btn-upload-custom">Upload</button>
                </div>
                
                <script>
                    function showFileName(input) {
                        if (input.files && input.files[0]) {
                            document.getElementById('fileNameDisplay').value = input.files[0].name;
                        }
                    }
                </script>
                

                <div class="col-md-4"><label class="form-label">City</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">Join date</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""  /></div>

                <div class="col-md-4"><label class="form-label">Profile link</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""
                         /></div>

                <div class="col-md-4"><label class="form-label">Website</label></div>
                <div class="col-md-8"><input type="text" class="form-control" value=""
                         /></div>

                <div class="col-md-4"><label class="form-label">Social Media</label></div>
                <div class="col-md-8 social-icons d-flex gap-3">
                    <a href="#" class="social-link position-relative" data-platform="Facebook">
                        <i class="fab fa-facebook"></i>
                        <span class="linked-dot d-none"></span>
                    </a>
                    <a href="#" class="social-link position-relative" data-platform="Instagram">
                        <i class="fab fa-instagram"></i>
                        <span class="linked-dot d-none"></span>
                    </a>
                    <a href="#" class="social-link position-relative" data-platform="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                        <span class="linked-dot d-none"></span>
                    </a>
                    <a href="#" class="social-link position-relative" data-platform="Twitter">
                        <i class="fab fa-x-twitter"></i>
                        <span class="linked-dot d-none"></span>
                    </a>
                </div>


                <div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="socialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-3">
                            <div class="modal-header">
                                <h5 class="modal-title" id="socialModalLabel">Link Social Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="socialUrlInput" class="form-label">Enter URL:</label>
                                <input type="url" class="form-control" id="socialUrlInput"
                                    placeholder="https://example.com/your-profile">
                                <input type="hidden" id="currentPlatform" />
                            </div>
                            <div class="modal-footer">
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" id="removeSocialLink">Remove
                                        Link</button>
                                    <button type="button" class="btn btn-primary" id="saveSocialLink">Save</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn text-white px-4 btn-primary-custom">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentIcon = null;

        document.querySelectorAll('.social-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                currentIcon = this;
                const platform = this.dataset.platform;
                document.getElementById('socialModalLabel').innerText = `Link ${platform} Profile`;

                // Pre-fill input if already has href
                const existingHref = currentIcon.getAttribute('href');
                document.getElementById('socialUrlInput').value = (existingHref && existingHref !== '#') ? existingHref : '';

                const modal = new bootstrap.Modal(document.getElementById('socialModal'));
                modal.show();
            });
        });

        // Save link
        document.getElementById('saveSocialLink').addEventListener('click', function () {
            const url = document.getElementById('socialUrlInput').value;
            if (url && currentIcon) {
                currentIcon.setAttribute('href', url);
                currentIcon.querySelector('.linked-dot').classList.remove('d-none');
                bootstrap.Modal.getInstance(document.getElementById('socialModal')).hide();
            }
        });

        // Remove link
        document.getElementById('removeSocialLink').addEventListener('click', function () {
            if (currentIcon) {
                currentIcon.setAttribute('href', '#');
                currentIcon.querySelector('.linked-dot').classList.add('d-none');
                document.getElementById('socialUrlInput').value = '';
                bootstrap.Modal.getInstance(document.getElementById('socialModal')).hide();
            }
        });
    </script>
      

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application - DigitalX Lanka</title>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-dev.4/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/job-application.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
    
</head>

<body>
    @include('user.partials.navbar')
    @include('user.partials.sidebar')
    @include('user.partials.login-modal')
    @include('user.partials.signup-modal')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-4">
                <div class="application-column">
                    <h1>Apply for this job</h1>
                    <p class="confidentiality">Your application will be treated with absolute confidentiality.</p>

                    <form>
                        <div class="form-section mb-3">
                            <h2>Full Name</h2>
                            <input type="text" class="form-control" id="fullname" name="fullname" required />
                        </div>

                        <div class="form-section mb-3">
                            <h2>Email</h2>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>

                        <div class="cv-container mb-4">
                            <div class="cv-left mb-3">
                                <h2>CV</h2>
                                <p class="file-note">
                                    Please note, current CV displayed in the middle will be sent to the recruiter when
                                    you hit
                                    the apply button. Once the application is sent out, the CV cannot be changed or
                                    updated.
                                    Please send out the latest CV available.
                                </p>
                                <div id="selected-cv" style="display: none;">
                                    Selected CV: <b id="cv-file-name-text">-</b><br />
                                    <button type="button" class="btn btn-sm btn-danger mt-2" id="remove-btn"
                                        onclick="removeCV()">Remove CV</button>
                                </div>
                            </div>

                            <div class="cv-card mb-3" id="cv-card">
                                <div class="checkmark" id="checkmark">✔</div>
                                <iframe id="cv-preview"></iframe>
                                <div class="cv-overlay">
                                    <div class="filename" id="cv-filename">your-cv.pdf</div>
                                    <a href="#" target="_blank" id="cv-link">View CV <i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>

                            <label class="file-upload" for="cv-upload">
                                <div><i class="fas fa-cloud-upload-alt"></i></div>
                                <div>Drop file here or<br />click to select</div>
                                <div style="font-size: 12px; margin-top: 8px;">Max file size : 2MB</div>
                                <input type="file" id="cv-upload" accept="application/pdf" />
                            </label>
                        </div>

                        <div class="form-section mb-4">
                            <h2>Cover Letter (Optional)</h2>
                            <div id="editor"></div>
                            <textarea id="cover-letter" name="cover-letter" style="display: none;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary apply-btn">Apply</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="description-column">
                    <div class="company-logo-section text-center mb-3">
                        <div class="logo-container">
                            <img src="{{ asset('images/creativesoftware_logo.jpeg') }}" alt="Novell Logo" class="company-logo" />
                        </div>
                    </div>

                    <div class="job-header mb-3">
                        <h1>Web Developer</h1>
                        <h2>DigitalX Lanka</h2>
                        <div class="job-meta">
                            <span class="meta-item"><i class="fas fa-map-marker-alt"></i> Colombo</span>
                            <span class="meta-item"><i class="far fa-clock"></i> 3 days left</span>
                            <span class="meta-item"><i class="fas fa-calendar-alt"></i> Full Time</span>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="job-requirements mb-4">
                        <p class="reference-text">Minimum 1 Years of work experience in web developing. Please refer to the job
                            advert for further information.</p>
                        <div class="info-container d-flex">
                            <div class="info-column labels me-3">
                                <div>Education</div>
                                <div>Experience</div>
                                <div>Salary Range</div>
                            </div>
                            <div class="vertical-divider"></div>
                            <div class="info-column values ms-3">
                                <div>Bachelor's Degree</div>
                                <div>1 Years</div>
                                <div>Any</div>
                            </div>
                        </div>
                    </div>

                    <div class="company-info mb-4">
                        <div class="company-branding-second d-flex align-items-center mb-3">
                            <img src="{{ asset('images/creativesoftware_logo.jpeg') }}" alt="Royal Ceramics Logo"
                                class="company-logo-second me-3" />
                            <div class="company-title">
                                <h2>DigitalX Lanka</h2>
                                <p class="job-posts">8 Job Posts</p>
                            </div>
                        </div>
                        <div class="company-meta mb-2">
                            <span class="meta-item"><i class="fas fa-users"></i> 5K - 10K Employees</span>
                            <span class="meta-item"><i class="fas fa-map-marked-alt"></i> Colombo</span>
                        </div>
                        <div class="social-media mb-2">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="company-address"><i class="fas fa-home"></i> No. 20, R. A. De Mel Mawatha, Colombo 03.
                        </p>
                        <div class="divider"></div>
                    </div>

                    <div class="company-description">
                        <p>DigitalX Lanka is a brand that defines timeless beauty, elegance and functionality, through a range
                            of inspiring products and concepts. Distinct in sheer sophistication and state-of-the-art
                            design, we create</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-dev.4/dist/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [['bold', 'italic', 'underline'], [{ list: 'ordered' }, { list: 'bullet' }], ['link'], ['clean']],
            },
            placeholder: 'Write your cover letter here...',
        });

        function removeCV() {
            document.getElementById('cv-upload').value = '';
            document.getElementById('cv-card').style.display = 'none';
            document.getElementById('selected-cv').style.display = 'none';
            document.getElementById('checkmark').style.display = 'none';
        }

        document.getElementById('cv-upload').addEventListener('change', function (event) {
            const file = event.target.files[0];
            const maxSize = 2 * 1024 * 1024;

            if (!file || file.type !== 'application/pdf') {
                alert('Only PDF files are allowed.');
                return;
            }

            if (file.size > maxSize) {
                alert('File size exceeds 2MB limit.');
                return;
            }

            const fileURL = URL.createObjectURL(file);
            const filename = file.name;

            document.getElementById('cv-preview').src = `${fileURL}#toolbar=0&navpanes=0&scrollbar=0&view=FitH`;
            document.getElementById('cv-link').href = fileURL;
            document.getElementById('cv-filename').textContent = filename;
            document.getElementById('cv-file-name-text').textContent = filename;

            document.getElementById('cv-card').style.display = 'block';
            document.getElementById('checkmark').style.display = 'block';
            document.getElementById('selected-cv').style.display = 'block';
        });
    </script>
</body>

</html>
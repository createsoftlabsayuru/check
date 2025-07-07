<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate - Marketing | Hemas Consumer Brands - XpressJobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/job-apply.css')}}">
    <link rel="stylesheet" href="{{ asset('css/user/menu-signup-login-modal.css') }}">
</head>

<body>
    @include('user.partials.navbar')
    @include('user.partials.sidebar')
    @include('user.partials.login-modal')
    @include('user.partials.signup-modal')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="job-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h1 class="job-title">Associate - Marketing</h1>
                            <h2 class="company-name">Hemas Consumer Brands</h2>
                            <div class="job-meta">
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Colombo, Sri Lanka</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-briefcase"></i>
                                    <span>Full-time</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Posted 2 days ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/hcb.jpg') }}" alt="Hemas Logo"
                            class="company-logo">
                    </div>

                    <a href="{{ route('user.jobApplication')}}"><button class="apply-btn">Apply Now</button></a>

                    <div class="job-actions">
                        <button class="action-btn"><i class="far fa-bookmark"></i> Save</button>
                        <button class="action-btn"><i class="fas fa-share-alt"></i> Share</button>
                        <button class="action-btn"><i class="fas fa-flag"></i> Report</button>
                    </div>
                </div>

                <div class="job-content">
                    <h3 class="section-title">Job Description</h3>
                    <p>We are looking for a dynamic and results-driven Marketing Associate to join our team at Hemas
                        Consumer Brands. The ideal candidate will be passionate about marketing and brand management,
                        with a keen eye for detail and creativity.</p>

                    <h4>Key Responsibilities:</h4>
                    <ul>
                        <li>Assist in developing and implementing marketing strategies and campaigns</li>
                        <li>Conduct market research and analyze consumer behavior</li>
                        <li>Coordinate with creative teams to develop marketing materials</li>
                        <li>Monitor and report on the effectiveness of marketing campaigns</li>
                        <li>Assist in organizing promotional events and product launches</li>
                        <li>Maintain relationships with media agencies and vendors</li>
                        <li>Monitor competitor activity and industry trends</li>
                    </ul>

                    <div class="job-description-image-card">
                        <img src="{{ asset('https://via.placeholder.com/800x400?text=Marketing+Career+Opportunities') }}"
                            alt="Marketing Career">
                    </div>

                    <h3 class="section-title">Requirements</h3>
                    <h4>Qualifications:</h4>
                    <ul>
                        <li>Bachelor's degree in Marketing, Business Administration, or related field</li>
                        <li>1-2 years of experience in marketing</li>
                        <li>Excellent communication and interpersonal skills</li>
                        <li>Strong analytical and project management skills</li>
                        <li>Proficiency in Microsoft Office and marketing software</li>
                        <li>Creative thinking and problem-solving skills</li>
                    </ul>

                    <h3 class="section-title">Benefits</h3>
                    <ul>
                        <li>Competitive salary package</li>
                        <li>Comprehensive health insurance</li>
                        <li>Performance bonuses</li>
                        <li>Opportunities for career growth and development</li>
                        <li>Dynamic and supportive work environment</li>
                    </ul>

                    <div class="mt-4">
                        <a href="{{ route('user.jobApplication')}}"><button class="apply-btn">Apply Now</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="job-content mb-4">
                    <h3 class="section-title">About Hemas Consumer Brands</h3>
                    <p>Hemas Consumer Brands is a leading FMCG company in Sri Lanka, offering a diverse portfolio of
                        household and personal care products that touch millions of lives every day.</p>
                    <p>As part of Hemas Holdings PLC, we are committed to enhancing the lives of Sri Lankans through
                        quality products and innovative solutions.</p>
                    <a href="#" class="btn btn-outline-primary">View Company Profile</a>
                </div>

                <div class="job-content similar-jobs">
                    <h3 class="section-title">Similar Jobs</h3>

                    <div class="similar-job-card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Marketing Executive</h5>
                                <p class="company-name">Unilever Sri Lanka</p>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Colombo</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Posted 1 week ago</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/Virtusa-logo.jpeg ') }}" alt="Unilever Logo"
                                class="similar-job-logo">
                        </div>
                    </div>

                    <div class="similar-job-card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Brand Assistant</h5>
                                <p class="company-name">Nestlé Lanka</p>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Colombo</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Posted 3 days ago</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/simcentric_logo.jpeg') }}" alt="Nestlé Logo"
                                class="similar-job-logo">
                        </div>
                    </div>

                    <div class="similar-job-card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Digital Marketing Specialist</h5>
                                <p class="company-name">Dialog Axiata</p>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Colombo</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Posted 5 days ago</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/creativesoftware_logo.jpeg') }}" alt="Dialog Logo"
                                class="similar-job-logo">
                        </div>
                    </div>
                    <a href="#" class="btn btn-link mt-2">View all similar jobs</a>
                </div>
                <div class="ad-slider-vertical">
                    <div class="ad-vertical-slide">
                        <img src="{{ asset('images/image1.jpg') }}" alt="Career Guide">
                    </div>
                    <div class="ad-vertical-slide">
                        <img src="{{ asset('images/image2.png') }}" alt="Interview Tips">
                    </div>
                    <div class="ad-vertical-slide">
                        <img src="{{ asset('images/image3.png') }}" alt="Job Search">
                    </div>
                </div>
            </div>
        </div>

        <div class="ad-slider-section">
            <h3 class="ad-slider-title">Featured Opportunities</h3>
            <div class="ad-slider">
                <div class="ad-slide">
                    <a href="#">
                        <img src="{{ asset('images/image1.jpg') }}" alt="Job Fair Ad">
                    </a>
                </div>
                <div class="ad-slide">
                    <a href="#">
                        <img src="{{ asset('images/image2.png') }}" alt="Recruitment Services">
                    </a>
                </div>
                <div class="ad-slide">
                    <a href="#">
                        <img src="{{ asset('images/image3.png') }}" alt="Career Courses">
                    </a>
                </div>
                <div class="ad-slide">
                    <a href="#">
                        <img src="{{ asset('images/image1.jpg') }}" alt="Resume Services">
                    </a>
                </div>
                <div class="ad-slide">
                    <a href="#">
                        <img src="{{ asset('images/image2.png') }}" alt="Top Employers">
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('user.partials.footer')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('js/job-apply.js')}}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaBuy Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin/Dashboard.css') }}">
   
</head>

<body>
    <div class="welcome-box">
        <img src="{{asset('images/robot.png') }}" alt="Welcome Avatar" class="welcome-image">
        WELCOME BACK, NIMANTHA...
    </div>
    <div class="main-container">
        <div class="left-column">
             <div class="stats-row">
                <div class="card-stat card-listings">
                    <div class="heading">NEW USERS</div>
                    <div class="title">All Listings</div>
                    <div class="number">04</div>
                    <div class="subtext">Total number of Listings</div>
                </div>

                <div class="card-stat card-enquiries">
                    <div class="heading">ENQUIRIES</div>
                    <div class="title">Enquiries</div>
                    <div class="number">03</div>
                    <div class="subtext">Total number of Enquiry</div>
                </div>
                <div class="card-stat card-followings">
                    <div class="heading">FOLLOWINGS</div>
                    <div class="title">Followings</div>
                    <div class="number">38</div>
                    <div class="subtext">Total number of Followings</div>
                </div>
            </div>

            <div class="profile-row">
                <div class="profile-card mb-3">
                    <div class="profile-card-header" style="background-image: url('images/usercover.jpg');">
                        <img src="{{asset('images/mine.jpg') }}" class="profile-img">
                        <span class="overlay-label">Profile page</span>
                    </div>
                    <div class="profile-card-body">
                        <div class="owner-name">M.A.N.Lakshan</div>
                        <div class="owner-since">Member 09 Jun 2025</div>
                    </div>
                </div>

                <div class="profile-card mb-3">
                    <div class="profile-card-header" style="background-image: url('images/usercover.jpg');">
                        <img src="{{asset('images/mine.jpg') }}" class="profile-img">
                        <span class="overlay-label">Business page</span>
                    </div>
                    <div class="profile-card-body">
                        <div class="owner-name">M.A.N.Lakshan</div>
                        <div class="owner-since">Member 09 Jun 2025</div>
                    </div>
                </div>

                <div class="profile-card mb-3">
                    <div class="profile-card-header" style="background-image: url('images/usercover.jpg');">
                        <img src="{{asset('images/mine.jpg') }}" class="profile-img">
                        <span class="overlay-label">Service Expert Profile</span>
                    </div>
                    <div class="profile-card-body">
                        <div class="owner-name">M.A.N.Lakshan</div>
                        <div class="owner-since">Member 09 Jun 2025</div>
                    </div>
                </div>

                <div class="profile-card mb-3">
                    <div class="profile-card-header" style="background-image: url('images/usercover.jpg');">
                        <img src="{{asset('images/mine.jpg') }}" class="profile-img">
                        <span class="overlay-label">Job Profile</span>
                    </div>
                    <div class="profile-card-body">
                        <div class="owner-name">M.A.N.Lakshan</div>
                        <div class="owner-since">Member 09 Jun 2025</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="right-column">
            <div class="promote-box">
                <h5>Promote My Business</h5>
                <p>Your listing show on the top of the respective category page</p>
                <button class="btn-yellow mt-2">START NOW</button>
            </div>

            <div class="points-box border-dashed mb-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{asset('images/trophy.png') }}" alt="Cup Icon" class="me-5">
                    <div>
                        <div class="point-title fw-bold text-uppercase">Your Points</div>
                        <div class="point-value">0</div>
                    </div>
                </div>
                <hr>
                <p class="fw-bold mb-1">Earn more credit points</p>
                <small>
                    Use these points to promote your listing.<br>
                    <a href="#">Click here...</a>
                </small>

                <button class="btn btn-primary btn-sm mt-3 px-4 fw-semibold">BUY POINTS</button>
            </div>


            <div class="community-card bg-community">
                <h6>Community Members</h6>
                <p>Follow your favorite business users and grow your online business now.</p>
                <button class="btn-yellow">COMMUNITY</button>
            </div>
        </div>
    </div>
</body>

</html>

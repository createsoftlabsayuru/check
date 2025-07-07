<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/admin/user-jobs.css') }}">
</head>

<body>
  <div class="container py-4">
    <!-- Header -->
    <div class="header-title">Job Details</div>
    <div class="underline mb-5"></div>

    <!-- Filters Row -->
    <div class="row align-items-start g-3">
      <div class="col-md-3 col-6">
        <select class="form-select">
          <option>Job type</option>
        </select>
      </div>
      <div class="col-md-5 col-6">
        <div class="search-input">
          <input type="text" class="form-control" placeholder="Search your job" />
          <span class="material-symbols-rounded search-icon">search</span>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="d-flex flex-column align-items-md-end align-items-start">
          <button class="btn btn-add mb-2">
            <span class="material-symbols-rounded align-middle">add</span>
            Add New Job
          </button>
          <div class="d-flex">
            <button class="btn btn-draft me-2">Draft</button>
            <button class="btn-delete">
              <span class="material-symbols-rounded">delete</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Job Cards -->
    <div class="row mt-4 g-4">
      <!-- Repeat this col for 8 job cards -->
      <!-- You can dynamically load this in production -->
      <!-- Sample static version here: -->
      <!-- Card 1 to 8 -->
      <!-- Just changing the title slightly for demo -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="{{ asset('images/job1.jpg')}}" class="job-image img-fluid" alt="Job Image">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Deimler auto</h6>
            <p class="text-muted mb-1 small">21 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★★★</span>
              <span class="text-muted ms-2 small">(65)</span>
              <span class="text-muted ms-2 small">10k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD 2 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job2.jpg" class="job-image img-fluid" alt="Job 2">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Tesla Motors</h6>
            <p class="text-muted mb-1 small">20 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★★☆</span>
              <span class="text-muted ms-2 small">(52)</span>
              <span class="text-muted ms-2 small">8k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job3.jpg" class="job-image img-fluid" alt="Job 3">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Nissan Lanka</h6>
            <p class="text-muted mb-1 small">19 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★★☆</span>
              <span class="text-muted ms-2 small">(43)</span>
              <span class="text-muted ms-2 small">6.2k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job4.jpg" class="job-image img-fluid" alt="Job 4">
          <div class="p-3">
            <h6 class="fw-bold mb-1">BMW Sri Lanka</h6>
            <p class="text-muted mb-1 small">18 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★☆☆</span>
              <span class="text-muted ms-2 small">(37)</span>
              <span class="text-muted ms-2 small">4.8k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 5 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job5.jpg" class="job-image img-fluid" alt="Job 5">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Toyota Lanka</h6>
            <p class="text-muted mb-1 small">17 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★☆☆</span>
              <span class="text-muted ms-2 small">(31)</span>
              <span class="text-muted ms-2 small">3.5k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 6 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job6.jpg" class="job-image img-fluid" alt="Job 6">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Lanka Ashok</h6>
            <p class="text-muted mb-1 small">16 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★☆☆</span>
              <span class="text-muted ms-2 small">(28)</span>
              <span class="text-muted ms-2 small">3.1k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 7 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job7.jpg" class="job-image img-fluid" alt="Job 7">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Honda Motors</h6>
            <p class="text-muted mb-1 small">15 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★☆☆</span>
              <span class="text-muted ms-2 small">(24)</span>
              <span class="text-muted ms-2 small">2.7k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 8 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="job-card">
          <img src="images/job8.jpg" class="job-image img-fluid" alt="Job 8">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Mitsubishi SL</h6>
            <p class="text-muted mb-1 small">14 Jun 2025</p>
            <div class="d-flex align-items-center mb-2">
              <span class="text-warning">★★★☆☆</span>
              <span class="text-muted ms-2 small">(19)</span>
              <span class="text-muted ms-2 small">2.1k</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark">Active</span>
              <div class="icon-group">
                <span class="material-symbols-rounded icon-btn">edit</span>
                <span class="material-symbols-rounded icon-btn">delete</span>
                <span class="material-symbols-rounded icon-btn">visibility</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/tenders.css') }}">
</head>

<body>
    <div class="container py-4">
        <h5 class="fw-bold">Tenders</h5>
        <hr class="custom-hr">

        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
            <div class="d-flex gap-3 flex-wrap">
                <select class="form-select" style="width: 180px;">
                    <option>Category</option>
                </select>
                <div class="input-group" style="width: 240px;">
                    <input type="text" class="form-control" placeholder="Search your Tender...">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column align-items-end">
                <button class="btn btn-warning fw-semibold mb-2">+ Add Tenders</button>
                
            </div>
        </div>

        <div class="row g-4">
            <!-- 8 Cards -->
            <!-- Start Card -->
            <!-- Repeat this block 8 times -->
            <!-- Card Template -->
            <!-- Use the same content for each card -->
            <!-- Adjust logo.png as needed -->
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="images/plaid.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <!-- Repeat for 2 to 8 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="tender-card p-3 position-relative">
                    <img src="logo.png" alt="Logo" class="company-logo">
                    <h6 class="fw-bold mb-1">Veg Supplier</h6>
                    <p class="mb-1 deadline">Deadline : 20/06/2025</p>
                    <p class="mb-1 budget">Budget : 1,000</p>
                    <p class="email">plaidprivate@gmail.com</p>
                    <div class="action-icons">
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

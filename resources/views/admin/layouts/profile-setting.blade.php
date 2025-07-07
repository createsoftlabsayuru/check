<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/settings.css') }}">
</head>

<body>
    <div class="container">
        <h5 class=" underline-heading">Profile Setting</h5>
        <div class="form-container">
            <!-- Account Status -->
            <div class="setting-row">
                <div class="d-flex align-items-center flex-wrap">
                    <span class="setting-label m-0">Account status :</span>
                    <button id="statusToggle" class="toggle-btn active-status">Active</button>
                </div>
            </div>

            <!-- Modules -->
            <div class="setting-row">
                <div class="setting-label">Job module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jobModule" checked>
                    <label class="description" for="jobModule">Enable or Disable Job related feature in your
                        Dashboard</label>
                </div>
            </div>

            <div class="setting-row">
                <div class="setting-label">Service Expert module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="serviceModule" checked>
                    <label class="description" for="serviceModule">Enable or Disable Service Expert related feature in
                        your
                        Dashboard</label>
                </div>
            </div>

            <div class="setting-row">
                <div class="setting-label">Product module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="productModule" checked>
                    <label class="description" for="productModule">Enable or Disable Product related feature in your
                        Dashboard</label>
                </div>
            </div>

            <div class="setting-row">
                <div class="setting-label">Blog module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="blogModule" checked>
                    <label class="description" for="blogModule">Enable or Disable Blog related feature in your
                        Dashboard</label>
                </div>
            </div>

            <div class="setting-row">
                <div class="setting-label">Event module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="eventModule" checked>
                    <label class="description" for="eventModule">Enable or Disable Event related feature in your
                        Dashboard</label>
                </div>
            </div>

            <div class="setting-row">
                <div class="setting-label">Discoun & Coupon module :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="discountModule" checked>
                    <label class="description" for="discountModule">Enable or Disable Coupons related feature in your
                        Dashboard</label>
                </div>
            </div>

            <button class="btn-save">Save changes</button>
        </div>
    </div>

    <script>
        const statusBtn = document.getElementById("statusToggle");

        statusBtn.addEventListener("click", () => {
            statusBtn.classList.toggle("active-status");
            statusBtn.classList.toggle("deactive-status");
            statusBtn.innerText = statusBtn.classList.contains("active-status") ? "Active" : "Deactive";
        });
    </script>
</body>

</html>
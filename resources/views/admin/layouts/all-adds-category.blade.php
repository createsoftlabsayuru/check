<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ads Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/All ads.css') }}" />
</head>

<body>

    <div class="container">
        <!-- Ads Post -->
        <section>
            <h2>Ads Post</h2>
            <div class="grid-cards">
                <div class="card" style="background-image: url('../../images/pet.jpg')">Pets</div>
                <div class="card" style="background-image: url('../../images/titles.jpg')">Tiles</div>
                <div class="card" style="background-image: url('../../images/laptop.jpg')">Laptops</div>
                <div class="card" style="background-image: url('../../images/plots.jpg')">Plots</div>
                <div class="card" style="background-image: url('../../images/bikes.jpg')">Motorbikes</div>
                <div class="card" style="background-image: url('../../images/toys.jpg')">Toys</div>
                <div class="card" style="background-image: url('../../images/shoes.jpg')">Shoes</div>
                <div class="card" style="background-image: url('../../images/clothes.jpg')">Clothes</div>
                <div class="card" style="background-image: url('../../images/education.jpg')">Education</div>
                <div class="card" style="background-image: url('../../images/vehicles.jpg')">Vehicles</div>
            </div>
        </section>

        <!-- Trending Ads -->
        <section>
            <h2>Trending Ads</h2>
            <div class="trending-scroll">
                <div class="trending-card">
                    <div class="image-wrapper">
                        <img src="{{asset('images/bikes.jpg') }}" alt="Bike">
                        <span class="price">LKR 4000</span>
                    </div>
                    <div class="card-body">
                        <h4>Foot Cycle</h4>
                        <div class="info-row">
                            <p>AZUZ Pvt Ltd</p>
                            <span class="days-left">🔴 4 days left</span>
                        </div>
                    </div>
                </div>

                <div class="trending-card">
                    <div class="image-wrapper">
                        <img src="{{asset('images/watch.jpg') }}" alt="Bike">
                        <span class="price">LKR 4000</span>
                    </div>
                    <div class="card-body">
                        <h4>Foot Cycle</h4>
                        <div class="info-row">
                            <p>AZUZ Pvt Ltd</p>
                            <span class="days-left">🔴 4 days left</span>
                        </div>
                    </div>
                </div>
                <div class="trending-card">
                    <div class="image-wrapper">
                        <img src="{{asset('images/shoes.jpg') }}" alt="Bike">
                        <span class="price">LKR 4000</span>
                    </div>
                    <div class="card-body">
                        <h4>Foot Cycle</h4>
                        <div class="info-row">
                            <p>AZUZ Pvt Ltd</p>
                            <span class="days-left">🔴 4 days left</span>
                        </div>
                    </div>
                </div>
                <div class="trending-card">
                    <div class="image-wrapper">
                        <img src="{{asset('images/adapter.jpg') }}" alt="Bike">
                        <span class="price">LKR 4000</span>
                    </div>
                    <div class="card-body">
                        <h4>Foot Cycle</h4>
                        <div class="info-row">
                            <p>AZUZ Pvt Ltd</p>
                            <span class="days-left">🔴 4 days left</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Today Popular Ads -->
        <section>
            <h2>Today Popular Ads</h2>
            <div class="today-popular">
                <div class="left">
                    <span>💡</span>
                    <div>
                        <strong>Start adding a new Post</strong>
                        <p>You can send the suggestion or request to the Bizbook Admin</p>
                    </div>
                </div>
                <button class="btn-submit">Submit a Post ➜</button>
            </div>
        </section>
    </div>

</body>

</html>
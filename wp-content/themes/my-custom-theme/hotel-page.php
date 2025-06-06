<?php
/* Template Name: Hotel Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 class="display-3 display-sm-1 fw-bold text-center text-shadow-lg my-5">Welcome to Our Pet Hotel</h1>
                    <h4 class="mb-5">Your pets deserve the best stay while you're away.</h4>
                    <a href="/select-dates" class="btn btn-light btn-lg">Book Your Pets Stay</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Facilities Section -->
    <section class="our-story-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h6>Our Facilities</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Top-Notch Amenities for Your Pets</h2>
                    <p class="lead mb-4">We provide clean, comfortable, and safe facilities equipped with everything your pet needs for a happy stay.</p>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Facilities" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="bg-light our-services-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-6 order-md-1">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Service" class="img-fluid rounded w-100 mb-4">
                </div>
                <!-- Text on the right -->
                <div class="col-md-6 order-md-2">
                    <h6>Our Services</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Comprehensive Care and Grooming</h2>
                    <p class="lead mb-4">From daily walks to grooming and specialized care, we offer a variety of services to keep your pet happy and healthy.</p>
                    <a href="/services" class="btn btn-primary btn-lg">View All Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Prices Section -->
    <section class="our-prices-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <h6 class="text-uppercase text-center">Rates</h6>
            <h2 class="display-6 font-weight-bold mb-4 text-center">Affordable Pricing for Every Pet</h2>
            <p class="text-center mb-5 text-light lead">Choose the perfect accommodation option for your pet’s size and needs.</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="card-body text-center">
                            <p class="text-muted small">Dog accommodation</p>
                            <h4 class="mb-3 text-dark">Dog - Small</h4>
                            <h3 class="fw-bold text-primary mb-2">$45.00</h3>
                            <p class="text-muted mb-0">Per night</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="card-body text-center">
                            <p class="text-muted small">Dog accommodation</p>
                            <h4 class="mb-3 text-dark">Dog - Large</h4>
                            <h5 class="text-muted">
                                <del>$75.00</del>
                            </h5>
                            <h3 class="fw-bold text-primary mb-2">$60.00</h3>
                            <p class="text-success small mb-0">Includes 20% discount</p>
                            <p class="text-muted mb-0">Per night</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="card-body text-center">
                            <p class="text-muted small">Cat accommodation</p>
                            <h4 class="mb-3 text-dark">Cat - Any Size</h4>
                            <h3 class="fw-bold text-primary mb-2">$40.00</h3>
                            <p class="text-muted mb-0">Per night</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-info small">
                    Get an additional 5% off for each extra pet in the same booking!
                </p>
            </div>

            <!-- Book Now Section -->
            <div class="text-center mt-5">
                <a href="/select-dates" class="btn btn-primary btn-lg px-5">Reserve Your Room</a>
            </div>
        </div>
    </section>

    <!-- Luxury Section -->
    <section class="luxury-section py-5 text-center" style="background-color: #2874a6;">
        <div class="container text-light">
            <h4 class="font-weight-bold mb-2">Experience Luxury Pet Care</h4>
            <p class="display-6 font-weight-bold mb-4">Pamper your pets with our exclusive luxury suites and personalized services.</p>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

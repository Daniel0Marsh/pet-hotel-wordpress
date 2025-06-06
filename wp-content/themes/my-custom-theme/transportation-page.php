<?php
/* Template Name: Transportation Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Transportation Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-3 fw-bold my-5">Safe, Comfortable Travel for Your Pets</h1>
            <h4 class="mb-5">We make sure your pets arrive in style and comfort</h4>
            <a href="/book-now" class="btn btn-light btn-lg">Book Now</a>
        </div>
    </section>

    <!-- About Our Transport -->
    <section class="py-5 text-light" style="background-color: #12343b;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Reliable Pet Transport</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Comfortable Rides for Every Pet</h2>
                    <p class="lead mb-4">Our experienced team ensures safe, timely, and stress-free transportation for your furry family members, whether it's a vet visit or a vacation pickup.</p>
                </div>
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Transportation Image" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Transportation Pricing -->
    <section class="py-5 bg-light text-dark">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Transportation Pricing</h2>
                <p class="lead text-muted">Simple, transparent rates for your pet's travel</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">Base Price</h5>
                            <p class="text-primary fs-4 mb-4">$25.00</p>
                            <h5 class="fw-bold mb-3">Fee Per Mile</h5>
                            <p class="text-primary fs-4 mb-0">$1.50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background-color: #2874a6;">
        <div class="container">
            <h2 class="fw-bold mb-4">Ready to Book a Ride?</h2>
            <p class="lead mb-4">Schedule your pet's next adventure or return trip in just a few clicks.</p>
            <a href="/book-now" class="btn btn-light btn-lg px-5">Arrange Transport</a>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

<?php
/* Template Name: Watersports Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Watersports Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-3 fw-bold my-5">Splash into Fun!</h1>
            <h4 class="mb-5">Exciting and safe water activities designed just for dogs.</h4>
            <a href="/book-now" class="btn btn-light btn-lg">Book Now</a>
        </div>
    </section>

    <!-- Our Watersports Section -->
    <section class="our-meals-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h6>Watersports for Dogs</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Adventure & Enrichment</h2>
                    <p class="lead mb-4">Our pet-friendly watersports offer stimulating fun and exercise, supervised by trained staff for your dog’s safety and joy.</p>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Dogs enjoying water activities" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Watersports Info Section -->
    <section class="py-5 text-dark bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">What We Offer</h2>
                <p class="lead text-muted">Tail-wagging watersport activities your dog will love.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Dock Diving</h5>
                                <p class="text-muted mb-3">Let your pup leap into fun! A great splash activity for energetic swimmers.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 30 mins</p>
                                <h6 class="fw-bold text-primary">$25.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Paddleboard Pup Rides</h5>
                                <p class="text-muted mb-3">Peaceful rides with your dog enjoying the sights and calm waters.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 45 mins</p>
                                <h6 class="fw-bold text-primary">$35.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Canine Kayaking</h5>
                                <p class="text-muted mb-3">A calm kayaking session where your furry friend can relax and soak up the sun.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 1 hr</p>
                                <h6 class="fw-bold text-primary">$40.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More activities can be added here -->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background-color: #2874a6;">
        <div class="container">
            <h2 class="fw-bold mb-4">Make a Splash with Us!</h2>
            <p class="lead mb-4">Let your dog enjoy a safe, fun-filled aquatic adventure. Book today!</p>
            <a href="/book-now" class="btn btn-light btn-lg px-5">Book Watersports</a>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

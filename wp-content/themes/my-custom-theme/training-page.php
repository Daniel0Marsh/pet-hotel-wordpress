<?php
/* Template Name: Training Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Training Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-3 fw-bold my-5">Professional Dog Training</h1>
            <h4 class="mb-5">Tailored programs to help your pet learn and thrive</h4>
            <a href="/book-now" class="btn btn-light btn-lg">Book Now</a>
        </div>
    </section>

    <!-- Our Training Section -->
    <section class="our-meals-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h6>Our Training</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Effective, Friendly, and Professional Training</h2>
                    <p class="lead mb-4">We provide structured training sessions tailored to your dog’s unique needs and behavior.</p>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Training" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Training Info Section -->
    <section class="py-5 text-dark bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Training Programs</h2>
                <p class="lead text-muted">Choose from a variety of packages designed to fit your schedule and your pet's learning pace.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Basic Obedience</h5>
                                <p class="text-muted mb-3">Teach your dog the basics like sit, stay, come, and leash manners.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 1.5 hrs</p>
                                <h6 class="fw-bold text-primary">$60.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Puppy Training</h5>
                                <p class="text-muted mb-3">Help your puppy develop good habits and socialize properly.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 2 hrs</p>
                                <h6 class="fw-bold text-primary">$75.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="text-center">
                                <h5 class="fw-bold mb-2">Advanced Behavior</h5>
                                <p class="text-muted mb-3">Tackle behavioral issues and refine obedience with custom strategies.</p>
                            </div>
                            <div class="text-center mt-auto">
                                <p class="text-secondary mb-1"><i class="bi bi-clock"></i> Duration: 2.5 hrs</p>
                                <h6 class="fw-bold text-primary">$90.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- You can duplicate or remove blocks as needed -->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background-color: #2874a6;">
        <div class="container">
            <h2 class="fw-bold mb-4">Ready to Start Training?</h2>
            <p class="lead mb-4">Book a session today and help your furry friend become their best self!</p>
            <a href="/book-now" class="btn btn-light btn-lg px-5">Book Now</a>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

<?php
/* Template Name: Grooming Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Grooming Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-3 fw-bold my-5">Professional Pet Grooming</h1>
            <h4 class="mb-5">Pamper your furry friend with our expert grooming services</h4>
            <a href="/booking" class="btn btn-light btn-lg">Book Now</a>
        </div>
    </section>

    <!-- Our Grooming Section -->
    <section class="our-meals-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h6>Our Grooming</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Gentle & Thorough Pet Care</h2>
                    <p class="lead mb-4">Our trained groomers use high-quality products and techniques to keep your pet clean, healthy, and looking great.</p>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Grooming" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Grooming Info Section -->
    <section class="py-5 text-dark bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Grooming Packages & Pricing</h2>
                <p class="lead text-muted">We offer flexible grooming packages tailored to different pet sizes and needs.</p>
            </div>

            <!-- Service Example -->
            <div class="mb-5">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1 text-center">
                        <h4 class="fw-semibold mb-1">Full Grooming Package</h4>
                        <p class="mb-0 text-muted">Includes bath, brush, haircut, nail trim, and ear cleaning.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Small Dog</p>
                                <h5 class="fw-bold text-primary mb-0">$45.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Medium Dog</p>
                                <h5 class="fw-bold text-primary mb-0">$60.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Large Dog</p>
                                <h5 class="fw-bold text-primary mb-0">$75.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more services or repeat the above block if needed -->

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background-color: #2874a6;">
        <div class="container">
            <h2 class="fw-bold mb-4">Ready to Give Your Pet the Best?</h2>
            <p class="lead mb-4">Book an appointment with our grooming experts today and see the difference!</p>
            <a href="/booking" class="btn btn-light btn-lg px-5">Book Now</a>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

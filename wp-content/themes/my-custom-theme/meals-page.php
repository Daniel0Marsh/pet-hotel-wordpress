<?php
/* Template Name: Meals Page */
get_header(); // Loads header.php
?>

<body class="bg-light">

    <!-- Meals Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center"
             style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-3 fw-bold my-5">Delicious Meals for Your Pets</h1>
            <h4 class="mb-5">Nutritious, Tasty & Tailored to Every Pet</h4>
            <a href="/book-now" class="btn btn-light btn-lg">Book Now</a>
        </div>
    </section>

    <!-- Our Meals Section -->
    <section class="our-meals-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h6>Our Meals</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Quality Ingredients, Carefully Prepared</h2>
                    <p class="lead mb-4">We offer a variety of healthy meals designed to suit the dietary needs of different pets. Whether it’s dry, wet, or custom meals — we’ve got you covered.</p>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Our Meals" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Meals Info Section -->
    <section class="py-5 text-dark bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Meal Options & Pricing</h2>
                <p class="lead text-muted">Choose the right meal for your pet based on size and preference. All meals are balanced and vet-approved.</p>
            </div>

            <!-- Service 1 -->
            <div class="mb-5">
                <div class="d-flex align-items-center text-center mb-3">
                    <div class="flex-grow-1">
                        <h4 class="fw-semibold mb-1">Standard Meal Plan</h4>
                        <p class="mb-0 text-muted">A daily meal plan including breakfast and dinner with standard ingredients.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Dog - Small</p>
                                <h5 class="fw-bold text-primary mb-0">$5.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Dog - Medium</p>
                                <h5 class="fw-bold text-primary mb-0">$7.50</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Dog - Large</p>
                                <h5 class="fw-bold text-primary mb-0">$10.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="mb-5">
                <div class="d-flex align-items-center text-center mb-3">
                    <div class="flex-grow-1">
                        <h4 class="fw-semibold mb-1">Premium Gourmet Plan</h4>
                        <p class="mb-0 text-muted">Includes fresh meat, fish, and organic ingredients tailored to pet dietary needs.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Cat - Small</p>
                                <h5 class="fw-bold text-primary mb-0">$6.50</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Cat - Medium</p>
                                <h5 class="fw-bold text-primary mb-0">$8.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-lg border-0">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <p class="text-muted mb-2">Cat - Large</p>
                                <h5 class="fw-bold text-primary mb-0">$9.50</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background-color: #2874a6;">
        <div class="container">
            <h2 class="fw-bold mb-4">Ready to Treat Your Pet?</h2>
            <p class="lead mb-4">Our meals are designed to keep your pets happy, healthy, and energized. Book their stay and meals today!</p>
            <a href="/book-now" class="btn btn-light btn-lg px-5">Book Now</a>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

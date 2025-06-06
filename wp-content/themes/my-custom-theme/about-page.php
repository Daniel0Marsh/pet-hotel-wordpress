<?php
/* Template Name: About Page */
get_header();  // Loads header.php
?>

<body class="bg-light">

    <!-- Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center" style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 class="display-3 fw-bold text-center text-shadow-lg my-5">Welcome to Our Pet Hotel</h1>
                    <h4 class="mb-5">We treat your pets like family.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="our-story-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Our Story</h6>
                    <h2 class="display-6 font-weight-bold mb-4">How We Began</h2>
                    <p class="lead mb-4">Our journey started with a love for animals and a vision to create a safe haven for pets while their owners are away.</p>
                </div>
                <div class="col-md-6">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Our Story" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="bg-light our-mission-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Our Mission" class="img-fluid rounded w-100 mb-4">
                </div>
                <div class="col-md-6 order-md-2">
                    <h6>Our Mission</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Providing Quality Care</h2>
                    <p class="lead mb-4">Our mission is to offer a warm, loving, and safe environment where your pet can feel at home.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="our-team-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Our Team</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Experienced & Passionate</h2>
                    <p class="lead mb-4">Meet the dedicated individuals who care for your pets with compassion and professionalism.</p>
                </div>
                <div class="col-md-6">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Our Team" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Commitment Section -->
    <section class="bg-light our-mission-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Our Commitment" class="img-fluid rounded w-100 mb-4">
                </div>
                <div class="col-md-6 order-md-2">
                    <h6>Our Commitment</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Safety & Love</h2>
                    <p class="lead mb-4">We’re committed to treating every pet with the love, patience, and respect they deserve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us-section py-5 text-light" style="background-color: #2874a6;">
        <div class="container text-center">
            <h2 class="display-4 font-weight-bold mb-5">Contact Us</h2>
            <p>If you'd like more information, have any questions, or want to book your pet's stay, feel free to contact us!</p>
            <p><strong>Phone:</strong> +44 1234 567890</p>
            <p><strong>Email:</strong> info@pethotel.com</p>
            <a href="/contact" class="btn btn-light btn-lg">Contact Us</a>
        </div>
    </section>

</body>

<?php get_footer(); ?>

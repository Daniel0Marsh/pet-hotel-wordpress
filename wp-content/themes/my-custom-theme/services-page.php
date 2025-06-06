<?php
/* Template Name: Services Page */
get_header(); // Loads header.php
?>

<body class="bg-light">
    <!-- Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center" style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 class="display-3 display-sm-1 fw-bold text-center text-shadow-lg my-5">Our Premium Services</h1>
                    <h4 class="mb-5">Providing the best care and experiences for your pets</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Hotel Section -->
    <section id="our-hotel" class="service-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Our Hotel</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Luxury Boarding Experience</h2>
                    <p class="lead mb-4">Our hotel offers a comfortable and safe environment where your pets feel right at home.</p>
                    <a href="/hotel" class="btn btn-light mb-4">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Hotel" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Meal Section -->
    <section id="our-meal" class="bg-light our-meal-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-6 order-md-1">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Meal" class="img-fluid rounded w-100 mb-4">
                </div>
                <!-- Text on the right -->
                <div class="col-md-6 order-md-2">
                    <h6>Our Meal Service</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Nutritious and Delicious</h2>
                    <p class="lead mb-4">We provide specially crafted meals to keep your pets healthy and happy.</p>
                    <a href="/training" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Training Service Section -->
    <section id="our-training" class="service-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Our Training Service</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Professional Pet Training</h2>
                    <p class="lead mb-4">We help your pets learn new skills and improve their behavior through expert training.</p>
                    <a href="/training" class="btn btn-light mb-4">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Training" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Grooming Service Section -->
    <section id="our-grooming" class="bg-light our-grooming-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-6 order-md-1">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Grooming" class="img-fluid rounded w-100 mb-4">
                </div>
                <!-- Text on the right -->
                <div class="col-md-6 order-md-2">
                    <h6>Our Grooming Service</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Pampering and Care</h2>
                    <p class="lead mb-4">Keep your pets looking their best with our professional grooming services.</p>
                    <a href="/hotel" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our WaterSports Section -->
    <section id="our-watersports" class="service-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Our WaterSports Service</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Fun and Exercise</h2>
                    <p class="lead mb-4">Exciting water activities to keep your pets active and entertained.</p>
                    <a href="/water_sports" class="btn btn-light mb-4">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our WaterSports" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Transportation Service Section -->
    <section id="our-transportation" class="bg-light our-transportation-section py-5 text-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-6 order-md-1">
                    <img src='/wp-content/themes/my-custom-theme/images/placeholder.jpg' alt="Our Transportation" class="img-fluid rounded w-100 mb-4">
                </div>
                <!-- Text on the right -->
                <div class="col-md-6 order-md-2">
                    <h6>Our Transportation Service</h6>
                    <h2 class="display-6 font-weight-bold mb-4">Safe and Reliable</h2>
                    <p class="lead mb-4">We provide secure transportation to and from our facilities for your convenience.</p>
                    <a href="/transportation" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>


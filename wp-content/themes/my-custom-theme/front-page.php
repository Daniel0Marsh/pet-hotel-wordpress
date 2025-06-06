<?php
/* Template Name: Home Page */
get_header(); // Loads header.php
?>

<body class="bg-light">
    <!-- Hero Section -->
    <section class="hero-section pb-5 bg-primary text-white text-center d-flex justify-content-center align-items-center min-vh-100" style="background-image: url('/wp-content/themes/my-custom-theme/images/placeholder.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay d-flex justify-content-center align-items-center min-vh-100" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h1 class="display-3 display-sm-1 fw-bold text-center text-shadow-lg mb-5">Welcome to Our Pet Hotel</h1>
                    <h4 class="mb-5">Caring for your pets like our own</h4>
                    <a href="/booking-page" class="btn btn-light btn-lg">Book Your Pets Stay</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6">
                    <h2 class="display-4 font-weight-bold mb-4">About Our Pet Hotel</h2>
                    <p class="lead mb-4">We provide a safe, fun, and loving environment for your pets when you're away.</p>
                    <a href="/about-us" class="btn btn-light btn-lg my-3">Learn More</a>
                </div>
                <!-- Image on the right -->
                <div class="col-md-6">
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" alt="Pet Hotel Image" class="img-fluid rounded w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Promise Section -->
    <section class="our-promise-section py-5 text-light" style="background-color: #2874a6;">
        <div class="container text-center">
            <h4 class="font-weight-bold mb-2">Our Promise</h4>
            <h2 class="display-6 font-weight-bold mb-4">Dedicated to Your Pet's Happiness</h2>
            <p class="lead mb-4">We promise to treat every pet as if they were our own family member.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-light services-section py-5 text-dark">
        <div class="container">
            <h2 class="display-4 font-weight-bold text-center mb-5">Our Services</h2>
            <div class="row">
                <!-- Hotel Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-house-door-fill" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Pet Hotel</h5>
                            <p class="card-text">Comfortable stays with 24/7 care and attention.</p>
                            <a href="/hotel" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Meal Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-cup-straw" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Meals</h5>
                            <p class="card-text">Nutritious and tasty meals tailored to your pet's needs.</p>
                            <a href="/meals" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Training Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-people" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Training</h5>
                            <p class="card-text">Professional training programs for pets of all ages.</p>
                            <a href="/training" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Grooming Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-scissors" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Grooming</h5>
                            <p class="card-text">Keep your pets looking and feeling their best.</p>
                            <a href="/grooming" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- WaterSports Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-droplet" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Water Sports</h5>
                            <p class="card-text">Fun and safe water activities for your pets.</p>
                            <a href="/water-sports" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Transportation Service -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-lg border-light h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-truck" style="font-size: 4rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">Transportation</h5>
                            <p class="card-text">Safe transport services to and from our facilities.</p>
                            <a href="/transportation" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="lifestyle-section py-0 text-center w-100" style="height: 40vh; overflow: hidden;">
        <video class="w-100 h-100" style="object-fit: cover;" autoplay muted loop playsinline controls>
            <source src="/wp-content/themes/my-custom-theme/images/default_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!-- Location Section -->
    <section class="location-section py-5 text-light" style="background-color: #082027;">
        <div class="container">
            <h2 class="display-4 font-weight-bold text-center mb-5">Our Location</h2>
            <div class="row">
                <!-- Location Info -->
                <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h4>Visit Us At:</h4>
                        <p><strong>Pet Hotel Pattaya</strong></p>
                        <p>123 Beach Road, Pattaya, Thailand</p>
                        <p><strong>Phone:</strong> +66 1234 5678</p>
                        <p><strong>Email:</strong> contact@pethotelpattaya.com</p>
                    </div>
                </div>
                <!-- Map Card -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg border-light" style="height: 100%;">
                        <div class="card-body p-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://maps.google.com/maps?q=Pattaya%2C%20Thailand&z=14&output=embed"
                                        width="100%" height="400" style="border:0;"
                                        allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lifestyle Section -->
    <section class="lifestyle-section py-5 text-center" style="background-color: #2874a6;">
        <div class="container text-light">
            <h4 class="font-weight-bold mb-2">Live the Lifestyle</h4>
            <p class="display-6 font-weight-bold mb-4">Experience the best care and fun for your pets.</p>
        </div>
    </section>

</body>

<?php
get_footer(); // Loads footer.php
?>

<?php
/* Template Name: Contact Page */
get_header(); // Loads header.php
?>

<body class="bg-light">
    <section id="contact" class="contact-section py-5 bg-light min-vh-100">
        <div class="container my-5">
            <div class="row align-items-center text-center">
                <!-- Left Column: Text and Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="display-4 display-sm-1 mb-4 fw-bold text-dark">Get in Touch</h2>
                    <p class="mb-5 fs-4 text-dark">We would love to hear from you! Please send us your questions or feedback.</p>
                    <img src="/wp-content/themes/my-custom-theme/images/placeholder.jpg" class="img-fluid rounded shadow-lg" alt="Contact Image">
                </div>

                <!-- Right Column: Form Card -->
                <div class="col-md-6">
                    <form method="POST" class="card shadow p-4 rounded-5 bg-white">
                        <!-- Normally WordPress nonces are used instead of CSRF tokens -->
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg border-0 shadow-sm" id="name" name="name" placeholder="Full Name..." required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control form-control-lg border-0 shadow-sm" id="email" name="email" placeholder="Email..." required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control form-control-lg border-0 shadow-sm" id="message" name="message" rows="5" placeholder="Your Message..." required></textarea>
                        </div>
                        <!-- Google reCAPTCHA -->
                        <div class="text-center mb-4">
                            <div class="g-recaptcha" data-sitekey="6LfrcisiAAAAAKrKu6q-Y4XV50r3U-GPyikxu4r7"></div>
                        </div>
                        <!-- Replace this with PHP to show success message if needed -->
                        <!-- <div class="alert alert-success mt-4">Your message has been sent!</div> -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 py-3 shadow-lg rounded-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!-- reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php
get_footer(); // Loads footer.php
?>

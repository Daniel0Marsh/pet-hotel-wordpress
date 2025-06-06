<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Website Title</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/my-custom-theme/images/favicon_2_transparent.ico" />

        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php wp_head(); ?>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #082027; z-index: 1000;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/wp-content/themes/my-custom-theme/images/logo_2_transparent.png" alt="Company Name" class="img-fluid" style="max-height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/services">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/services/hotel">Hotel</a></li>
                            <li><a class="dropdown-item" href="/services/meals">Meals</a></li>
                            <li><a class="dropdown-item" href="/services/pet-training">Pet Training</a></li>
                            <li><a class="dropdown-item" href="/services/grooming">Grooming</a></li>
                            <li><a class="dropdown-item" href="/services/water-sports">WaterSports</a></li>
                            <li><a class="dropdown-item" href="/services/transportation">Transportation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/about-us">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

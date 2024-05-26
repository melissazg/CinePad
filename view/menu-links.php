<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "styles.css" ?>">

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?= JS_URL . "scripts.js" ?>"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL . "index" ?>"><img src="<?= IMAGES_URL . "cinepad-logo.png" ?>" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . "logout." ?>">Log Out</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . "user/register" ?>">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . "user/login" ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
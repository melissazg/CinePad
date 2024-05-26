<title>CinePad</title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "cards.css" ?>">

<?php include("view/menu-links.php"); ?>

<!-- Masthead-->
<header class="masthead">
    <div class="container">
    <div class="masthead-heading text-uppercase">Welcome to CinePad!</div>
    <div class="masthead-subheading">Let's Make Magic Together</div>
    <?php if (!isset($_SESSION['user_logged_in'])) : ?>
        <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo BASE_URL . "user/register"; ?>">Get Started</a>
    <?php else : ?>
        <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo BASE_URL . "video"; ?>">Explore</a>
    <?php endif; ?>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-server fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Video Hosting</h4>
                <p class="text-muted">Upload and publish your creative videos easily on a platform designed specifically for emerging filmmakers and video artists.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Community Engagement</h4>
                <p class="text-muted">Engage with an active community of like-minded creators through comments, likes, and direct messaging.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-money-bill-wave fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Monetization Opportunities</h4>
                <p class="text-muted">Take advantage of our monetization tools that allow you to earn revenue from your videos through ad shares, sponsorships, and exclusive content offerings.</p>
            </div>
        </div>
    </div>
</section>
<!-- Short Films Grid-->
<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Recent Short Films</h2>
        </div>

        <div class="container-fluid mb-4">
            <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                <?php foreach ($videos as $video): ?>

                    <a href="<?= BASE_URL . "video?idVideo=" . $video["idVideo"] ?>">
                        <div class="col mt-4">
                            <div class="card">
                                <img src="<?= $video["cover"] ?>" alt="<?= $video["title"] ?>" style="min-height: 250px">
                            </div>
                        </div>
                    </a>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<?php include("view/footer.php"); ?>
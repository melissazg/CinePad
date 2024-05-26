<title>CinePad - Short Films</title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<?php include("view/menu-links.php"); ?>

<!-- Short Films Grid-->
<section class="page-section bg-light">
    <div class="container">
        <div class="d-flex justify-content-end align-items-center">
            <label for="upload">Are you a filmmaker? Upload your own story!</label>
            &nbsp<a class="btn btn-warning" href="<?php echo BASE_URL . "video/add"; ?>">Upload</a>
        </div>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Short Films</h2>
        </div>

        <div class="container-fluid mb-4">
            <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                <?php foreach ($videos as $video): ?>

                    <a href="<?= BASE_URL . "video?idVideo=" . $video["idVideo"] ?>">
                        <div class="col mt-4">
                            <div class="card">
                                <img src="<?= $video["cover"] ?>" alt="<?= $video["title"] ?>" style="height: 250px">
                            </div>
                        </div>
                    </a>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<?php include("view/footer.php"); ?>
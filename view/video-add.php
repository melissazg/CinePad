<title>CinePad - Add Short Films</title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<?php include("view/menu-links.php"); ?>

<section class="page-section">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add a video</h3>
                        <form action="<?= BASE_URL . "video/add" ?>" method="post">

                            <?php if (!empty($errorMessage)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $errorMessage ?>
                                </div>
                            <?php elseif (!empty($successMessage)): ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $successMessage ?> Click <a href="<?= BASE_URL . "video" ?>">here</a> to redirect.
                                </div>
                            <?php endif; ?>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="cover">Cover page</label>
                                    <input type="url" id="cover" name="cover" class="form-control form-control-lg" required />
                                </div>

                            </div>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control form-control-lg" required />
                                </div>

                            </div>
                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control form-control-lg" required></textarea>
                                </div>

                            </div>
                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="author">Author</label>
                                    <input type="text" id="author" name="author" class="form-control form-control-lg" required />
                                </div>

                            </div>
                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="category">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="" disabled selected>Select your option</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Science-fiction">Science Fiction</option>
                                        <option value="Fantasy">Fantasy</option>
                                        <option value="Thriller">Thriller</option>
                                        <option value="Documentary">Documentary</option>
                                        <option value="Animation">Animation</option>
                                        <option value="Romance">Romance</option>
                                    </select>
                                </div>

                            </div>

                            <div class="mt-4 pt-2 text-center">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Confirm" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("view/footer.php"); ?>
<title>CinePad - Edit Short Films</title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<?php include("view/menu-links.php"); ?>

<section class="page-section">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Edit a video</h3>
                        <form action="<?= BASE_URL . "video/edit" ?>" method="post">

                            <div class="col-md-12 mb-4">

                                <input type="hidden" name="idVideo" value="<?= $video["idVideo"] ?>"  />

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="cover">Cover page</label>
                                    <input type="url" id="cover" name="cover" class="form-control form-control-lg" value="<?= $video["cover"] ?>" required />
                                </div>

                            </div>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control form-control-lg" value="<?= $video["title"] ?>" required />
                                </div>

                            </div>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control form-control-lg" required><?= $video["description"] ?></textarea>
                                </div>

                            </div>

                            <input type="hidden" name="author" value="<?= $video["author"] ?>"  />

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="category">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="" disabled>Select your option</option>
                                        <option value="Drama" <?= $video["category"] == "Drama" ? 'selected' : '' ?>>Drama</option>
                                        <option value="Comedy" <?= $video["category"] == "Comedy" ? 'selected' : '' ?>>Comedy</option>
                                        <option value="Horror" <?= $video["category"] == "Horror" ? 'selected' : '' ?>>Horror</option>
                                        <option value="Science-fiction" <?= $video["category"] == "Science-fiction" ? 'selected' : '' ?>>Science Fiction</option>
                                        <option value="Fantasy" <?= $video["category"] == "Fantasy" ? 'selected' : '' ?>>Fantasy</option>
                                        <option value="Thriller" <?= $video["category"] == "Thriller" ? 'selected' : '' ?>>Thriller</option>
                                        <option value="Documentary" <?= $video["category"] == "Documentary" ? 'selected' : '' ?>>Documentary</option>
                                        <option value="Animation" <?= $video["category"] == "Animation" ? 'selected' : '' ?>>Animation</option>
                                        <option value="Romance" <?= $video["category"] == "Romance" ? 'selected' : '' ?>>Romance</option>
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
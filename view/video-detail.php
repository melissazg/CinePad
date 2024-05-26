<title>CinePad - <?= $video["title"] ?></title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<?php include("view/menu-links.php"); ?>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><?= $video["title"] ?></h2>
        </div>

        <div class="container-fluid mb-4">
            <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col mt-4">
                    <div class="card">
                        <img src="<?= $video["cover"] ?>" alt="<?= $video["title"] ?>" style="min-height: 250px">
                    </div>
                </div>
            </div>
        </div>

        <hr class="divider my-4">

        <div class="info-container">
            <div class="category-info">
                <i class="fa-solid fa-film"></i><span>&nbsp;<?= htmlspecialchars($video["category"]) ?></span>
            </div>
            <div class="author-info">
                <i class="fa-solid fa-user"></i><span>&nbsp;<?= htmlspecialchars($video["author"]) ?></span>
            </div>
        </div>

        <div class="description-container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Description</h4>

                <div class="container-fluid mb-4">
                    <p><?= $video["description"] ?></p>
                </div>
            </div>
        </div>
        <form action="<?= BASE_URL . "video/delete" ?>" method="post">
            <div class="text-center">
                <input type="hidden" name="idVideo" value="<?= $video["idVideo"] ?>"  />
                <a class="btn btn-primary" href="<?= BASE_URL . "video/edit?idVideo=" . $video["idVideo"] ?>">Edit</a>
                
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete <?= $video["title"] ?>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </form>

    </div>
</section>

<?php include("view/footer.php"); ?>
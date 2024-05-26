<title>CinePad - Register</title>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<?php include("view/menu-links.php");?>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

<section class="page-section">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration</h3>
                        <form action="<?= BASE_URL . "user/register" ?>" method="post">

                            <?php if (!empty($errorMessage)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $errorMessage ?>
                                </div>
                            <?php elseif (!empty($successMessage)): ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $successMessage ?> Click to <a href="<?= BASE_URL . "user/login" ?>">login</a>.
                                </div>
                            <?php endif; ?>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" required />
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" required />
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-4">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <label for="dateOfBirth" class="form-label">Date of birth</label>
                                        <input type="date" class="form-control form-control-lg" id="dateOfBirth" name="dateOfBirth" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" required />
                            </div>

                            </div>
                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                                </div>

                            </div>

                            <div class="mt-4 pt-2 text-center">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Register" />
                            </div>

                            <div class="mt-4 pt-2 text-center">
                                Already have an account? <a href="<?= BASE_URL . "user/login" ?>">Login</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>

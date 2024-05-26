<title>CinePad - Login</title>

<?php include("view/menu-links.php"); ?>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">

<section class="page-section">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Login</h3>
                        <form action="<?= BASE_URL . "user/login" ?>" method="post">

                        <?php if (!empty($errorMessage)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errorMessage ?>
                            </div>
                        <?php endif; ?>

                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" required />
                                </div>

                            </div>
                            <div class="col-md-12 mb-4">

                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password"  name="password" class="form-control form-control-lg" required />
                                </div>

                            </div>

                            <div class="mt-4 pt-2 text-center">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Login" />
                            </div>

                            <div class="mt-4 pt-2 text-center">
                                Don't have an account? <a href="<?= BASE_URL . "user/register" ?>">Register</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
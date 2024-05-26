<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

require_once("controller/VideoController.php");
require_once("controller/UserController.php");

define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
define("IMAGES_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "assets/img/");
define("CSS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "assets/css/");
define("JS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "assets/js/");

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

$urls = [
    "index" => function () {
        VideoController::index();
    },
    "user/register" => function () {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            UserController::register();
        } else {
            UserController::showRegisterForm();
        }
    },
    "user/login" => function () {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            UserController::login();
        } else {
            UserController::showLoginForm();
        }
    },
    "logout" => function () {
        UserController::logout();
    },
    "video" => function () {
        VideoController::showVideoList();
    },
    "video/add" => function () {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            VideoController::addVideo();
        } else {
            VideoController::showAddForm();
        }
    },
    "video/edit" => function () {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            VideoController::edit();
        } else {
            VideoController::showEditForm();
        }
    },
    "video/delete" => function () {
        VideoController::delete();
    },
    "" => function () {
        ViewHelper::redirect(BASE_URL . "index");
    },
];

try {
    if (isset($urls[$path])) {
       $urls[$path]();
    } else {
        echo "No controller for '$path'";
    }
} catch (Exception $e) {
    echo "An error occurred: <pre>$e</pre>";
    // ViewHelper::error404();
} 

?>
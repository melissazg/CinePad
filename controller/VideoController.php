<?php

require_once("model/VideoDB.php");
require_once("ViewHelper.php");

class VideoController {

    public static function index() {
        ViewHelper::render("view/main.php", ["videos" => VideoDB::getLastFiveVideos()]);
    }
    
    public static function showVideoList() {
        if (isset($_GET["idVideo"])) {
            ViewHelper::render("view/video-detail.php", ["video" => VideoDB::get($_GET["idVideo"])]);
        } else {
            ViewHelper::render("view/video-list.php", ["videos" => VideoDB::getAll()]);
        }
    }

    public static function showAddForm() {
        ViewHelper::render("view/video-add.php");
    }

    public static function addVideo() {
        if (VideoDB::insert($_POST['title'], $_POST['description'], $_POST['author'], $_POST['category'], $_POST['cover'])) {
            $vars = [
               "successMessage" => "Your video was successfully uploaded."
            ];
            ViewHelper::render("view/video-add.php", $vars);
        } else {
            $vars = [
               "errorMessage" => "Error while uploading video."
            ];
            ViewHelper::render("view/video-add.php", $vars);
        }
    }

    public static function showEditForm($vars = []) {
        if (isset($_GET["idVideo"])) {
            ViewHelper::render("view/video-edit.php", ["video" => VideoDB::get($_GET["idVideo"])]);
        } else {
            ViewHelper::render("view/video-list.php", ["videos" => VideoDB::getAll()]);
        }
    }

    public static function edit() {
        if (VideoDB::update($_POST["idVideo"], $_POST["title"], $_POST["description"], $_POST["author"], $_POST["category"], $_POST["cover"])) {
            ViewHelper::redirect(BASE_URL . "video?idVideo=" . $_POST["idVideo"]);
        }
    }

    public static function delete() {
        if (VideoDB::delete($_POST["idVideo"])) {
            ViewHelper::render("view/video-list.php", ["videos" => VideoDB::getAll()]);
            var_dump($_POST["idVideo"]);
        }
        var_dump("FAILEDDD");
    }

}
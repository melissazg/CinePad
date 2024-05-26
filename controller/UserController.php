<?php

require_once("model/UserDB.php");
require_once("ViewHelper.php");

class UserController {

   public static function showLoginForm() {
      ViewHelper::render("view/login.php");
   }

   public static function showRegisterForm() {
      ViewHelper::render("view/register.php");
   }

   public static function login() {
      session_start();
      if (UserDB::validLoginAttempt($_POST["emailAddress"], $_POST["password"])) {
         $vars = [
            "emailAddress" => $_POST["emailAddress"],
            "videos" => VideoDB::getLastFiveVideos()
         ];
         $_SESSION['user_logged_in'] = true;
         ViewHelper::render("view/main.php", $vars);
         exit;
      } else {
         ViewHelper::render("view/login.php", ["errorMessage" => "Invalid credentials."]);
      }
   }

   public static function register() {
      if (UserDB::validRegistration($_POST['firstName'], $_POST['lastName'], $_POST['dateOfBirth'], $_POST['emailAddress'], $_POST['password'])) {
         $vars = [
            "emailAddress" => $_POST["emailAddress"],
            "successMessage" => "You're successfully registered."
         ];
         ViewHelper::render("view/register.php", $vars);
      } else {
         $vars = [
            "errorMessage" => "Email address is already used."
         ];
         ViewHelper::render("view/register.php", $vars);
      }
   }

   public static function logout() {
      ViewHelper::render("view/logout.php");
   }
 
}
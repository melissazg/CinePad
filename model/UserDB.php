<?php

require_once "DBInit.php";

class UserDB {

    public static function validLoginAttempt($emailAddress, $password) {
        $dbh = DBInit::getInstance();
    
        $query = "SELECT password FROM user WHERE emailAddress = :emailAddress";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':emailAddress', $emailAddress, PDO::PARAM_STR);
        $stmt->execute();
    
        $hashedPassword = $stmt->fetchColumn();
        if ($hashedPassword === false) {
            return false;
        }
    
        return password_verify($password, $hashedPassword);
    }    

    public static function validRegistration($firstName, $lastName, $dateOfBirth, $emailAddress, $password) {
        $dbh = DBInit::getInstance();

        // Check if the user already exists
        $checkQuery = "SELECT idUser FROM user WHERE emailAddress = :emailAddress";
        $checkStmt = $dbh->prepare($checkQuery);
        $checkStmt->bindParam(':emailAddress', $emailAddress, PDO::PARAM_STR);
        $checkStmt->execute(); 

        if ($checkStmt->fetchColumn() > 0) {
            return false;
        }

        // User does not exist, proceed with registration
        $insertQuery = "INSERT INTO user (firstName, lastName, dateOfBirth, emailAddress, password)
        VALUES (:firstName, :lastName, :dateOfBirth, :emailAddress, :password)";
        $insertStmt = $dbh->prepare($insertQuery);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertStmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $insertStmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $insertStmt->bindParam(':dateOfBirth', $dateOfBirth, PDO::PARAM_STR);
        $insertStmt->bindParam(':emailAddress', $emailAddress, PDO::PARAM_STR);
        $insertStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

        if ($insertStmt->execute()) {
            return true; // Registration successful
        } else {
            return false; // Registration failed
        }
    }
    
}
?>

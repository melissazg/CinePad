<?php

require_once "DBInit.php";

class VideoDB {

    public static function get($idVideo) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT idVideo, title, description, author, category, author, cover 
            FROM video WHERE idVideo = :idVideo");
        $statement->bindParam(":idVideo", $idVideo, PDO::PARAM_INT);
        $statement->execute();

        $video = $statement->fetch();

        if ($video != null) {
            return $video;
        } else {
            throw new InvalidArgumentException("No record with id $idVideo");
        }
    }

    public static function getAll() {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT idVideo, title, description, author, category, cover FROM video");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getLastFiveVideos() {
        $db = DBInit::getInstance();
    
        $statement = $db->prepare("SELECT idVideo, title, description, author, category, cover 
                                   FROM video 
                                   ORDER BY idVideo DESC 
                                   LIMIT 5");
        $statement->execute();
    
        return $statement->fetchAll();
    }

    public static function insert($title, $description, $author, $category, $cover) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("INSERT INTO video (title, description, author, category, cover) 
            VALUES (:title, :description, :author, :category, :cover)");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":author", $author);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":cover", $cover);
        if ($statement->execute()) {
            return true; // Upload successful
        } else {
            return false; // Upload failed
        }
    }

    public static function update($idVideo, $title, $description, $author, $category, $cover) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("UPDATE video SET title = :title, description = :description, 
            author = :author, category = :category, cover = :cover WHERE idVideo = :idVideo");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":author", $author);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":cover", $cover);
        $statement->bindParam(":idVideo", $idVideo, PDO::PARAM_INT);
        if ($statement->execute()) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    public static function delete($idVideo) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("DELETE FROM video WHERE idVideo = :idVideo");
        $statement->bindParam(":idVideo", $idVideo, PDO::PARAM_INT);
        if ($statement->execute()) {
            return true; // Delete successful
        } else {
            return false; // Delete failed
        }
    }
    
}
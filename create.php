<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $errors = [];

    if (!Validator::string($_POST["name"], min: 1, max: 255)) {
        $errors["name"] = "title cannot be empty or too long";
    }

    if (!Validator::string($_POST["authors"], min:1,max:255)){
        $errors["authors"] = "authors id invalid";
    }

    if (!Validator::string($_POST["year_came_out"], min:1,max:4)){
        $errors["authors"] = "authors id invalid";
    }

    if (empty($errors)) {
        $query = " INSERT INTO books (name, authors, year_came_out) 
        VALUE (:name, :authors, :year_came_out);";
        $params = [
        ":name" => $_POST["name"],
        ":authors" => $_POST["authors"],
        ":year_came_out" => $_POST["year_came_out"],
        ":id" => $_POST["id"]
        ];
   
        $db->execute($query, $params);
        header('location: /');
        die();

 }
}




$title = "create a post";
require "views/books/create.view.php";
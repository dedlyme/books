<?php

require "Database.php";
$config = require "config.php";



$errors = [];


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $password = $_POST["password"];           
    $username = $_POST["user"];
    $query = "SELECT * FROM auth WHERE user = :user AND password = :password";
    $params = [":user" => $username, ":password" => $password];
    $db = new DataBase($config);
    $result1 = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM auth WHERE user = :user";
    $params = [":user" => $username];
    $db = new DataBase($config);
    $result2 = $db->execute($query, $params)->fetch();
    if($result1 != false)
    {
        $errors["register"] = "You already have an account!";
    }else if($result2 != false)
    {
        $errors["register"] = "You already have an account!";
    }else
    {
        $query = "INSERT INTO 
        user (user, password) 
        VALUE 
        (:user, :password);";
        $params = [":user" => $username, ":password" => $password];
        $db = new DataBase($config);
        $posts = $db->execute($query, $params)->fetchALL();
        header("Location: /");
    }
}



require "views/auth/register.view.php";
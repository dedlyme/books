<?php
require "Database.php";


$config = require("config.php");

$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Prepare and execute SQL statement to fetch user data from the database
    $stmt = $conn->prepare("SELECT id, user, password FROM auth WHERE user=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password correct, set session variables and redirect
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['user'];
            header("Location: /"); // Redirect to profile page
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
    
    // Close statement and database connection
    $stmt->close();
    $conn->close();
}

require "views/auth/login.view.php";

?>
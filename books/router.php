

<?php
// Sanitize the URL to prevent against potential security risks
$url = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);

// Load routes
$routes = require("routes.php");

// Check if the requested URL matches any route
if (array_key_exists($url, $routes)) {
    // Load the corresponding controller
    require $routes[$url];
} else {
    // If the route doesn't exist, return a 404 error
    http_response_code(404);
    require "controllers/404.php";
}
?>
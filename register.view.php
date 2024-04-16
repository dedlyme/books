<?php require "views/components/head.php"?>
    <h2>User Registration</h2>
    <form action="register.php" method="post">
        <label for="user">username:</label><br>
        <input type="text" id="user" name="user" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
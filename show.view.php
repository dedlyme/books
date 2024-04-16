<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?=htmlspecialchars($post["name"]) ?></h1>
<h1><?=htmlspecialchars($post["year_came_out"]) ?></h1>
<h1><?=htmlspecialchars($post["authors"]) ?></h1>

<a href="/edit?id=<?= $post["id"] ?>">edit</a>

<?php require "views/components/footer.php" ?>
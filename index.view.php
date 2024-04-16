<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php"?>

<h1>books</h1>

<?php foreach($posts as $post) { ?>
  <li>
    <a href="/show?id=<?= $post["id"]?>"><?= htmlspecialchars($post["name"]).($post["authors"]).($post["year_came_out"])?></a>
    <form class="delete-form" method="POST" action="/delete"><button name="id" value="<?= $post["id"] ?>">Delete</button></form>
  </li>
<?php } ?>
</ul>
<?php require "views/components/footer.php" ?>
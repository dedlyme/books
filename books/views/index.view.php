<?php require "components/head.php" ?>






<h1>books</h1>

<ul>
<?php
  foreach($posts as $post) {
  echo "<li>" . $post["name"] . "</li>";
  }
  ?>
</ul>
<?php require "components/footer.php" ?>
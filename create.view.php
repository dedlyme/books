<?php require "views/components/head.php";?>
<?php require "views/components/navbar.php";?>

<form method="POST">
    <label>name:
    <input name="name" value="<?= $_POST["name"] ?? ""?>">
    <?php if (isset($errors["name"])){ ?>
    <p class="invalid-data"><?= $errors["name"] ?></p>
<?php } ?>
    </label>
    <button>Save</button>
</form>
<form method="POST">
    <label>author:
    <input name="authors" value="<?= $_POST["authors"] ?? ""?>">
    <?php if (isset($errors["authors"])){ ?>
    <p class="invalid-data"><?= $errors["authors"] ?></p>
<?php } ?>
    </label>
    <button>Save</button>
</form>
<form method="POST">
    <label>release year:
    <input name="year_came_out" value="<?= $_POST["year_came_out"] ?? ""?>">
    <?php if (isset($errors["year_came_out"])){ ?>
    <p class="invalid-data"><?= $errors["year_came_out"] ?></p>
<?php } ?>
    </label>
    <button>Save</button>
</form>


<?php require "views/components/footer.php";?>
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

<?php require "views/components/footer.php";?>
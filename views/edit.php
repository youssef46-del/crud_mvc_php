
<?php

$title = 'Modifier des stagiaires';

ob_start();

?>

<form action="update.php" method="post">
    <div class="form-goup">
        <label>Id</label>
        <input type="hidden" class="form-control" name="id" value='<?= $stagiaire->id ?>'>
    </div>
    <div class="form-goup">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" value='<?= $stagiaire->nom ?>'>
    </div>
    <div class="form-goup">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom" value="<?= $stagiaire->prenom ?>">
    </div>
    <div class="form-goup">
        <label>Login</label>
        <input type="text" class="form-control" name="login" value="<?= $stagiaire->login ?>">
    </div>
    <div class="form-goup">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="<?= $stagiaire->password ?>">
    </div>
    <div class="form-goup">
        <input type="submit" class="btn btn-success my-2" name="modifier" value="Modifier">
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>
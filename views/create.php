
<?php

$title = 'Ajouter des stagiaires';

ob_start();

?>

<form action="store.php" method="post">
    <div class="form-goup">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
    <div class="form-goup">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-goup">
        <label>Login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="form-goup">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-goup">
        <input type="submit" class="btn btn-success my-2" name="ajouter" placeholder="Ajouter">
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>
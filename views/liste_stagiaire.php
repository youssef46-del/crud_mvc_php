
<?php

$title = 'Liste des stagiaires';

ob_start();

?>

<a href="create.php" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
<thead>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Login</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php  foreach($stagiaires as $stagiaire):   ?>
        
        <tr>
            <td><?= $stagiaire->id ?></td>
            <td><?php echo $stagiaire->nom ?></td>
            <td><?php echo $stagiaire->prenom ?></td>
            <td><?php echo $stagiaire->login ?></td>
            <td>
                
                <a href="edit.php?id=<?= $stagiaire->id ?>" class="btn btn-success btn-sm">Modifier</a>
                <a href="delete.php?id=<?= $stagiaire->id ?>" class="btn btn-danger btn-sm">Supprimer</a>
                
            </td>
        </tr>
        
    <?php endforeach;  ?>
    
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>
<?php

$title = 'Supp stagiaire';

ob_start();
?>

<p>Voulez vous vraiment supprimmer ?</p>
<a class="btn btn-danger" href="destroy.php?id=<?= $id; ?>">Oui</a>
<a class="btn btn-warning" href="index.php">Non</a>

<?php
$content = ob_get_clean();

include_once 'views/layout.php';

?>
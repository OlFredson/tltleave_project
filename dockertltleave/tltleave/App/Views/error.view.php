<?php
ob_start();
?>

<div class="alert alert-danger" role="alert">
    <?= $error ?>
</div>


<?php
$title = "Une Erreur s'est produite";
$content = ob_end_clean();
include 'templateAdmin.view.php';

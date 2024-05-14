<?php ob_start(); ?>



<h2>Liste des utilisateurs</h2>
<?php
$content = ob_get_clean();
include "views/template.php";
?>
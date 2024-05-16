<?php ob_start(); ?>



<?php
$content = ob_get_clean();
include "views/template.php";
?>
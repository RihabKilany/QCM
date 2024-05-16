<?php ob_start(); ?>

    <div class="container mt-5">
        <h2>Ajouter une question</h2>
        <form action="" method="post">
            <input type="hidden" class="form-control" id="" name="id">

            <div class="form-group">
                <label for="libelle">Libellé :</label>
                <input type="text" class="form-control" id="libelle" name="libelle" required>
            </div>

            <div class="form-group">
                <label  for="">Auteur :</label>
                <input type="text" name="auteur" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="point">Point :</label>
                <input type="number" class="form-control" id="point" name="point" required>
            </div>

            <input type="hidden" name="utilisateur" >

            <div class="form-group">
                <input type="number" class="form-control" id="" name="qcm">
            </div>




            <button type="submit"  class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <?php
    $content = ob_get_clean();
    include "views/template.php";
    ?>


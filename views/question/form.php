<?php ob_start(); ?>

    <div class="container mt-5">
        <h2>Ajouter une question</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="libelle">Libellé :</label>
                <input type="text" class="form-control" id="libelle" name="libelle" required>
            </div>
            <div class="form-group">
                <label for="auteur">Auteur :</label>
                <select class="form-control" name="utilisateur" id="auteur">
                    <option value="">sélectionnez l'auteur....</option>
                    <?php foreach($utilisateurs as $user): ?>
                        <option value="<?= $user->getId(); ?><?= $user->getNom(); ?>"></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="form-group">
                <label for="point">Point :</label>
                <input type="number" class="form-control" id="point" name="point" required>
            </div>
            <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <?php
    $content = ob_get_clean();
    include "views/template.php";
    ?>


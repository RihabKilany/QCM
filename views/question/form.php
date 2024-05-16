<?php ob_start(); ?>
<form action="" method="post">
    <div class="form-group">
        <label for="libelle">Libellé :</label>
        <input type="text" class="form-control" id="libelle" name="libelle" required>
    </div>
    <div class="form-group">
        <label for="auteur">Auteur :</label>
        <select class="form-control" id="auteur" name="auteur">
            <option value="">Sélectionnez un utilisateur</option>
            <?php foreach ($utilisateurs as $utilisateur): ?>
                <option value="<?php echo $utilisateur->getId(); ?>"><?php echo $utilisateur->getNomComplet(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="point">Point :</label>
        <input type="number" class="form-control" id="point" name="point" required>
    </div>
    <div class="form-group">
        <label for="qcm">QCM :</label>
        <select class="form-control" id="qcm" name="qcm">
            <option value="">Sélectionnez un QCM</option>
            <?php foreach ($qcms as $qcm): ?>
                <option value="<?php echo $qcm->getId(); ?>"><?php echo $qcm->getTitre(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

    <?php
    $content = ob_get_clean();
    include "views/template.php";
    ?>


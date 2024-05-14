<?php
 ob_start();
?>
<title>Inscription</title>

    <div class="container">
        <h2 class="mt-5">Inscription</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="statut">Statut :</label>
                <input type="text" class="form-control" id="statut" name="statut" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
           
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
<?php

$content = ob_get_clean();
include "views/template.php";
    


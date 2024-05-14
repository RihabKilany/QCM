<?php ob_start(); ?>

<h3>Connexion</h3>

<div>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputPassword" name="login" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="inputPassword" name="password" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Se Connecter</button>

    </form>
</div>
<?php

$content = ob_get_clean();
include "views/template.php";
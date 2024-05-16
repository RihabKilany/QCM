<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QCM</title>
</head>

<body>

    <header class="bg-light p-4">
        <nav>
            <a class="btn btn-success" href=".">Accueil</a>
            
            <?php if(isset($_SESSION["user"])): ?>

                <?php if($_SESSION["statut"] == "enseignant"): ?>
                    <a class="btn btn-success" href="?action=utilisateur">Utilisateur</a>
                    <a class="btn btn-success" href="?action=qcm">QCM</a>
                    <a class="btn btn-success" href="?action=question">Question</a>
                    <a class="btn btn-success" href="?action=reponse">Reponse</a>
                <?php endif; ?>

                <?php if($_SESSION["statut"] == "etudiant"): ?>
                    <a class="btn btn-success" href="?action">QCM</a>
                <?php endif; ?>
                
                
                <a class="btn btn-danger" href="?action=deconnexion">Déconnexion</a>
               

                
            <?php else: ?>
                <a class="btn btn-success" href="?action=login">Connexion</a>
                <a class="btn btn-success" href="?action=inscription">Inscription</a>
            <?php  endif; ?>


        </nav>

      
    </header>

    <main class="container-fluid">
        <?= $content; ?>        
    </main>

    <footer class="text-center text-dark bg-light p-4 mt-5">
        Gestion QCM
    </footer>
    <?php  unset($_SESSION["errors"]); ?>
</body>
</html>

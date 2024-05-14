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
            
            <!-- PHP if(isset($_SESSION["user"])): -->

                <!-- PHP if($_SESSION["ROLE"] == "ADMIN"): -->
                    <a class="btn btn-success" href="?actionAdmin=liste">Utilisateur</a>
                    <a class="btn btn-success" href="?actionAgence=agence">QCM</a>
                    <a class="btn btn-success" href="?actionVehicule=vehicule">Question</a>
                    <a class="btn btn-success" href="?actionVehicule=vehicule">Response</a>
                <!-- PHP endif; -->

                <!-- <a class="btn btn-primary" href="?actionUser=compte&id= PHP unserialize($_SESSION["user"])->getId(); ">Mon compte</a> -->
                <a class="btn btn-danger" href="?action=deconnexion">Déconnexion</a>
                
            <!-- PHP else: -->
                <a class="btn btn-success" href="?action=connexion">Connexion</a>
                <a class="btn btn-success" href="?action=inscription">Inscription</a>
            <!-- PHP endif; -->

        </nav>

        <!-- PHP if(isset($_SESSION["user"])):
            <div class="text-end">
                PHP unserialize($_SESSION["user"])->getPrenom();
            </div>
        PHP endif; -->
    </header>

    <main class="container-fluid">
        <?= $content; ?>        
    </main>

    <footer class="text-center text-dark bg-light p-4 mt-5">
        Gestion QCM
    </footer>
    <!-- PHP unset($_SESSION["errors"]) -->
</body>
</html>

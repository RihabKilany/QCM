<?php

    namespace App\Controller;

    use App\Entity\Utilisateur;
    use App\Model\UserModel;

    class UserController {

        function userHttp(){

            if(isset($_GET['action'])){

                $action =$_GET['action'];
                $model = new UserModel();

                switch ($action){
                    case "inscription":
                        if(isset($_POST['nom']) && isset($_POST['password'])){
                            extract($_POST);
                            $user = new Utilisateur($id, $nom, $login, $password, $statut, $email);
                            $UserMoel->inscription($user);
                            header ("location :?action=connexion");
                            exit;
                        }
                       include "views/utilisateur/inscription.php";
                       break;
                }

            }else{
                include "views/template.php";
            }
            

        }
    }


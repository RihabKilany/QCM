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
                            $user = new Utilisateur(0, $nom, $login, $password, $statut, $email);
                            $model->inscription($user);
                            header ("location:?action=login");
                            exit;
                        }
                       include "views/utilisateur/inscription.php";
                       break;

                    case "login":
                        if(isset($_POST['login']) && isset($_POST['password'])){

                            $login = $_POST['login'];
                            $password =$_POST ['password'];
                            $model->connexion($login, $password);
                            if(isset($_SESSION['user'] )){
                                header("location: .");
                                exit;
                            }

                        }
                        include "views/utilisateur/login.php";
                        break;
                    
                    case "deconnexion":
                        if($_SESSION['user']){
                            session_destroy();
                            header ("location: .");
                            exit;
                        }

                    break;

                }

            }else{
                include "views/index.php";
            }
        
        }
    }


<?php

namespace App\Model;

use App\Entity\Utilisateur;
use App\Model\ModelGenerique;

class UserModel extends ModelGenerique{

    public function inscription(Utilisateur $utilisateur){

        $query = "INSERT INTO utilisateur VALUES(NULL, :nom, :login, :password, :statut, :email)";

        $this->executerReq($query, [

            "nom" =>$utilisateur->getNom(),
            "login" =>$utilisateur->getLogin(),
            "password" =>$utilisateur->getPassword(),
            "statut" =>$utilisateur->getStatut(),
            "email"=>$utilisateur->getEmail()
        ]);
        return true; 
    }


    public function connexion($login, $password){
        $query = "SELECT *FROM utilisateur WHERE login = :login AND password = :password";
        $stmt = $this->executerReq($query, [
            "login"=> $login,
            "password" => $password
        ]);
        $user = $stmt->fetch();
        if ($user){
            extract($user);
            $utilisateur = new Utilisateur ( $id, $nom, $login, $password, $statut, $email);
            
            $_SESSION['user'] = $utilisateur;
            $_SESSION['statut'] = $statut;

            return true; 
               
            
        }else {
            return false;
        }
    }

}


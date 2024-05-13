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

}
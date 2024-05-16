<?php

namespace App\Model;

use App\Entity\Question;

class QuestionModel extends ModelGenerique{

    public function getAllQuestions()
    {
        return $this->getAll('question');
    }


    public function ajoutQuestion(Question $question){

        $query = "INSERT INTO question VALUES (NULL, :libelle, :auteur, :point, :idUser, :idQCM)";
        $stmt = $this->executerReq($query, [

            "libelle" =>$question->getLibelle(),
            "auteur" =>$question->getAuteur(),
            "point" =>$question->getPoint(),
            "idUser" =>$question->getIdUser(),
            "idQCM" =>$question->getIdQcm()
        ]);
    }


}




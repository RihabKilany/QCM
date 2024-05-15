<?php

namespace App\Controller;

use App\Entity\Question;
use App\Model\QuestionModel;

class QuestionController{

    public function questionsHttp(){
        if(isset($_GET['action'])){
            $action = $_GET ['action'];
            $mldquestion = new QuestionModel();

            switch($action){

                case "question":
                    $questions = $mldquestion->getAll('question');
                    include "views/question/index.php";
                    break;  
                
                case "ajoutQuestion":
                    if(isset($_POST['ajouter'])){
                        extract($_POST);
                        $question = new Question(0, $libelle, $auteur, $point, $idUser, $idQcm );
                        $mldquestion->ajoutQuestoin($question);
                        header("location: ?action=question");
                        exit;
                    }
                    include "views/question/form.php";
                    break;
            }
        }
    }
}
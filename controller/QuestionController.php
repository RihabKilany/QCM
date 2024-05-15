<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Utilisateur;
use App\Model\QuestionModel;
use App\Model\UserModel;

class QuestionController{

    public function questionsHttp(){
        $model1 = new UserModel();

        if(isset($_GET['action'])){
            $action = $_GET ['action'];
            $mldquestion = new QuestionModel();

            switch($action){

                case "question":
                    $questions = $mldquestion->getAll('Question');
                    include "views/question/index.php";
                    break;  
                
                case "ajoutQuestion":
                    if(isset($_POST['ajouter'])){
                        extract($_POST);
                        $question = new Question(0, $libelle, $auteur, $point, $utilisateur, $qcm );
                        $mldquestion->ajoutQuestion($question);

                        header("location: ?action=question");
                        exit;
                    }
                    // $utilisateurs = $model1->getAll();
                    
                    include "views/question/form.php";
                    break;
            }
        }
    }
}
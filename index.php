<?php
session_start();
include "vendor/autoload.php";

use App\Controller\QuestionController;
use App\Controller\UserController;

$userctl = new UserController();
$questionclt = new QuestionController();

$userctl->userHttp();
$questionclt->questionsHttp();





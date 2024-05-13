<?php
include "vendor/autoload.php";
use App\Controller\UserController;

$userctl = new UserController();
$userctl->userHttp();




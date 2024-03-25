<?php 
    require_once("../vendor/autoload.php");

    date_default_timezone_set("America/Sao_Paulo");

    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin');
    header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    
    new App\Core\Router();
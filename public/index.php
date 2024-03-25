<?php 
    require_once("../vendor/autoload.php");

    header("Content-Type: application/json");
    
    new App\Core\Router();
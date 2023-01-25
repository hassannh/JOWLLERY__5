<?php
session_start();
 require_once "../app/config/config.php";
require_once '../app/views/includes/header.php';
require_once '../app/views/includes/navbar.php';
//require_once 'models/users.php';




// $home = new HomeController();

//load config

require_once "../app/libraries/database.php";
 require_once "../app/libraries/Core.php";
 require_once "../app/libraries/Controller.php";

require_once '../app/controllers/UsersControllers.php';
require_once '../app/controllers/HomeController.php';


$core = new core;
// require_once "views/home.php";

require_once '../app/views/includes/footer.php';


?>  



<?php

//INCLUDE THE FILES NEEDED...
require_once('controller/MasterController.php');


//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//CREATE OBJECTS OF THE CONTROLLERS
$mc = new \controller\MasterController();

$mc->Run();
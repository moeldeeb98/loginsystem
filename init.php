<?php

// Routes

$class 	= 'includes/classes/';
$temp 	= 'includes/templates/';


// include all required pages 
include $temp . 'header.inc.php';
include $class . 'DB_Connector.php';
include $class . 'MailSender.php';
include $class . 'UserModel.php';
include $class . 'ImageModel.php';
include $class . 'UserController.php';
include $class . 'Image.php';
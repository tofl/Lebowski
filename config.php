<?php

include('classes/classes.php');

define('ROOT', 'http://localhost/Lebowski/webroot/');

$handler = Handler::getInstance();
$page = 'pages/' . $handler->getPage();

$session = new Session();

session_start();

$session = $_SESSION['session'];

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre><br />';
*/
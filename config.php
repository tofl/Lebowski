<?php

include('classes/classes.php');

define('ROOT', 'http://localhost/Lebowski/webroot/');

$handler = Handler::getInstance();
$page = 'pages/' . $handler->getPage();

session_start();

$userClass = new User();

if (empty($_SESSION['session'])) {
    $session = 0;
} else {
    $session = $_SESSION['session'];
    $currentUser = new User($session);
}
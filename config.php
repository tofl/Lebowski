<?php

include('classes/classes.php');

define('ROOT', 'http://localhost/Lebowski/webroot/');

$handler = Handler::getInstance();
$page = 'pages/' . $handler->getPage();

session_start();

if (empty($_SESSION['session'])) {
    $session = 0;
    $currentUser = null;
} else {
    $session = $_SESSION['session'];
    $currentUser = new User($session);
}

/*
echo '<pre>';
var_dump($session);
echo '</pre><br />';
*/
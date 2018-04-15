<?php
include('../../classes/classes.php');
session_start();

$session = $_SESSION['session'];

$session->logOut();


header('Location: http://localhost/Lebowski/webroot/');
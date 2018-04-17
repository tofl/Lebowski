<?php

$id = $_POST['id'];
$password = $_POST['password'];

if (empty($id) OR empty($password)) {
    header('Location: http://localhost/Lebowski/webroot/?page=login');
    die();
}

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

$search = $db->prepare('SELECT COUNT(*) FROM teams WHERE name = ?');
$search->execute([$id]);
$count = $search->fetch();
$count = $count[0];

if ($count != 0) {
    $userData = $db->prepare('SELECT * FROM teams WHERE name = ?');
    $userData->execute([$id]);
    $data = $userData->fetch();

    if (sha1($password) == $data['password']) {
        include('../../classes/classes.php');
        $user = new User($data['id'], $data['name'], $data['phrase'], $data['image'], $data['score_total']);
        session_start();
        $_SESSION['session'] = new Session($user);

        header('Location: http://localhost/Lebowski/webroot/');
    } else {
        header('Location: http://localhost/Lebowski/webroot/?page=login&error=2');
    }
} else {
    header('Location: http://localhost/Lebowski/webroot/?page=login&error=1');
}
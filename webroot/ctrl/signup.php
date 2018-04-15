<?php

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

$name = htmlentities($_POST['nom']);
$motto = htmlentities($_POST['motto']);
$password = $_POST['password'];
$image = $_FILES['image'];
$defaultScore = 0;

$search = $db->prepare('SELECT COUNT(*) FROM teams WHERE name = ?');
$search->execute([$name]);
$count = $search->fetch();

if ($count[0] != 0) {
    header('Location: http://localhost/Lebowski/webroot/?page=signup&error=3');
    die();
}

if (empty($name) OR empty($password)) {
    header('Location: http://localhost/Lebowski/webroot/?page=signup&error=1');
    die();
}

$password = sha1($password);

if ($image['error'] == 0) {
    $authorisedExtensions = ['jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG', 'gif', 'GIF'];
    $imageExtension = explode('.', $image['name']);
    $imageExtension = $imageExtension[1];

    if (!in_array($imageExtension, $authorisedExtensions)) {
        header('Location: http://localhost/Lebowski/webroot/?page=signup&error=2');
        die();
    }

    $imageName = uniqid() . '.' . $imageExtension;

    move_uploaded_file($image['tmp_name'], '../pages/images/team_images/' . $imageName);
}
else {
    $imageName = 'default.png';
}

$statement = $db->prepare('INSERT INTO teams (name, phrase, password, image, score_total) VALUES (:name, :phrase, :password, :image, :score_total)');

$statement->bindParam(':name', $name);
$statement->bindParam(':phrase', $motto);
$statement->bindParam(':password', $password);
$statement->bindParam(':image', $imageName);
$statement->bindParam(':score_total', $defaultScore);

$statement->execute();

include('../../classes/classes.php');

session_start();

$_SESSION['session'] = new Session();
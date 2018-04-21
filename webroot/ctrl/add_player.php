<?php

$name = $_POST['player_name'];

if (empty($name)) {
    header('Location: ../../webroot/?page=add_player&error=1');
}

session_start();
$teamId = $_SESSION['session'];

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

$statement = $db->prepare('INSERT INTO players(team_id, name, score) VALUES(?, ?, ?)');
$statement->execute([$teamId, $name, 0]);

header('Location: ../../webroot/?page=add_player&error=0');
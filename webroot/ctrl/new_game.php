<?php

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

$players = $_POST['player'];

$total = 0;

$statement = $db->prepare('UPDATE players SET score = score + ? WHERE name = ?');
foreach ($players as $name => $player) {
    $statement->execute([$player, $name]);
    $total += $player;
}
$statement->closeCursor();

session_start();

$statement = $db->prepare('UPDATE teams SET score_total = score_total + ? WHERE id = ?');
$statement->execute([$total, $_SESSION['session']]);

header('Location: http://localhost/Lebowski/webroot/');
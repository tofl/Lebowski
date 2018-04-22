<h1 class="login_title">Classement global des équipes</h1>

<?php
$getTeams = new User();
$teams = $getTeams->getTeams();

echo '<pre>';
var_dump($teams);
echo '</pre>';
?>
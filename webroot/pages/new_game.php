<?php
$players = $currentUser->getPlayers();
?>
<h1 class="login_title">Nouvelle partie</h1>
<h6 class="login_title">Veuillez entrer les scores des joueurs de la partie</h6>

<form action="ctrl/new_game.php" method="POST">
    <div class="form-group">
        <?php
            foreach ($players as $player) {
        ?>
                <label for="<?= $player['id'] ?>" class="score_label"><?= $player['name'] ?> :</label>
                <input type="text" id="<?= $player['id'] ?>" class="input_score" name="player[<?= $player['name']; ?>]" />
                <br />
        <?php
            }
        ?>
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>

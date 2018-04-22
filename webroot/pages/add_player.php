<?php
    if (isset($_GET['error']) AND $_GET['error'] == 1) {
?>
        <div class="alert alert-danger">
            <strong>Erreur :</strong> Veuillez spécifier un nom de joueur.
        </div>
<?php
    }

    if (isset($_GET['error']) AND $_GET['error'] == 0) {
?>
        <div class="alert alert-success">
            <strong>Succès :</strong> Joueur ajouté.
        </div>
<?php
    }
?>

<form action="ctrl/add_player.php" method="post" class="new_player">
    <label for="player_name">Nom du joueur : </label>
    <input type="text" name="player_name" id="player_name" class="form-control" placeholder="Nom du joueur" required autofocus />
    <br />
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
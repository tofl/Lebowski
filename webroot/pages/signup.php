<h1 class="login_title">Inscription</h1>

<div class="signup_form">

    <?php
    if (isset($_GET['error'])) {

        if ($_GET['error'] == 1) {
    ?>
            <div class="alert alert-danger">
                <strong>Erreur :</strong> Le nom de l'équipe ainsi que le mot de passe sont obligatoires pour valider l'inscription.
            </div>
    <?php
        }
        elseif ($_GET['error'] == 2) {
    ?>
            <div class="alert alert-danger">
                <strong>Erreur :</strong> Le fichier envoyé n'est pas au bon format.
            </div>
    <?php
        }
        elseif ($_GET['error'] == 3) {
    ?>
            <div class="alert alert-danger">
                <strong>Erreur :</strong> Ce nom est déjà utilisé.
            </div>
    <?php
        }
    }
    ?>

    <form method="POST" action="<?= ROOT ?>ctrl/signup.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom (il s'agira de l'identifiant)</label>
            <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Choisissez un nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="motto">Choisissez le motto de votre équipe</label>
            <input type="text" class="form-control" id="motto" aria-describedby="emailHelp" placeholder="Choisissez un motto" name="motto">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" placeholder="Choisissez un mot de passe sécurisé" name="password" required>
        </div>
        <br />
        <div class="input-group mb-3 upload_image">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choisissez un image qui représente votre équipe</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Inscription</button>
        <br /><small>Le nom et le mot de passe sont obligatoires</small>
    </form>
</div>
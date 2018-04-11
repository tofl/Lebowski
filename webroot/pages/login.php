<h1 class="login_title">Connexion</h1>
<h6 class="login_title">Entrez les identifiants de l'équipe à laquelle vous voulez vous connecter</h6>

<form class="login_form" method="post" action="ctrl/login.php">
    <div class="form-group">
        <label for="id">Identifiant</label>
        <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Entrer l'identifiant de l'équipe">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
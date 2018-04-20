<ul class="nav nav-justified main_nav">
    <li class="nav-item">
        <a class="nav-link" href="<?= ROOT; ?>">Accueil</a>
    </li>
    <li class="nav-item">
        <?php
            if ($session) {
                echo '<a class="nav-link" href="?page=add_player">Ajouter un joueur</a>';
            } else {
                echo '<a class="nav-link" href="?page=signup">Créer une équipe</a>';
            }
        ?>
    </li>
    <?php
        if ($session) {
    ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Nouvelle partie</a>
            </li>
    <?php
        }
    ?>
    <li class="nav-item">
        <a class="nav-link" href="#">Classement des équipes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Classement des joueurs</a>
    </li>
    <li class="nav-item">
        <?php
            if ($session) {
                echo '<a class="nav-link" href="ctrl/logout.php">Déconnexion</a>';
            } else {
                echo '<a class="nav-link" href="?page=login">Connexion</a>';
            }
        ?>
    </li>
</ul>
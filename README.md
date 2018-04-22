# Lebowski

Il s'agit d'un site permettant de gérer des équipes de booling. 
Chaque équipe a un identifiant et un mot de passe et peut ajouter ou supprimer
un joueur. L'inscription est obligatoire.

### Pages

- Page d'accueil : affiche les informations sur l'équipe : son nom, son "motto",
son total de points accumulés au cours des parties, sa position dans le classement,
et le classement des joueurs membres de l'équipe. Il faut être connecté à une équipe
pour être inscrit.
- Pages classements (équipes et joueurs) : affichent respectivement le classement
global des équipes et le classement global des joueurs indépendamment de leurs
équipes.
- Connexion et "créer une équipe" : pour se connecter et créer une équipe, c'est à
dire s'inscrire.
- Ajouter un joueur : il faut être connecté, logiquement, pour créer une nouvelle partie.
- Nouvelle partie : pour créer une nouvelle partie. Il faut simplement renseigner
le nombre de points à chaque joueurs de l'équipe à l'aide d'un formulaire.


### Base de données

Il y a un fichier `lebowski.sql` qu'il suffit d'importer dans phpMyAdmin. La
base de données est simple, il n'y a que deux tables.


### Améliorations possibles

- Renforcer la sécurité, qui a été presque négligée à cause du manque de temps.
- Créer un table "Parties" afin de pouvoir gérer des parties indépendamment.
Cela permettrait par exemple d'afficher un historique des parties (voir un classement de la partie, ...), alors que pour le moment
l'utilisateur ne peut que afficher un total de points (pour les joueurs et pour
les équipes).
- Ajouter la possibilité de mettre à joueur une équipe : modifier ses informations
(avatar, nom, motto, ...) et supprimer ses joueurs membres.
- Il serait intéressant d'utiliser Composer pour expérimenter un peu...
- Mettre en place un système de tournoi auquel toutes les équipes peuvent prendre part.
- Ajouter un algorithme de trading automatique directement relié à la bourse de New York
- etc.
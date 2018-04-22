<?php

class Handler
{

    private $_page;
    private static $_instance;

    private function __construct() {
        if (!isset($_GET['page']) OR empty($_GET['page'])) {
            $this->_page = 'homepage';
            return;
        }

        if ($this->pageExists($_GET['page'])) {
            $this->_page = $_GET['page'];
        } else {
            $this->_page = '404';
        }
    }


    public static function getInstance() {
        if (empty(self::$_instance)) {
            self::$_instance = new Handler();
        }
        return self::$_instance;
    }


    public function pageExists(string $page) {
        $files = scandir('pages');

        if (in_array($page . '.php', $files)) {
            return true;
        } else {
            return false;
        }
    }


    public function getPage() {
        return $this->_page . '.php';
    }

    public function pageTitle() {
        switch ($this->_page) {
            case 'homepage':
                return 'Accueil';
            case 'login' :
                return 'Connexion';
            case 'signup' :
                return 'Inscription';
            case 'add_player' :
                return 'Ajouter un joueur';
            case 'new_game' :
                return 'Nouvelle partie';
            case 'teams_rank' :
                return 'Classement des équipes';
            case 'players_rank' :
                return 'Classement des joueurs';
            case '404' :
                return 'Page non trouvée';
        }
    }

}
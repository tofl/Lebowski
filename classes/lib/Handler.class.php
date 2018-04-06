<?php

class Handler
{

    private $_page;
    private static $_instance;

    private function __construct() {
        if (!isset($_GET['page']) OR empty($_GET['page'])) {
            $this->_page = 'homepage';
        }
    }

    public static function getInstance() {
        if (empty(self::$_instance)) {
            self::$_instance = new Handler();
        }
        return self::$_instance;
    }

}
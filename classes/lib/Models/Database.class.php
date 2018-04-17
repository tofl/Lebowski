<?php

class Database
{

    protected $_db;
    protected $_host;
    protected $_dbname;
    protected $_user;
    protected $_password;


    public function __construct($host = 'localhost', $dbname = 'lebowski', $user = 'root', $password = 'root') {
        $this->_db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password);
    }

    /**
    public function __wakeup() {
        $this->_db = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_dbname, $this->_user, $this->_password);
    }

    public function __sleep() {
        return array('_host', '_dbname', '_user', '_password');
    }
     **/

}
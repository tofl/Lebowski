<?php

class Session
{

    private $_loggedIn;
    public $user;

    public function __construct(User $user = null) {
        $this->user = $user;

        if (!is_null($user)) {
            $this->_loggedIn = true;
        } else {
            $this->_loggedIn = false;
        }
    }

    public function isLoggedIn() {
        return $this->_loggedIn;
    }

    public function logOut() {
        $this->_loggedIn = false;
        $this->user = null;
    }

}
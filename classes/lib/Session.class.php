<?php

class Session
{

    public function logOut() {
        $this->_loggedIn = false;
        $this->user = null;
    }

    public function user() {
        return $this->user;
    }

}
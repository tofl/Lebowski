<?php

class Session
{

    private $_loggedIn;
    public $user;

    public function __construct(User $user = null)
    {
        if (!is_null($user)) {
            $this->user = $user;
            $this->_loggedIn = true;
        }
    }

}
<?php

class User
{
    private $_id;
    private $_name;
    private $_phrase;
    private $_image;
    private $_score;

    public function __construct($id, $name, $phrase, $image, $score) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_phrase = $phrase;
        $this->_image = $image;
        $this->_score = $score;
    }
}
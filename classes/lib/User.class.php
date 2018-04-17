<?php

class User
{
    private $_id;
    private $_name;
    private $_motto;
    private $_image;
    private $_score;
    #private $_teams;

    public function __construct($id, $name, $phrase, $image, $score) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_motto = $phrase;
        $this->_image = $image;
        $this->_score = $score;

        #$this->_teams = new Teams();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getMotto()
    {
        return $this->_motto;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return 'http://localhost/Lebowski/webroot/pages/images/team_images/' . $this->_image;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->_score;
    }

    #public function getRank() {
    #    return $this->_teams->rankPosition();
    #}


}
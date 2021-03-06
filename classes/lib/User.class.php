<?php

class User
{
    private $_id;
    private $_name;
    private $_motto;
    private $_image;
    private $_score;
    private $_teams;

    public function __construct($id = 0) {
        if ($id == 0) {
            $this->_teams = new Teams();
            return;
        }
        $this->_id = $id;
        $this->_teams = new Teams();

        $teams = new Teams();
        $userData = $teams->getTeamInfo($id);

        $this->_name = $userData['name'];
        $this->_motto = $userData['phrase'];
        $this->_image = $userData['image'];
        $this->_score = $userData['score_total'];

        $this->_teams = new Teams();
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

    public function getPlayers() {
        $players = $this->_teams->selectPlayersWhere('team_id', $this->_id);
        return $players;
    }

    public function getTeams() {
        $teams = $this->_teams->selectTeams();
        return $teams;
    }

    public function getPlayersRanked() {
        $players = $this->_teams->selectPlayersWhere(true, true);
        return $players;
    }

    public function getPlayersTeam($teamId) {
        $team = $this->_teams->selectTeamsWhere('id', $teamId);
        return $team[0]['name'];
    }

    public function getTeamRank($id) {
        $teams = $this->_teams->selectTeams();

        $i = 1;
        foreach ($teams as $team) {
            if ($team['id'] == $id) {
                return $i;
            }
            $i++;
        }
    }

    public function getPlayerRank($id) {
        $players = $this->getPlayersRanked();

        $i = 1;
        foreach ($players as $player) {
            if ($player['id'] == $id) {
                return $i;
            }
            $i++;
        }
    }


}
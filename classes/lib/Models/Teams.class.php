<?php

class Teams extends Database
{

    public function rankPosition() {
        $rankedTeams = $this->_db->prepare('SELECT * FROM teams ORDER BY score_total');
        $rankedTeams->execute();

        $results = $rankedTeams->fetchAll();

        var_dump($results);
    }

}
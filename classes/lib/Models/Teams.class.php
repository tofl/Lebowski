<?php

class Teams extends Database
{

    public function getTeamInfo($id) {
        $info = $this->_db->prepare('SELECT * FROM teams WHERE id = ?');
        $info->execute([$id]);

        $teamInfo = $info->fetch();

        return array(
            'name' => $teamInfo['name'],
            'phrase' => $teamInfo['phrase'],
            'image' => $teamInfo['image'],
            'score_total' => $teamInfo['score_total']
        );
    }

    public function rankPosition() {
        $rankedTeams = $this->_db->prepare('SELECT * FROM teams ORDER BY score_total');
        $rankedTeams->execute();

        $results = $rankedTeams->fetchAll();

        var_dump($results); // ???
    }

    public function selectPlayersWhere($column, $value) {
        $statement = $this->_db->prepare('SELECT * FROM players WHERE ' . $column . ' = ? ORDER BY score DESC');
        $statement->execute([$value]);

        return $statement->fetchAll();
    }

}
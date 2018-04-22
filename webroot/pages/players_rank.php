<h1 class="login_title">Classement global des joueurs</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">🏆</th>
        <th scope="col">Nom</th>
        <th scope="col">Équipe</th>
        <th scope="col">Score total</th>
    </tr>
    </thead>

    <tbody>
    <?php
        $i = 1;
        $getPlayers = new User();
        $players = $getPlayers->getPlayersRanked();

        foreach ($players as $player) {
            $teamName = $getPlayers->getPlayersTeam($player['team_id']);
    ?>
            <tr>
                <th><?= $i; ?></th>
                <td><?= $player['name']; ?></td>
                <td><?= $teamName; ?></td>
                <td><?= $player['score']; ?></td>
            </tr>
    <?php
            $i++;
        }
    ?>
    </tbody>
</table>
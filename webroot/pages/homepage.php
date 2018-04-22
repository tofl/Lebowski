<div class="team_info">
    <div class="basic_info">
        <div class="team_photo">
            <img src="<?= $currentUser->getImage(); ?>" alt="<?= $currentUser->getName(); ?>" class="avatar" />
            Classement : #<?= $userClass->getTeamRank($session); ?>
        </div>
        <div class="info">
            <span><strong><?= $currentUser->getName(); ?></strong></span>
            <br />
            <span><i><?= $currentUser->getMotto(); ?></i></span>
            <br />
            <span>Score : <?= $currentUser->getScore(); ?></span>
        </div>
        <div class="list_players">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="cole">Nom</th>
                        <th scope="cole">🏆 équipe</th>
                        <th scope="cole">🏆 global</th>
                        <th scope="cole">Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $players = $currentUser->getPlayers();
                        $i = 1;
                        foreach ($players as $player) {
                    ?>
                            <tr>
                                <th><?= $player['name']; ?></th>
                                <td><?= $i; ?></td>
                                <td><?= $userClass->getPlayerRank($player['id']); ?></td>
                                <td><?= $player['score']; ?></td>
                            </tr>
                    <?php
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
            <?php
                if (empty($players)) {
            ?>
                    <div class="alert alert-primary" role="alert">
                        Il n'y a pas de joueurs dans cette équipe
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
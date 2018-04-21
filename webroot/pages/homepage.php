<div class="team_info">
    <div class="basic_info">
        <div class="team_photo">
            <img src="<?= $currentUser->getImage(); ?>" alt="<?= $currentUser->getName(); ?>" class="avatar" />
            <!--<? $currentUser->getRank(); ?>-->
            [Rank]
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
                        <th scope="cole">🏆 équipe</th>
                        <th scope="cole">🏆 global</th>
                        <th scope="cole">Nom</th>
                        <th scope="cole">Score</th>
                    </tr>
                    <?php
                        $players = $currentUser->getPlayers();
                        $i = 1;
                        foreach ($players as $player) {
                    ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <th>?</th>
                                <th><?= $player['name']; ?></th>
                                <th><?= $player['score']; ?></th>
                            </tr>
                    <?php
                            $i++;
                        }
                    ?>
                </thead>
            </table>
            <?php
                $players = $currentUser->getPlayers();
            ?>
        </div>
    </div>
</div>
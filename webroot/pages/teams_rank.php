<h1 class="login_title">Classement global des équipes</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">🏆</th>
        <th scope="col">Nom</th>
        <th scope="col">Motto</th>
        <th scope="col">Score total</th>
    </tr>
    </thead>

    <tbody>
        <?php
            $i = 1;
            $getTeams = new User();
            $teams = $getTeams->getTeams();

            foreach ($teams as $team) {
        ?>
                <tr>
                    <th><?= $i; ?></th>
                    <td><?= $team['name']; ?></td>
                    <td><?= $team['phrase']; ?></td>
                    <td><?= $team['score_total']; ?></td>
                </tr>
        <?php
                $i++;
            }
        ?>
    </tbody>
</table>
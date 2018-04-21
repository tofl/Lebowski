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
        <div class="new_game_button">
            <a class="btn btn-primary" href="#">Nouvelle partie</a>
        </div>
    </div>
</div>
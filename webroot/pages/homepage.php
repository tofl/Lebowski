<div class="team_info">
    <div class="basic_info">
        <div class="team_photo">
            <img src="<?= $currentUser->getImage(); ?>" alt="<?= $currentUser->getName(); ?>" class="team_photo" />
        </div>
        <div class="team_info">
            <?= $currentUser->getName(); ?>
            <br />
            <?= $currentUser->getMotto(); ?>
            <br />
            <!--<? $currentUser->getRank(); ?>-->
        </div>
    </div>
</div>
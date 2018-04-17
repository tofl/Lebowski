<div class="team_info">
    <div class="basic_info">
        <div class="team_photo">
            <img src="<?= $session->user->getImage(); ?>" alt="<?= $session->user->getName(); ?>" class="team_photo" />
        </div>
        <div class="team_info">
            <?= $session->user->getName(); ?>
            <br />
            <?= $session->user->getMotto(); ?>
            <br />
            <?= $session->user->getRank(); ?>
        </div>
    </div>
</div>
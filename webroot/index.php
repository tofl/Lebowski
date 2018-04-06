<?php
include('../config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="pages/style/style.css">
        <title>Lebowski - <?= $handler->pageTitle(); ?></title>
    </head>

    <body>
        <?php include($page); ?>
    </body>
</html>

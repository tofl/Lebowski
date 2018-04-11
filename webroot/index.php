<?php
    include('../config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="pages/style/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <title>Lebowski - <?= $handler->pageTitle(); ?></title>
    </head>

    <body>
        <div class="main_wrapper">
            <?php
                include('pages/src/header.php');
                include($page);
            ?>
        </div>
    </body>
</html>

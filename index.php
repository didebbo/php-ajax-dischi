<?php
require_once __DIR__ . "/partials/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Spotify</title>
</head>

<body>
    <?php require_once __DIR__ . "/partials/templates/header.php"; ?>
    <main>
        <?php require_once __DIR__ . "/partials/templates/playlist.php"; ?>
    </main>
</body>

</html>
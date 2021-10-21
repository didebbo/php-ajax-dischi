<?php
$logoSrc = $_SERVER["REQUEST_URI"] . "images/spotify-logo.png";
?>

<header>
    <div class="logo">
        <a href="<?= $_SERVER["REQUEST_URI"] ?>">
            <img src="<?= $logoSrc ?>" alt="Spotify">
        </a>
    </div>
</header>
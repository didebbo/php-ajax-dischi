<?php

require_once __DIR__ . "/../partials/database.php";
header("Content-Type: application/json");

$genres = [];

function getGenres($database)
{
    $db = [];
    foreach ($database as $item) {
        if (!in_array($item["genre"], $db)) $db[]  = $item["genre"];
    }
    return $db;
}

echo json_encode(getGenres($database));

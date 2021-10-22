<?php

require_once __DIR__ . "/../partials/database.php";
header("Content-Type: application/json");

$genre = isset($_GET["genre"]) && trim($_GET["genre"]) != "" ? $_GET["genre"] : null;

function filterByGenre($database, $genre)
{
    if (strtolower($genre) == "all") return $database;
    $db = [];
    foreach ($database as $item) {
        if (strtolower($genre) == strtolower($item["genre"])) $db[]  = $item;
    }
    return $db;
}

if ($genre) $database = filterByGenre($database, $genre);

echo json_encode($database);

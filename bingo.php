<?php

/**
 * 1 - Créer des tables de jeu
 * 
 * 2 - Répartir des joueurs sur ces tables aléatoirement
 * 
 * 3 - générer des grilles pour des joueurs avec des chiffres compris entre 1 et 50
 */

$nbTable = 3;

$gameTables = [];

$players = [
    "Amaury",
    "Jonas",
    "Fanny",
    "Lila",
    "Charlène",
    "Jerome",
    "Matthieu",
    "Mathieu",
    "Alan",
];

for($i = 1; $i <= $nbTable; $i++ ) {
    $gameTables[$i] = [
        "name" => "table n°" . $i, 
        "players" => []
    ];
}

foreach($players as $player)
{
    while(true) {
        $randomTable = rand(1, $nbTable);
        if(count($gameTables[$randomTable]['players']) < 3) {
            $gameTables[$randomTable]['players'][] = $player;
            break;
        }
    }
}


 print_r($gameTables);
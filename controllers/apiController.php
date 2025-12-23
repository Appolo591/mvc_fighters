<?php 

function apiCharacters(){
    $allCharacters = getAllCharacters();
    header('Content-Type: application/json');
    sendJson_get($allCharacters);
}

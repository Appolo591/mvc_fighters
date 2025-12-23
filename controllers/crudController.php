<?php

require_once 'models/crudModel.php';

function createCurrentCharacter($name, $image, $health, $magic, $power, $side){
    if(createNewCharacterDB($name, $image, $health, $magic, $power, $side)){
        header("Location: home");
        exit();
    } else {
        throw new Exception("Erreur lors de la création du personnage.");
    }
   
}

function deleteCharacter($id){
    if(deleteCharacterDB($id)){
        header("Location: home");
        exit();
    } else {
        throw new Exception("Erreur lors de la suppression du personnage.");
    }
}

function updateCurrentCharacter($id, $name, $image, $health, $magic, $power, $side){
    if(updateCharacterDB($id, $name, $image, $health, $magic, $power, $side)){
        header("Location: home");
        exit();
    } else {
        throw new Exception("Erreur lors de la modification du personnage.");
    }
}

<?php 

require_once ("models/sidesModel.php");
require_once ("models/charactersModel.php");

function homePage(){

    $sides = getAllSides();
    $characters = getAllCharacters();

    $datas_page=[
        "title"=>"Page d'accueil",
        "description"=>"Page d'accueil du site", 
        "view"=>"views/pages/homePage.php",
        "layout"=>"views/components/layout.php",
        "sides"=>$sides ,
        "characters"=>$characters
    ];
    drawPage($datas_page);
};

function addCharacterPage(){

    $sides = getAllSides();

    $datas_page=[
        "title"=>"Page de Création ",
        "description"=>"Page de Création de personnage", 
        "view"=>"views/pages/addPage.php",
        "layout"=>"views/components/layout.php",
        "sides"=>$sides
    ];
    drawPage($datas_page);
};


function updateCharacterPage($id){
    $sides = getAllSides();
    $character = getCharacter($id);

    $datas_page=[
        "title"=>"Page de Modification ",
        "description"=>"Page de Modification de personnage", 
        "view"=>"views/pages/updatePage.php",
        "layout"=>"views/components/layout.php",
        "sides"=>$sides,
        "character"=>$character
    ];
    drawPage($datas_page);
};

function lightCharactersPage(){
    $characters = getAllCharacters();

    $datas_page=[
        "title"=>"Personnages du Bien",
        "description"=>"Page des personnages du côté Bien", 
        "view"=>"views/pages/lightPage.php",
        "layout"=>"views/components/layout.php",
        "characters"=>$characters
    ];
    drawPage($datas_page);
}
function darkCharactersPage(){
    $characters = getCharactersBySide("dark");

    $datas_page=[
        "title"=>"Personnages du Mal",
        "description"=>"Page des personnages du Mal", 
        "view"=>"views/pages/darkPage.php",
        "layout"=>"views/components/layout.php",
        "characters"=>$characters
    ];
    drawPage($datas_page);
}


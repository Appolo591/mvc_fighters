<?php 

require_once ("models/pdoModel.php");

function getAllCharacters(){
    $req = "SELECT * FROM characters";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getCharacter($id){
    $req = "SELECT * FROM characters WHERE id = :id";
    $stmt = setDB()->prepare($req);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $datas = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}
function getCharactersBySide($side){
    $req = "SELECT * FROM characters WHERE side = :side";
    $stmt = setDB()->prepare($req);
    $stmt->bindParam(':side', $side, PDO::PARAM_STR);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}
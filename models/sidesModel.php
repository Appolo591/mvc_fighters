<?php 

    require_once "models/pdoModel.php";

    function getAllSides(){

        $req = "SELECT * FROM sides";
        $stmt = setDB()->prepare($req);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;
    }
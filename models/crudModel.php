<?php
require_once("models/pdoModel.php");

function createNewCharacterDB($name, $image, $health, $magic, $power, $side)
{
  $req = "INSERT INTO characters (name, image, health, magic, power, side) 
           VALUES (:name, :image, :health, :magic, :power, :side)";
  $stmt = setDB()->prepare($req);
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':image', $image, PDO::PARAM_STR);
  $stmt->bindParam(':health', $health, PDO::PARAM_INT);
  $stmt->bindParam(':magic', $magic, PDO::PARAM_INT);
  $stmt->bindParam(':power', $power, PDO::PARAM_INT);
  $stmt->bindParam(':side', $side, PDO::PARAM_STR);
  $stmt->execute();
  $stmt->closeCursor();
  return true;
}

function deleteCharacterDB($id)
{
  $req = "DELETE FROM characters WHERE id = :id";
  $stmt = setDB()->prepare($req);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $stmt->closeCursor();
  return true;
}

function updateCharacterDB($id, $name, $image, $health, $magic, $power, $side)
{
  $req = "UPDATE characters 
           SET name = :name, image = :image, health = :health, magic = :magic, power = :power, side = :side
           WHERE id = :id";
  $stmt = setDB()->prepare($req);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':image', $image, PDO::PARAM_STR);
  $stmt->bindParam(':health', $health, PDO::PARAM_INT);
  $stmt->bindParam(':magic', $magic, PDO::PARAM_INT);
  $stmt->bindParam(':power', $power, PDO::PARAM_INT);
  $stmt->bindParam(':side', $side, PDO::PARAM_STR);
  $stmt->execute();
  $stmt->closeCursor();
  return true;
}

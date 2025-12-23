<?php

function setDB() {
    
    static $pdo;

    if ($pdo === null) {
        $pdo = new PDO('mysql:host=localhost;dbname=php_mvc;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    return $pdo;
} 
<?php

try{
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;" , "root", "");
}catch (PDOException $erro){
    echo "Falha ao conectarao banco " . $erro -> getMessage();
}
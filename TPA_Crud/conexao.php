<?php

try{
    //Conectando no banco
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;" , "root", "");
}catch (PDOException $erro){
    //Caso ocorra algum erro
    echo "Falha ao conectar! " . $erro -> getMessage();
}
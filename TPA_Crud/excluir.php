<?php

include_once "conexao.php";

try{
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $deletar = $conectar -> prepare ("DELETE FROM login WHERE id = :id");
    $deletar -> bindParam(':id', $id);
    $deletar -> execute();

   header("location: index.php");

}catch(PDOException $erro){
    echo "Erro: " . $erro -> getMessage();
}
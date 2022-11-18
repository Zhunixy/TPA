<?php

include_once "conexao.php";

try{
    $codigo_f = filter_var($_GET['codigo_f'], FILTER_SANITIZE_NUMBER_INT);

    $deletar = $conectar -> prepare ("DELETE FROM funcionario WHERE codigo_f = :codigo_f");
    $deletar -> bindParam(':codigo_f', $codigo_f);
    $deletar -> execute();

   header("location: index.php");

}catch(PDOException $erro){
    echo "Erro: " . $erro -> getMessage();
}
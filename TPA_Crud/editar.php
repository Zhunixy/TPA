<?php

include_once "conexao.php";

try{
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);
    $atualizar = $conectar -> prepare ("UPDATE login SET nome = :nome, login = :login WHERE id = :id");
    $atualizar -> bindParam(':id', $id);
    $atualizar -> bindParam(':nome', $nome);
    $atualizar -> bindParam(':login', $login);
    $atualizar -> execute();

    header("location: index.php");

}catch(PDOException $erro){
    echo "Erro: " . $erro -> getMessage();
}
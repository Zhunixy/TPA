<?php

include_once "conexao.php";

try{
    $codigo_f = filter_var($_POST['codigo_f'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);
    $atualizar = $conectar -> prepare ("UPDATE funcionario SET nome = :nome, cargo = :cargo WHERE codigo_f = :codigo_f");
    $atualizar -> bindParam(':codigo_f', $codigo_f);
    $atualizar -> bindParam(':nome', $nome);
    $atualizar -> bindParam(':cargo', $cargo);
    $atualizar -> execute();

    header("location: index.php");

}catch(PDOException $erro){
    echo "Erro: " . $erro -> getMessage();
}
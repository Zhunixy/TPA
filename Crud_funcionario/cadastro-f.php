<?php

include_once "conexao.php";

try{
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);

    $inserir = $conectar -> prepare ("INSERT INTO funcionario (nome, cargo) VALUES(:nome, :cargo)");
    
    $inserir -> bindParam(':nome', $nome);
    $inserir -> bindParam(':cargo' , $cargo);
    $inserir -> execute();

    header("location: index.php");

}catch(PDOException $erro){
    echo 'Erro: ' . $erro -> getMessage();
}

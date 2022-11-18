<?php

include_once "conexao.php";

try{
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);

    if(!empty($nome) && !empty($login)){

    $inserir = $conectar -> prepare ("INSERT INTO login (nome, login) VALUES(:nome, :login)");
    $inserir -> bindParam(':nome', $nome);
    $inserir -> bindParam(':login' , $login);
    $inserir -> execute();

    header("location: index.php");

    }else{
        header("location: Usuario.php");
    }
    

}catch(PDOException $erro){
    echo 'Erro: ' . $erro -> getMessage();
}

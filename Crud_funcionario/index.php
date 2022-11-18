<?php
include_once "conexao.php";

try{

    $consulta = $conectar -> query("SELECT * FROM funcionario");
    echo " <center> <a href = 'usuario-f.php'> <button> Cadastrar usuario </button> </a>
    <a href = 'home-cadastro.html'> <button> Voltar A Home </button> </a>
    <h1> Usuarios Cadastrados ";
    echo "<table border=1>
    <tr><td>Nome</td><td>Cargo</td><td>Ações</td> </tr>";
    
    while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
        echo "<tr> <td> $linha[nome] </td> <td> $linha[cargo] </td> <td> <a href='form-editar-f.php?codigo_f=$linha[codigo_f]'>
       <span> <i class='fa-solid fa-pen-to-square icone2'></i> </span></a> <a href='excluir-f.php?codigo_f=$linha[codigo_f]'> <i class='fa-solid fa-trash icon'></i> </a> </td> </tr>";
    }
    echo " </center> </table";
    echo $consulta ->rowCount(). " Registros"; 
}catch (PDOException $erro){
    echo $erro ->getMessage();
}

?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<script src="https://kit.fontawesome.com/6dfd030f20.js" crossorigin="anonymous"></script>



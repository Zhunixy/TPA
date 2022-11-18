<?php
include_once "conexao.php";

try{

    $consulta = $conectar -> query("SELECT * FROM login");
    echo "<a href = 'Usuario.php'> <button> Cadastrar usuario </button> </a>
    <h1> Usuarios Cadastrados ";
    echo "<table border=1>
    <tr><td>Nome</td><td>Login</td><td>Ações</td> </tr>";
    
    while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
        echo "<tr> <td> $linha[nome] </td> <td> $linha[login] </td> <td> <a class='icone2' href='formulario_editar.php?id=$linha[id]'>
       <span> <i class='fa-solid fa-pen-to-square'></i> </span></a> <a href='excluir.php?id=$linha[id]'> <i class='fa-solid fa-trash'></i> </a> </td> </tr>";
    }
    echo "</table";
    echo $consulta ->rowCount(). " Registros"; 
}catch (PDOException $erro){
    echo $erro ->getMessage();
}

?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<script src="https://kit.fontawesome.com/6dfd030f20.js" crossorigin="anonymous"></script>



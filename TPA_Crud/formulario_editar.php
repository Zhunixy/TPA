<?php

include_once "conexao.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar -> query("SELECT * FROM login where id = '$id'");
$linha = $consulta -> fetch(PDO::FETCH_ASSOC);
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="centro">
<div class="main">
<form action="editar.php" method="post">
<h1>Editar cadastro</h1>
        <input type="text" name="nome" placeholder="Insira seu nome" class="form" value=" <?php echo $linha['nome']?> 
        "id ="nome"/> <br> <br>
        <input type="text" class="form" placeholder="Insira seu login" name="login" value="<?php echo $linha['login']?>
        "id= "login"/> <br> <br>
        <input type="hidden" name="id" value="<?php echo $linha['id']?>">
        <input type="submit" id="btn" value="Editar">
</form>
</div>
</div>

<script src="https://kit.fontawesome.com/6dfd030f20.js" crossorigin="anonymous"></script>

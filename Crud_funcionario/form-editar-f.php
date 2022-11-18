<?php

include_once "conexao.php";

$codigo_f = filter_var($_GET['codigo_f'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar -> query("SELECT * FROM funcionario where codigo_f = '$codigo_f'");
$linha = $consulta -> fetch(PDO::FETCH_ASSOC);
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="centro">
<div class="main">
<form action="editar-f.php" method="post">
<h1>Editar cadastro</h1>
        <input type="text" name="nome" placeholder="Insira seu nome" class="form" value=" <?php echo $linha['nome']?> 
        "id ="nome"/> <br> <br>
        <input type="text" class="form" placeholder="Insira seu cargo" name="cargo" value="<?php echo $linha['cargo']?>
        "id= "cargo"/> <br> <br>
        <input type="hidden" name="codigo_f" value="<?php echo $linha['codigo_f']?>">
        <input type="submit" id="btn" value="Editar">
</form>
</div>
</div>

<script src="https://kit.fontawesome.com/6dfd030f20.js" crossorigin="anonymous"></script>

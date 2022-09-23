<?php

$n = $_POST['nome'];
$i = $_POST['idade'];
$s = $_POST['sexo'];

if($s == "Feminino " && $i < 25){
    echo $n . " ACEITA";
}else{
    echo $n . " NÃO ACEITA";
}
<?php

$n = $_POST['valor1'];

if($n % 2 == 0){
    echo $n . " Pode ser dividido por 2 " . "<br>";
}

else{
    echo $n . " Não pode ser dividido por 2 " . "<br>";
}

if($n % 5 == 0){
    echo $n . " Pode ser dividido por 5 " . "<br>";
}

else{
    echo $n . " Não pode ser dividido por 5 " . "<br>";
}

if($n % 10 == 0){
    echo $n . " Pode ser dividido por 10 " . "<br>";
}

else{
    echo $n . " Não pode ser dividido por 10 " . "<br>";
}
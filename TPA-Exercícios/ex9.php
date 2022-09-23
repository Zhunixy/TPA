<?php

$n = $_POST['nome'];
$i = $_POST['idade'];

if($i <= 10){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 30,00";
}

if($i > 10 && $i <= 29){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 60,00";
}

if($i > 29 && $i <= 45){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 120,00";
}

if($i > 45 && $i <= 59){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 150,00";
}

if($i > 59 && $i <= 65){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 250,00";
}

if($i > 65){
    echo $n . " Possui " . $i . " Anos. Você deve pagar R$: 400,00";
}
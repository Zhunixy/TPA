<?php

$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];

if($v1 != $v2){
    echo "O Número armazenado na letra A passou para B: " . $v1 . "<br>" ;
}

if($v2 != $v1){
    echo "O Número armazenado na letra B passou para A: " . $v2;
}
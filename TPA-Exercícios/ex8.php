<?php

$v = $_POST['valor'];

if($v <= 10){
    echo "Lucro de 70%!, R$ = " .  $v * 70 / 100 ;
}

if($v > 10.01 && $v <= 30){
    echo "Lucro de 50%!, R$ = " . $v * 50 / 100 ;
}

if($v > 30 && $v <= 50){
    echo "Lucro de 40%, R$ = " . $v * 40 / 100 ;
}

if($v > 50){
    echo "Lucro de 30%, R$ = " . $v * 30 / 100;
}
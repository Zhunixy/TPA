<?php

$idade = $_POST['numero'];

if($idade < 16){
    echo "Não eleitor, idade: " . $idade . " Anos";
}

if($idade >= 18 && $idade <= 65){
    echo "Eleitor obrigatório, idade: " . $idade . " Anos";
}

if($idade >= 16 && $idade < 18){
    echo "Eleitor facultativo, idade: " . $idade . " Anos";
}

if($idade > 65){
    echo "Eleitor facultativo, idade: " . $idade . " Anos";
}
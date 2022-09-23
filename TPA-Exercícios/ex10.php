<?php

$qtd = $_POST['valor'];

switch($qtd){
    case 1: echo "Aumento de 15%:.. R$ = " . $qtd + $qtd * 15 / 100;  break;
    case 3: echo "Aumento de 20%:.. R$ = " . $qtd + $qtd * 20 / 100;  break;
    case 4: echo "Aumento de 35%:.. R$ = " . $qtd + $qtd * 35 / 100;  break;
    case 8: echo "Aumento de 40%:.. R$ = " . $qtd + $qtd * 40 /100;  break;
}
<?php

$num1 = 2;
$num2 = 4;
$num3 = 6;
$num4 = 8;

//Resultado igual a 3
$resposta1 = ++$num2 - $num1;
//Resultado igual a 8
$resposta2 = $num3-- + $num1;
//Resultado igual a 9
$resposta3= --$num1+ $num4;

echo $resposta1;
echo '<br>';
echo $resposta2;
echo '<br>';
echo $resposta3;

// -operando: troca o sinal do operando.
// ++operando: conhecido como pré-incremento, primeiro incrementa depois realiza a operação.
// --operando: conhecido como pré-decremento, primeiro decrementa depois realiza a operação.
// operando++: conhecido como pós-incremento, primeiro faz a operação depois incrementa.
// operando--: conhecido como pós-decremento, primeiro faz a operação depois decrementa.

?>
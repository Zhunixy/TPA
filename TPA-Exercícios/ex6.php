<?php

$n = $_POST['valor'];

if($n < 20){
    echo "Valor do produto com lucro de 45%:.. " . $n * 45 / 100 . "<br>";
     
}else{
    echo "Valor do produto com lucro de 30%:..  " . $n * 45 / 100 . "<br>";

}
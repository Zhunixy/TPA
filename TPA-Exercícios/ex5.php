<?php

$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$v3 = $_POST['valor3'];
$v4 = $_POST['valor4'];
$v5 = $_POST['valor5'];

if($v1 > $v2 && $v1 > $v3 && $v1 > $v4 && $v1 > $v5){
   echo $v1 . " É o maior número "; 
}

if($v2 > $v1 && $v2 > $v3 && $v2 > $v4 && $v2 > $v5){
    echo $v2 . " É o maior número "; 
 }

 if($v3 > $v1 && $v3 > $v2 && $v3 > $v4 && $v3 > $v5){
    echo $v3 . " É o maior número "; 
 }

 if($v4 > $v1 && $v4 > $v2 && $v4 > $v3 && $v4 > $v5){
    echo $v4 . " É o maior número "; 
 }

 if($v5 > $v1 && $v5 > $v2 && $v5 > $v3 && $v5 > $v4){
    echo $v5 . " É o maior número " . "<br>" ; 
 }

 if($v1 < $v2 && $v1 < $v3 && $v1 < $v4 && $v1 < $v5){
    echo $v1 . " É o menor número"; 
 }
 
 if($v2 < $v1 && $v2 < $v3 && $v2 < $v4 && $v2 < $v5){
     echo $v2 . " É o menor número"; 
  }
 
  if($v3 < $v1 && $v3 < $v2 && $v3 < $v4 && $v3 < $v5){
     echo $v3 . " É o menor número"; 
  }
 
  if($v4 < $v1 && $v4 < $v2 && $v4 < $v3 && $v4 < $v5){
     echo $v4 . " É o menor número"; 
  }
 
  if($v5 < $v1 && $v5 < $v2 && $v5 < $v3 && $v5 < $v4){
     echo $v5 . " É o menor número"; 
  }
 
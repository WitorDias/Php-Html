<?php
$mini = "abcdefghijlmnopqrstuvxz";
$maiusc = "ABCDEFGHIJLMNOPQRSTUVXZ";
$simb = "!@#$%&*-";


//echo str_shuffle($maiusc);
for ($x = 0; $x < 8; $x++) {
    
    $aux = $x;
    $a = rand(0, 9);
    echo $a;

  
    
}

/*function random($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $minus = "abcdefghijklmnopqrstuvyxwz"; 
  $maius = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
  $numerico = "0123456789"; 
  $simb = "!@#$%¨&*()_+="; 
 
  if ($maiusculas){    
        $senha .= str_shuffle($maius);
  }
 
    if ($minusculas){
        $senha .= str_shuffle($minus);
    }
 
    if ($numeros){
        $senha $senha .= str_shuffle($numerico);
    }
 
    if ($simbolos){
        $senha .= str_shuffle($simb);
    }
    return substr(str_shuffle($senha),0,$tamanho);
}
echo gerar_senha(10, true, true, true, true);*/



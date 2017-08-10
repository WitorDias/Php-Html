<?php

$ano = $_POST['ano'];

function ano_bissexto($ano){
    $verifica = date('L', mktime(0, 0, 0, 1, 1, $ano));
    echo ($verifica? "é " : "não é ")." bissexto";
    
    return;
    }
    
    echo ano_bissexto($ano);
    



 


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


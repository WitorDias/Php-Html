<?php
/*$today = getdate();
print_r($today);*/

/*$hora = rand(1, 24);
if($hora <= 11){
    echo("Bom dia, são $hora");
}
elseif($hora <= 17){
    echo("Boa tarde, são $hora");
}
elseif($hora <= 23){
    echo("Boa noite, são $hora");
}*/


function horario (){

$hora = date("H");
if($hora >= 12 && $hora<18) {
$saud = "Boa tarde! ";}
else if ($hora >= 0 && $hora <12 ){
$saud = "Bom dia!   ";}
else {
$saud = "Boa noite! ";}
$mes = date('j/M');
echo ("João Pessoa, $mes. $saud");
return;

}

echo horario();


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


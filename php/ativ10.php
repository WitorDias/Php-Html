<?php
$var = $_POST['valor'];

$aux = explode(",", $var);

echo ("o maior valor é: ");
echo max($aux)."<br>";
echo ("o menor valor é: ");
echo min($aux)."<br>";



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


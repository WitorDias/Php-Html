<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
         $valor1 = $_POST['valor1'];
         $valor2 = $_POST['valor2'];
         $operacao = $_POST['operacao'];
        
         switch ($operacao) {
    case 'soma':
        $somar = $valor1 + $valor2;
        echo number_format($somar, 2,',','.');
        break;
    case 'subtrair':
        $subtrair = $valor1 - $valor2;
        echo number_format($subtrair, 2,',','.');
        break;
    case 'multiplicar':
           $multiplicar = $valor1 * $valor2;
        echo number_format($multiplicar, 2,',','.');
        break;
     case 'dividir':
           $dividir = $valor1 / $valor2;
        echo number_format($dividir, 2,',','.');
        break;
     case 'resto':
           $resto = $valor1 % $valor2;
        echo number_format($resto, 2,',','.');
        break;
     case 'media':
           $media = $valor1 + $valor2 / 2;
        echo number_format($media, 2,',','.');
        break;
}

     
        
        
        ?>
    </body>
</html>

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
         $nome = $_POST['nome'];
         $idade = $_POST['idade'];
         
         echo "Meu nome é $nome, James $nome!<br>";
         echo "Eu tenho $idade anos!<br>";
        ?>
    </body>
</html>

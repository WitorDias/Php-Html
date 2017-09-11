<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <style>
            #divCenter {
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="#E6E6FA">
         <div id="divCenter">
             <form id="formBuscar" action = "http://localhost/witor/persistencia/projeto.php" method ="post">
            <h3>Buscar Cliente:</h3>
             
                    Selecionar Cliente:<br>
        <select name="buscaCliente">
<?php
    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");            
    $sqlBuscaCliente = "select id, nome from cliente"; 
    
    $tabela = pg_query($conecta,  $sqlBuscaCliente); 
        while($linha = pg_fetch_array($tabela)){
            $aux = $linha['id'];
            $aux2 = $linha['nome'];
            echo "<option value=\"$aux\">ID: $aux Nome: $aux2</option>";
        }
    pg_close();
?>
            
        </select>
        </br>
           
            </br>
            <input type ="radio" name ="operador" value="buscarNome"/> Confirmar busca </br> <br></br> 
            <input type ="submit" value ="Requisitar"/><br><br>
        </form>
         </div>
    </body>
</html>

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
            <h3>Editar dados do Cliente:</h3>
             
                    Editar Cliente:<br>
                    
<?php
    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");
    $recebe = $_GET['id'];
    $sqlBuscaCliente = "select id, nome, rua, cidade from cliente where id = '$recebe' "; 
    
    
    $tabela = pg_query($conecta,  $sqlBuscaCliente); 
        while($linha = pg_fetch_array($tabela)){
            $id = $linha['id'];
            $nome = $linha['nome'];
            $rua = $linha['rua'];
            $cidade = $linha['cidade'];
            
            echo  "<br><input type='text' name='idCliente' value='".$id."' readonly></br>";
            echo  "<br><input type='text' name='nomeCliente' value='".$nome."'></br>";
            echo  "<br><input type='text' name='ruaCliente' value='".$rua."'></br>";
            echo  "<br><input type='text' name='cidadeCliente' value='".$cidade."'></br>";
            
        }
    pg_close();
?>
            
        </br>
           
            </br>
            <input type ="radio" name ="operador" value="editarCliente"/> Confirmar </br> <br></br> 
            <input type ="submit" value ="Requisitar"/><br><br>
        </form>
         </div>
    </body>
</html>

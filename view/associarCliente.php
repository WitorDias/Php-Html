<html>
    <head>
        <title>Associar clientes</title>
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
       <form id="formCadastro" action = "http://localhost/witor/persistencia/projeto.php" method ="post">

            <h3>Associar cliente a uma conta</h3>
           
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
            echo "<option value=\"$aux\">$aux2</option>";
        }
    pg_close();
?>
            
        </select>
        </br>
  
        Selecionar conta:<br>
        <select name="buscaConta">
<?php
    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");            
    $sqlBuscaCliente = "select c.idconta, a.agencia from contas as c inner join agencia as a
on (c.agencia = a.idagencia);"; 
    
    $tabela = pg_query($conecta,  $sqlBuscaCliente); 
        while($linha = pg_fetch_array($tabela)){
            $aux = $linha['idconta'];
            $aux2 = $linha['agencia'];
            echo "<option value=\"$aux\">$aux</option>";
        }
    pg_close();
?>
        </select>
        </br>    
            

            
            
            <input type ="radio" name ="operador" value ="associar"/> Confirmar cadastro<br/> <br></br> 
          
            <br><input type ="submit" value = "Cadastrar"/> <input type="reset" value = "resetar"/><br/> 
          
        </form>
        </div>  
    </body>
</html>
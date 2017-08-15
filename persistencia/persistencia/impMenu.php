<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Crud do Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
table, th, td {
    border: 1px solid black;
}
    </style>
    </head>
    <body>
        <form action = "http://localhost/witor/persistencia/impMenu.php" method ="post">
            <h2>Cadastrar novo Cliente:</h2>
            Inserir ID:<br><input type ="text" name = "idCliente" /> <br/>
            Inserir Nome:<br><input type ="text" name = "nomeCliente" /><br/>
            Inserir Rua:<br><input type ="text" name = "ruaCliente" /><br/>
            Inserir Cidade:<br><input type ="text" name = "cidadeCliente" /><br/>
            <br><input type ="submit" value = "Cadastrar"/><br/>
            <table>
                <center>
                <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Rua</th>
                <th>Cidade</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>  
                </tr>
                </center>
                
            </table>    
        </form>
        <?php>
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $idCli = $_POST['idCliente'];
    $nomeCli = $_POST['nomeCliente'];
    $ruaCli = $_POST['ruaCliente'];
    $cidadeCli = $_POST['cidadeCliente'];

    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");
    
$sqlCadastrar = "insert into cliente (id, nome, rua, cidade) values ('$idCli', '$nomeCli', '$ruaCli', '$cidadeCli')";

$result = pg_query($conecta,  $sqlCadastrar);
if(pg_affected_rows($result)>0){
    echo("Cliente cadastrado com sucesso!");    
}
    pg_close();
     
       
?>
<a href="../persistencia/impMenu.php">Voltar para o menu</a>
    </body>
</html>


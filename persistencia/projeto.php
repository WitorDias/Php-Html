<!DOCTYPE html!>
<html>
<head>
<body>
    <table>
    <?php
//$sql = "CREATE TABLE Cliente (
//id integer not null primary key,
//nome varchar(255) not null,
//rua varchar(255) not null,
//cidade varchar(255) not null)";

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $idCli = $_POST['idCliente'];
    $nomeCli = $_POST['nomeCliente'];
    $ruaCli = $_POST['ruaCliente'];
    $cidadeCli = $_POST['cidadeCliente'];
    $operador = $_POST['operador'];

    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");
  
//Cadastrar clientes 
//$sqlCadastrar = "insert into cliente (id, nome, rua, cidade) values ('$idCli', '$nomeCli', '$ruaCli', '$cidadeCli')";
//
//$result = pg_query($conecta,  $sqlCadastrar);
//if(pg_affected_rows($result)>0){
//    echo("Cliente cadastrado com sucesso!");    
//}
//Exibir lista de clientes
if($operador == 'buscar')
    {
$sqlExibir = "select nome, rua, cidade from Cliente where (nome like '$nomeCli')";
$tabela = pg_query($conecta,  $sqlExibir);
while($linha = pg_fetch_array($tabela))
        echo"<tr><td>".$linha['id']."<tr><td>".$linha['nome'].
        "<tr><td>".$linha['rua']."<tr><td>".$linha['cidade'];
}
    
//Atualizar Cliente
//$updateCliente = ("update cliente set id = '$idCli', nome = '$nomeCli', rua = '$ruaCli', cidade = '$cidadeCli'"); 
//$atualizarCliente = pg_query($conecta, $updateCliente);
////Excluir Cliente
//$excluirCliente = ("delete from cliente where id = '$idCli'");
//$excluir = pg_query($conecta, $excluirCliente);
pg_close();
 
?>
    </table>
    <a href="../view/menu.html">Voltar para o menu</a>
</body>
</head>    
</html>    
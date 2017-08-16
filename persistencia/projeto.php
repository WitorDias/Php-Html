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

    /*error_reporting(E_ALL);
    ini_set('display_errors', 1);*/
    
    $idCli = $_POST['idCliente'];
    $nomeCli = $_POST['nomeCliente'];
    $ruaCli = $_POST['ruaCliente'];
    $cidadeCli = $_POST['cidadeCliente'];
    $operador = $_POST['operador'];
    $idConta = $_POST['idConta'];
    $cidadeConta = $_POST['cidade'];
    $saldo = $_POST['saldo'];
    $agencia = $_POST['agencia'];

    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    $conecta = pg_connect($atributes) or die("Falha na conexão!");
    

//Cadastrar clientes 
    
    if($operador == 'cadastro'){
    $sqlCadastrar = "insert into cliente (id, nome, rua, cidade) values ('$idCli', '$nomeCli', '$ruaCli', '$cidadeCli')";
    $result = pg_query($conecta,  $sqlCadastrar);
        if(pg_affected_rows($result)>0)
            {
        echo("Cliente cadastrado com sucesso!");    
            }
    }
    
//Exibir lista de clientes
    elseif($operador == 'buscar')
    {
        $sqlExibir = "select * from Cliente where nome ilike '%$nomeCli%'";
        $tabela = pg_query($conecta,  $sqlExibir);
        if($tabela){
            while($linha = pg_fetch_array($tabela)){
            echo"<tr><td>"."id: ".$linha['id']."</td></tr>".
                "<tr><td><a href='../view/menu.html'>nome: ".$linha['nome']."</a></td></tr>".
                "<tr><td>"."rua: ".$linha['rua']."</td></tr>".
                "<tr><td>"."cidade: ".$linha['cidade']."</td></tr>";            
            } 
        } Else{
            echo("Usuario não encontrado");
              }
    }
    

//Atualizar Cliente por ID
    elseif($operador == 'updateId'){
        $updateCliente = ("update cliente set nome = '$nomeCli', rua = '$ruaCli', cidade = '$cidadeCli' WHERE id = '$idCli'"); 
        $atualizarCliente = pg_query($conecta, $updateCliente);
            if(!$atualizarCliente){
              echo("Ocorreu algum erro.");
        }   else{ 
            echo("Cliente atualizado com sucesso!");  
        }
    }
//Atualizar Cliente por nome
    elseif($operador == 'updateNome'){
        $updateCliente = ("update cliente set nome = '$nomeCli', rua = '$ruaCli', cidade = '$cidadeCli' WHERE nome ilike '$nomeCli'"); 
        $atualizarCliente = pg_query($conecta, $updateCliente);
            if(!$atualizarCliente){
              echo("Ocorreu algum erro.");
        }   else{ 
            echo("Cliente atualizado com sucesso!");  
        }
    }
////Excluir Cliente por ID
    elseif($operador == 'excluir'){
       $excluirCliente = ("delete from cliente where id = '$idCli'");
       $excluir = pg_query($conecta, $excluirCliente);
            if(!$excluir)
            {
            echo("Ocorreu um erro");
            } else{
              echo ("Cliente deletado com sucesso");
                    
                  }
    
}
////Cadastrar conta
   elseif($operador == 'cadastrarConta'){
    $sqlCadastrarConta = "insert into Contas (idconta, cidade, saldo, agencia) values ('$idConta', '$cidadeConta', '$saldo', '$agencia')";
    if($saldo > 0){
    $result = pg_query($conecta,  $sqlCadastrarConta);
    if($sqlCadastrarConta)
            {
        echo("Conta cadastrada com sucesso!");    
            }
            else{
                echo("ocorreu algum erro");
            }
    }
     Else{
        echo("Digite um valor não negativo");
    }
       
    }
    //Exibir lista de contas
    elseif($operador == 'buscarConta')
    {
        
        
        $sqlExibir = "select * from Contas";
        
        if($idConta != ''){
            $sqlExibir .= " where idconta = '$idConta'";
        }
        
        $tabela = pg_query($conecta,  $sqlExibir);
        if($tabela){
            while($linha = pg_fetch_array($tabela)){
            echo"<tr><td>"."id: ".$linha['idconta'].
                "<tr><td>"."cidade: ".$linha['cidade'].
                "<tr><td>"."saldo: R$ ".$linha['saldo'].
                "<tr><td>"."agencia: ".$linha['agencia'];            
            } 
        } Else{
            echo("Conta não encontrada");
              }
    }
    
    //Buscar todas as contas
        elseif($operador == 'buscarAllConta')
    {
            
        $sqlExibir = "select * from Contas";
        $tabela = pg_query($conecta,  $sqlExibir);
      if($tabela){
            while($linha = pg_fetch_array($tabela)){
            echo"<tr><td>"."id: ".$linha['idconta'].
                "<tr><td>"."cidade: ".$linha['cidade'].
                "<tr><td>"."saldo: R$ ".$linha['saldo'].
                "<tr><td>"."agencia: ".$linha['agencia'];            
            } 
        } Else{
            echo("Conta não encontrada");
              }
        
    }
    
else{
    echo("Por favor, confirmar a operação.");
    
}

pg_close();
 
?>
    </table>
<center><a href="../view/menu.html">Voltar para o menu</a></center>
</body>
</head>    
</html>    
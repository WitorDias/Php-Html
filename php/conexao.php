<?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $atributes = "host=localhost port=5432 dbname=witor user=postgres password=123456";
    
    echo $atributes;
    $conecta = pg_connect($atributes) or die("Falha na conexão!");
    
//$sql = "insert into info (produto, valor, quantidade) values ('gabinete', 40, 4)";
//$sql = "CREATE TABLE Cliente (
//id integer not null primary key,
//nome varchar(255) not null,
//rua varchar(255) not null,
//cidade varchar(255) not null)";
    echo $sql;
    
    $result = pg_query($conecta,  $sql);
    pg_close();

//echo "teste";

?>







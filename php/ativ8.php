<html>
    
<head>
    
<body>

<?php

$nome = $_POST['texto'];
$array = explode(",", $nome);

echo ($nome)."<br>";
echo strlen($nome)."<br>";
echo ucwords($nome)."<br>";
echo sizeof($array)."<br>";
echo str_shuffle($nome)."<br>";

/*
for($x = 0; $x < sizeof($array); $x++){
    $aux = $x;
    
echo ($array[$aux])."<br>";
echo strlen($array[$aux])."<br>";
echo ucwords($array[$aux])."<br>";
echo shuffle($array[$aux])."<br>";   
}
*/





?>
</body>

</head>

</html>

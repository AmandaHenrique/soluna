<?php
$ip = "localhost";
$login = "id8004565_amanda";
$senha = "whitebloodcell";
$banco = "id8004565_cadastro";

$conn=mysqli_connect($ip, $login, $senha, $banco);


if($conn){
}else{
	echo("Erro de Conexão !");
}

?>
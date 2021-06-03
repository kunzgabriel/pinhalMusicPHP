<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'pinhalMusic';

$con = mysqli_connect($host, $usuario, $senha, $database);

if (!$con) {
	echo "Erro de conexão com o bd!.";
	exit;
}
?>
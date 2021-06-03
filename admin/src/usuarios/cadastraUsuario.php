<?php

include '../model/Connection.php';
$p = $_POST;
$conn = (new Connection())->getConnection('pinhalMusic');
$nome = $p['nome'];
$login = $p['login'];
$senha = $p['senha'];

$sql = "select * from usuarios where login = '{$login}'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);

if ($results) {
    echo "<script>alert('Já existe um usuário cadastrado com esse login');
    window.location = './index.php';</script>";
    exit; 
}

$sqlInsert = "insert into usuarios (nome, login, senha) values ('{$nome}', '{$login}', '{$senha}')";
$queryInsert = mysqli_query($conn, $sqlInsert);
echo "<script>alert('Usuário {$nome} cadastrado com sucesso!');
    window.location = './index.php';</script>";
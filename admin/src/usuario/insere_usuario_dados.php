<?php
if (isset($_POST['inp_login']) && isset($_POST['inp_nome']) && isset($_POST['inp_senha'])) {
    require "../../conecta.php";
    require "../../lib/funcoes.php";

    $nome = $_POST['inp_nome'];
    $login =  $_POST['inp_login'];
    $senha =  $_POST['inp_senha'];

    $sql = "select * from usuarios where login = '{$login}'";
    $query = mysqli_query($con, $sql);
    $results = mysqli_fetch_assoc($query);

    if ($results) {
        get_error_msg('Já existe um usuário cadastrado com esse login');
        exit; 
    }

    $sqlInsert = "insert into usuarios (nome, login, senha) values ('$nome', '$login', '$senha')";

    if (!(mysqli_query($con, $sqlInsert))) {
        die(mysqli_error($con));
        exit ;
    }
    get_success_msg("Usuário {$nome} cadastrado com sucesso");
}
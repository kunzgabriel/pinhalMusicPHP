<?php

session_name("PinhalMusic");
session_start();

if(isset($_SESSION['login']) and isset($_SESSION['senha'])) {
    $login = $_SESSION["login"];
    $senha = $_SESSION["senha"];
} else {
    echo "<script>alert('Sessão expirada...');</script>";
    echo "<script>window.location ='../../index.php';</script>";
    exit;
}
?>

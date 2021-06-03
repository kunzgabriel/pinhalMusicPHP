<?php
require "conecta.php"; 

$login = $_POST['login']; 
$senha = $_POST['senha']; 

if (preg_match("/^[a-zA-Z0-9çÇ_@]{1,}$/i", $login) and (preg_match("/^[a-zA-Z0-9çÇ_@]{1,}$/i", $senha))) {
    $sql = "select * from usuarios where login='{$login}' and senha='{$senha}'";
    $query = mysqli_query($con, $sql); 
    $row = mysqli_fetch_row($query);
    if ($row) {
        $lifetime=600;
        session_set_cookie_params($lifetime);
        session_name("PinhalMusic");
        session_start();
        $_SESSION["login"] = $login;
        $_SESSION["senha"] = $senha;
        header("Location:src/dashboard/dashboard.php");
    } else {
        echo "<script>alert('Login ou senha incorretos');
            window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Login ou senha incorretos');
        window.location='index.php';</script>";
}
?>
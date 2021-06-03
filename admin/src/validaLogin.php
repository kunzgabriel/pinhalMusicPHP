<?php

include 'model/Connection.php';
$p = $_POST;
$conn = (new Connection())->getConnection('pinhalMusic');
$login = $p['login'];
$senha = $p['senha'];

$sql = "select * from usuarios where login = '{$login}' and senha = '{$senha}'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);
$msg = '';
if ($results) {
    $msg = "<script>
                alert('✅ {$results['nome']} conectado com sucesso! Acessando o Painel Administrativo!');
                window.location = '../painel.php';
            </script>";
    session_name('PinhalMusic');
    session_start();
    $_SESSION['idUsuario'] = $results['id'];
    $_SESSION['nome'] = $results['nome'];
    $_SESSION['login'] = $results['login'];
    $_SESSION['horaLogin'] = (new DateTime('now', new DateTimeZone('America/Sao_Paulo')))->format('d/m/Y H:i:s');
} else {
    $msg = "<script>
                alert('⚠️ Oupss... Parece que seus dados de Login ou Senha estão incorretos!');
                window.location = '../index.php';
            </script>";
}
echo $msg;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando Login</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
</head>
<body>

</body>
</html>
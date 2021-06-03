<?php

session_name('PinhalMusic');
session_start();

include 'src/model/Connection.php';

$conn = (new Connection())->getConnection('pinhalMusic');
$msg = '';
if (!$conn){
    $msg = "<script>
                alert('⚠️ Ocorreu uma falha ao conectar no Banco de Dados!');
                window.location = '../pages/index.php';
            </script>";
}
echo $msg;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Painel Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../img/logo.png" height="24px" width="24px">
                <a class="navbar-brand" style="font-weight: bold;" href="#">&nbsp;PinhalMusic - Painel Administrador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Produtos</a></li>
                                <li><a class="dropdown-item" href="src/usuarios/index.php">Usuários</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/index.php">Retornar ao Site</a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">
                                Logado como <?php echo $_SESSION['nome'] ?> desde <?php echo $_SESSION['horaLogin'] ?> 
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
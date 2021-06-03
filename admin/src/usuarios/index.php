<?php

session_name('PinhalMusic');
session_start();

include '../model/Connection.php';

$conn = (new Connection())->getConnection('pinhalMusic');
$msg = '';
if (!$conn) {
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
    <title>PinhalMusic - Painel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../../../img/logo.png" height="24px" width="24px">
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
                                <li><a class="dropdown-item" href="#">Usuários</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../pages/index.php">Retornar ao Site</a>
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
    <div class="container mt-5">
        <h3 style="font-weight: bold;">Cadastro de Usuários</h3>
        <button type="button" style="width: 200px; height: 50px;" class="btn btn-primary" id="btnNovoUsuario">Novo</button>
        <table class="table table-bordered data-table mt-3">
            <thead>
                <tr>
                    <th style="width: 10%; text-align: center">Código</th>
                    <th style="width: 35%; text-align: center">Nome</th>
                    <th style="width: 35%; text-align: center">Login</th>
                    <th style="width: 12%; text-align: center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $conn = mysqli_connect('localhost', 'root', '', 'pinhalMusic');
                    $sql = "select id, nome, login from usuarios";
                    $query = mysqli_query($conn, $sql);
                    while ($usuarios = mysqli_fetch_array($query)) {
                        $id = $usuarios['id'];
                        $nome = $usuarios['nome'];
                        $login = $usuarios['login'];
                ?>
                    <tr class="grade_">
                        <td><?php echo $id ?></td>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $login ?></td>
                        <td>
                            <a class="btn btn-small btn-primary" href="editarUsuario.php?id=<?php echo $id ?>" /><i class='icon-edit icon-white'></i> Editar</a>
                            <a class="btn btn-small btn-danger" href="editarUsuario.php?id_exc=<?php echo $id ?>" onclick='return confirm("Deseja Remover o registro selecionado?");'><i class='icon-remove-circle icon-white'></i> Excluir</a>
                        </td>
                    </tr>
                <?php
                    };
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<div class="modal fade" id="novoUsuarioModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="./cadastraUsuario.php">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" required>
                        <label for="floatingInput">Nome</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="login" name="login" autocomplete="off" required>
                        <label for="floatingInput">Login</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="senha" name="senha" autocomplete="off" required>
                        <label for="floatingPassword">Senha</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" value="Salvar"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $('#btnNovoUsuario').click(function() {
        $('#novoUsuarioModal').modal('show');
    });
</script>
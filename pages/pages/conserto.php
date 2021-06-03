<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Conserto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
    <link rel="icon" type="imagem/png" href="../img/logo.png"/>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../../img/logo.png" height="24px" width="24px">
                <a class="navbar-brand" style="font-weight: bold;" href="#">&nbsp;PinhalMusic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" aria-current="page" href="#"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="venda.php">Venda</a></li>
                                <li><a class="dropdown-item active" href="#">Conserto</a></li>
                                <li><a class="dropdown-item" href="upgrade.php">Upgrade</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../admin/index.php">Painel Administrador</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-3">
        <h1 class="py-3" style="text-align: center;">Conserto de Instrumentos</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="./img/conserto_01.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regulagem da Pestana</h5>
                        <p class="card-text">
                            Ajustes finos para que o seu instrumento emita o melhor som possível, sem que as cordas arranhem 
                            os trastes do braço do instrumento.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./img/conserto_02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lixamento da Pestana</h5>
                        <p class="card-text">
                            Lixamento realizado para melhor performance e menos gasto das cordas no atrito que ocorre no momento
                            do toque e afinação do instrumento.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./img/conserto_03.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reparos Estruturais</h5>
                        <p class="card-text">
                            Colagem e reparos estruturais em todos os componentes do instrumento, como cavalete, cotovelo, costela,
                            tampo e braço.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./img/conserto_04.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Troca e manutenção de componentes</h5>
                        <p class="card-text">
                            Troca de componentes do instrumento, como afinadores, captadores, plugues, potenciomentos, chaves,
                            tarrachas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer bg-dark py-3" style="text-align: center; position: relative; bottom: 0; width: 100%;">
        <div class="container-fluid text-muted">
            <div class="row">
                <div class="col-sm">
                    Todos os direitos revervados <br>
                    PinhalMusic Instrumentos Musicais LTDA <br>
                    Av. Brasília, 3682 - Ed. Tower, Centro <br>
                    89870-000 - Pinhalzinho - SC <br>
                </div>
                <div class="col-sm">
                    <div class="container py-3">
                        <a href="#"><img src="../../img/facebook.png" height="64px" width="64px"></a>
                        <a href="#" style="padding-left: 25px;"><img src="../../img/instagram.png" height="64px"
                                width="64px"></a>
                        <a href="#" style="padding-left: 25px;"><img src="../../img/whatsapp.png" height="64px"
                                width="64px"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
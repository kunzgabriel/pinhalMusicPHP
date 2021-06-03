<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Artigos Musicais</title>
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
                <img src="../img/logo.png" height="24px" width="24px">
                <a class="navbar-brand" style="font-weight: bold;" href="#">&nbsp;PinhalMusic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="pages/venda.php">Venda</a></li>
                                <li><a class="dropdown-item" href="pages/conserto.php">Conserto</a></li>
                                <li><a class="dropdown-item" href="pages/upgrade.php">Upgrade</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/index.php">Painel Administrador</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/banner.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../img/banner2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../img/banner3.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próxima</span>
        </button>
    </div>
    <br><br>
    <div class="card-group" style="text-align: center;">
        <div class="card" style="border-radius: 20px;">
            <a href="pages/venda.php"><img src="../img/card-01.png" class="card-img-top"
                    style="border-radius: 20px;"></a>
            <div class="card-body">
                <p class="card-text">
                    Nossa loja dispõe de um catálogo completo de instrumentos musicais de corda, teclas e
                    percussão, além de eletrônicos como mesas de som, amplificadores e caixas de som.<br><br>
                    Possuímos exemplares que podem atender músicos de todos os níveis, seja você iniciante ou
                    profissional,
                    oferecendo sempre instrumentos da melhor qualidade.
                </p>
            </div>
        </div>
        <div class="card" style="border-radius: 20px;">
            <a href="pages/conserto.php"><img src="../img/card-02.png" class="card-img-top"
                    style="border-radius: 20px;"></a>
            <div class="card-body">
                <p class="card-text">
                    Seja para a realização de pequenos reparos ou para grandes revitalizações, nossa equipe de
                    profissionais está extremamente capacitada para recuperar o seu tão querido instrumento.<br><br>
                    Afinal de contas, quem é que não tem aquele violãozinho velho, que foi passando de geração em
                    geração.
                    A gente entende o valor sentimental do instrumento, portanto fique tranquilo, que vamos
                    trabalhar
                    com muito carinho para que ele alegre os encontros de família e amigos novamente.
                    <br><br><br><br><br>
                </p>
            </div>
        </div>
        <div class="card" style="border-radius: 20px;">
            <a href="pages/upgrade.php"><img src="../img/card-03.png" class="card-img-top"
                    style="border-radius: 20px;"></a>
            <div class="card-body">
                <p class="card-text">
                    Você sente que está na hora de ir ao próximo nível, porém não quer gastar muito para ter o
                    instrumento
                    à altura de suas habilidades? <br>
                    Com o nosso programa de <strong><i>upgrades</i></strong> o instrumento dos seus sonhos pode
                    estar mais
                    próximo do que você pode imaginar. Mas como isso funciona? É muito simples!!<br>
                    O seu instrumento usado é recebido como parte do valor na compra de um instrumento novinho!
                    Nossa equipe
                    de profissionais fará uma justa avaliação para estipular o valor que será abatido na compra.
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card text-center" style="border-radius: 20px;">
        <div class="card-body">
            <h5 class="card-title">COMPROMISSO</h5>
            <p class="card-text">
                Nosso compromisso é entregar qualidade aos nossos clientes, utilizando processos padronizados
                de controle e garantindo que nossos produtos superem suas espectativas!!
                <br><br>
                Clique abaixo para conhecer melhor a gente!!
            </p>
            <a href="sobre.php" class="btn btn-primary">Sobre Nós</a>
        </div>
    </div>
    <br><br>

    <!-- Modal -->
    <div class="modal" id="anuncioModal" tabindex="-1" aria-labelledby="anuncioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anuncioModalLabel">PinhalMusic - Anúncio Promo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/anuncio.jpg" width="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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
                        <a href="#"><img src="../img/facebook.png" height="64px" width="64px"></a>
                        <a href="#" style="padding-left: 25px;"><img src="../img/instagram.png" height="64px"
                                width="64px"></a>
                        <a href="#" style="padding-left: 25px;"><img src="../img/whatsapp.png" height="64px"
                                width="64px"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#anuncioModal').modal('show');
        });
    </script>
</body>

</html><!-- bootstrap -->
    
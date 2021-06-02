<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Upgrade</title>
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
                <a class="navbar-brand" href="#">PinhalMusic</a>
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
                            <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="venda.php">Venda</a></li>
                                <li><a class="dropdown-item" href="conserto.php">Conserto</a></li>
                                <li><a class="dropdown-item active" aria-current="page" href="#">Upgrade</a></li>
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

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/upgrade.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./img/upgrade-2.png" class="d-block w-100">
                </div>=
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
    </div>

    <div class="container py-3">
        <h1 class="py-3" style="text-align: center;">Upgrade de Instrumentos</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        O que é o Upgrade de Instrumentos?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        O <i>Upgrade de Instrumentos</i> é um programa oferecido pela <i>PinhalMusic</i> que visa a
                        compra de instrumentos novos
                        por meio da troca de seu instrumento usado. <br><br>Basicamente, você entrega seu instrumento usado e
                        ele passa por uma justa avaliação
                        de nossos especialistas, que estipularão o valor a ser descontado na compra de um instrumento
                        novo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Qualquer instrumento usado pode ser entregue na troca por um novo?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sim!! <br>
                        Você pode entregar qualquer instrumento musical usado, seja ele de cordas, teclas, percussão,
                        sopro, etc.<br><br>
                        Todo e qualquer instrumento recebido será avaliado para que seja estipulado o valor a ser
                        descontado na compra de seu instrumento novo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Um violão usado, pode apenas ser usado para upgrade de um novo violão? Posso usá-lo para compra de um acordeon?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Qualquer instrumento usado pode ser utilizado para upgrade para qualquer instrumento novo! <br><br>
                        Então sim, você pode utilizar um violão usado para fazer upgrade a um acordeon, teclado, cajon, etc.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Que características são levadas em consideração para avaliação do meu instrumento usado?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Em primeiro lugar, queremos garantir que nossa avaliação é extremamente justa!<br><br>
                        Algumas características consideradas são:
                        <ul>
                            <li>Estado de conservação geral do instrumento.</li>
                            <li>Estado de conservação das cordas (caso haja).</li>
                            <li>Qualidade de emissão sonora.</li>
                            <li>Material de construção.</li>
                            <li>Depreciação.</li>
                            <li>Acessórios.</li>
                        </ul>
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
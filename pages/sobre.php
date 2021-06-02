<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Sobre Nós</title>
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
                <a class="navbar-brand" href="#">PinhalMusic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Sobre Nós</a>
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
                            <a class="nav-link" href="./contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/index.php">Painel Administrador</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container"><br>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading" style="font-weight: bold;">A Empresa</h2>
                <p class="lead" style="text-align: justify;">
                    A PinhalMusic foi idealizada e fundada pelos irmãos Gabriel Kunz e Fernando Kunz, no ano de 2026.
                    <br>
                    Inicialmente, Gabriel e Fernando levavam como hobby a manutenção de instrumentos musicais da
                    família, porém
                    como o trabalho era visivelmente feito com muito carinho, demais pessoas da comunidade ficaram
                    interessados
                    e solicitaram os serviços de revitalização de instrumentos musicais aos irmãos Kunz.<br>
                    Aos poucos o trabalho foi ganhando visibilidade, até que chegou o momento em que os irmãos começaram
                    a comprar
                    e revender instrumentos. Demonstrando sempre o cuidado com os instrumentos e amor à música, a loja
                    foi crescendo
                    e atingiu patamares nacionais, sendo hoje, uma das principais empresas de comercialização e reparos
                    de
                    instrumentos musicais do Brasil.
                </p>
            </div>
            <div class="col-md-5">
                <img src="../img/sobre-01.jpg" height="400px" width="400px">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="font-weight: bold;">Missão</h2>
                <p class="lead">
                    Entregar aos clientes instrumentos musicais e equipamentos de qualidade, garantindo assim que suas
                    habilidades musicais sejam exploradas ao máximo, despertando dessa forma o amor pela música no
                    coração das pessoas.
                </p>
                <h2 class="featurette-heading" style="font-weight: bold;">Visão</h2>
                <p class="lead">
                    Ser uma empresa referência de comercialização e reparos de instrumentos musicais em território
                    mundial, com constante
                    aperfeiçoamento de processos e na prestação de serviços aos clientes.
                </p>
                <h2 class="featurette-heading" style="font-weight: bold;">Valores</h2>
                <p class="lead">
                    - Amor pela música e por sua história. <br>
                    - Confiança. <br>
                    - Só é bom para nós, se está sendo maravilhoso para o cliente.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="col-md-5">
                    <img src="../img/sobre-02.png" height="400px" width="400px">
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading" style="font-weight: bold;">Conheça a nossa estrutura</h2>
                <p class="lead">
                    No vídeo ao lado a gente te mostra em um tour completo toda a estrutura da nossa loja física!
                    <br><br>
                    Se você curte instrumentos musicais, cuidado, há grandes riscos de você se apaixonar pela nossa
                    loja!!
                </p>
            </div>
            <div class="col-md-5">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/QaUVCq-njD4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
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
                        <a href="#" style="padding-left: 25px;"><img src="../img/instagram.png" height="64px" width="64px"></a>
                        <a href="#" style="padding-left: 25px;"><img src="../img/whatsapp.png" height="64px" width="64px"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
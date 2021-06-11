<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Venda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="../../styles/style.css">
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
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item active" aria-current="page" href="#">Venda</a></li>
                                <li><a class="dropdown-item" href="conserto.php">Conserto</a></li>
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

    <?php
        include '../../admin/conecta.php';
        $sql = "select * from produtos";
        $query = mysqli_query($con, $sql);
        while ($p = mysqli_fetch_array($query)) {
            $cards[] = "
            <div class='card'>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <img src='../../admin/src/produtos/{$p['proImagemInterna']}' class='card-img-top py-3'>
                    </div>
                    <div class='carousel-item active frente'>
                        <img src='../../admin/src/produtos/{$p['proImagemExterna']}' class='card-img-top py-3'>
                    </div>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>{$p['proCodigo']} - {$p['proDescricao']}</h5>
                    <p class='card-text' style='text-align: justify; font-size: 13px;'>Peso Bruto: {$p['proPesoBruto']} KG</p>
                    <a href='#' class='btn btn-primary'>Ver detalhes...</a>
                </div>
            </div>
            ";
        } 
        $cont = 0;
        $html = '';
        for ($i = 0; $i < count($cards); $i++) {
            $cont = $cont === 3 ? 0 : $cont;
            $cont == 0 && $html .= "<div class='card-group container pt-3'>"; 
            $html .= $cards[$i];
            $cont++;
            $cont == 3 && $html .= "</div>";
        }
        echo $html;
    ?>

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

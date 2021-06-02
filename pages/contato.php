<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalMusic - Contato</title>
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
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sobre.php">Sobre Nós</a>
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
                            <a class="nav-link active" aria-current="page" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/index.php">Painel Administrador</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contato</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i> Deixa seu recado pra
                        gente
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Informe seu nome" required>
                            </div><br>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Informe seu e-mail" required>
                                <small id="emailHelp" class="form-text text-muted">Prometemos não compartilhar seu
                                    e-mail
                                    com outras corporações! Sobre SPAM, fique tranquilo, a gente não faz isso.
                                </small>
                            </div><br>
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" id="message" rows="6" required></textarea>
                            </div><br>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white"><i class="fa fa-home"></i> Onde a gente está?
                    </div>
                    <div class="card-body">
                        <p>Av. Brasília, 3682, Centro <br>
                            Edifício Tower <br>
                            Pinhalzinho - SC - 89870-000<br>
                            E-mail: contato@pinhalmusic.com.br <br>
                            Telefone: (49) 3366-3366 <br>
                            WhatsApp: (49) 9999-8888</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.96230812736457!2d-52.987177962386895!3d-26.849541404963745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fb2093fd3aad55%3A0xccd0db89669f2164!2sSC-160%2C%202250%20-%20Centro%2C%20Pinhalzinho%20-%20SC%2C%2089870-000!5e0!3m2!1spt-BR!2sbr!4v1617942390836!5m2!1spt-BR!2sbr"
                            width="100%" height="300" style="border-style: solid black;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
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
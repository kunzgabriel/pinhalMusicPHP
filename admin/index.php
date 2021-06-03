<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/login_style.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <style>
        fieldset {
            margin: 0 auto;
            width: 300px;
            height: auto
        }
    </style>
</head>

<body>
    <div id="wrap">
        <div id="corpo">
            <div id="base_login">
                <form name="frm" method="POST" action="login.php" class="format_login">
                    <div id="engloba_log">
                        <input class="input_login" type="text" name="login" id="usuario" maxlength="20" placeholder="Informe seu Login" />
                        <br />
                        <input class="input_senha" type="password" id="senha" name="senha" maxlength="20" placeholder="Informe sua Senha" />
                        <input id="input_login_button" type="submit" value="enviar" />
                        <a class="redefinir_senha" href="esqueci_senha.php">Esqueceu sua Senha?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
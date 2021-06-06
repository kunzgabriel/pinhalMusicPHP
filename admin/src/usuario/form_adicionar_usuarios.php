<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("../../inc/inc_base_header.php");
    ?>
</head>

<body>
    <?php
    include("../../inc/inc_header.php");
    ?>
    <div id="content">
        <div id="content-header">
            <h1>Adicionar Usuários</h1>
        </div>
        <div id="breadcrumb">
            <a href="dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="form_adicionar_usuarios.php" class="current">Usuários</a>
        </div>
        <div class="container-fluid">
            <?php
            include("../../inc/inc_loading.php");
            ?>
            <div class="row-fluid">
                <div class="span12">
                    <form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="insere_usuario_dados.php">
                        <div class="control-group">
                            <label class="control-label" for="inp_nome">Nome*:</label>
                            <div class="controls">
                                <input type="text" name="inp_nome" id="inp_nome" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_login">Login*:</label>
                            <div class="controls">
                                <input type="text" name="inp_login" id="inp_login" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_senha">Senha*:</label>
                            <div class="controls">
                                <input type="password" name="inp_senha" id="inp_senha" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <div class="alert alert-danger">
                                    (*) Campos com preenchimento obrigatório;
                                </div>
                            </div>
                        </div>
                        <?php
                        include("../../inc/inc_submit.php");
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../../inc/inc_base_footer.php");
    ?>
    <!--Esta função é chamada no nosso botão para abrir uma caixa de dialogo mais bonitinha para receber a msg   -->

    <script>
        function alert_msg() {
            $('#alert_modal').modal('show');
            $('#alert_modal p').html("");
            $('#alert_footer').html("");
        }
    </script>

    <script>
        $('#frm_cad').ajaxForm({
            success: function(resposta) {
                $('#alert_modal p').append(resposta);
                $('#alert_footer').append("<a href='#' class='btn btn-primary'>Fechar</a>");
            }
        });
    </script>

</body>

</html>
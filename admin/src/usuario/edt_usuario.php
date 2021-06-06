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
            <h1>Alteração de Dados</h1>
        </div>
        <div id="breadcrumb">
            <?php
            require "../../conecta.php";

            $id = (isset($_GET['id']) ? $_GET['id'] : 0);

            $sql = mysqli_query($con, "select * from usuarios where id = $id") or die(mysqli_error($con));
            $listagem = mysqli_fetch_array($sql);
            $nome = $listagem['nome'];
            $login = $listagem['login'];

            ?>
            <a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="edt_dado_slide.php?id=<?php echo $id ?>" class="current">Alteração Senha</a>
        </div>
        <div class="container-fluid">
            <?php include("../../inc/inc_loading.php"); ?>
            <div class="row-fluid">
                <div class="span12">
                    <form id="frm_edt" name="frm_edt" method="post" class="form-horizontal" action="update_usuario.php" enctype="multipart/form-data">
                        <input style="display: none" hidden value=<?php echo " '$id' " ?> name="id" />
                        <div class="control-group">
                            <label class="control-label" for="inp_nome">Nome*:</label>
                            <div class="controls">
                                <input required type="text" name="inp_nome" id="inp_nome" class="input-xlarge" placeholder="Informe..." <?php echo " value='$nome'" ?>>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_login">Login*:</label>
                            <div class="controls">
                                <input disabled type="text" name="inp_login" id="inp_login" class="input-xlarge" placeholder="Informe..." <?php echo " value='$login'" ?>>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_senha">Senha Antiga*:</label>
                            <div class="controls">
                                <input required type="password" name="inp_senhaAntiga" class="input-xlarge" placeholder="Informe...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_senha">Nova Senha*:</label>
                            <div class="controls">
                                <input required type="password" name="inp_senhaNova" class="input-xlarge" placeholder="Informe...">
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
                        include "../../inc/inc_submit.php";
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../../inc/inc_base_footer.php");
    ?>

    <script>
        function alert_msg() {
            $('#alert_modal').modal('show');
            $('#alert_modal p').html("");
            $('#alert_footer').html("");
        }
    </script>

    <script>
        $('#frm_edt').ajaxForm({
            success: function(resposta) {
                $('#alert_modal p').append(resposta);
                if (resposta == "<div class='alert alert-success'>Senha Atualizada</div>") {
                    $('#alert_footer').append("<div onclick='location.reload();' class='btn btn-primary'>Fechar</div>");
                } else {
                    $('#alert_footer').append("<div class='btn btn-primary'>Fechar</div>");
                }
            }
        });
    </script>


 </body>

 </html>
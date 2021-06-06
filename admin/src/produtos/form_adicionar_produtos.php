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
            <h1>Cadastrar Produtos</h1>
        </div>
        <div id="breadcrumb">
            <a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="form_adicionar_produtos.php" class="current">Produtos</a>
        </div>
        <div class="container-fluid">
            <?php
            include("../../inc/inc_loading.php");
            ?>
            <div class="row-fluid">
                <div class="span12">
                    <form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="insere_dados_produtos.php" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label" for="proCodigo">Código*:</label>
                            <div class="controls">
                                <input type="text" pattern="\d*" name="proCodigo" id="proCodigo" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proDescricao">Descrição*:</label>
                            <div class="controls">
                                <input type="text" name="proDescricao" id="proDescricao" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proComprimento">Comprimento*:</label>
                            <div class="controls">
                                <input type="text" name="proComprimento" id="proComprimento" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proLargura">Largura*:</label>
                            <div class="controls">
                                <input type="text" name="proLargura" id="proLargura" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proAltura">Altura*:</label>
                            <div class="controls">
                                <input type="text" name="proAltura" id="proAltura" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proPesoBruto">Peso Bruto*:</label>
                            <div class="controls">
                                <input type="text" name="proPesoBruto" id="proPesoBruto" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proPesoLiquido">Peso Líquido*:</label>
                            <div class="controls">
                                <input type="text" name="proPesoLiquido" id="proPesoLiquido" class="input-xlarge" placeholder="Informe..." value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proImagemExterna">Imagem Externa*:</label>
                            <div class="controls">
                                <input type="file" name="proImagemExterna" id="proImagemExterna" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="proImagemInterna">Imagem Interna*:</label>
                            <div class="controls">
                                <input type="file" name="proImagemInterna" id="proImagemInterna" class="input-xlarge">
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
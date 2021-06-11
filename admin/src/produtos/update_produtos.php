<?php

require '../../conecta.php';
include '../../lib/funcoes.php';

$produto['proCodigo'] = $_POST['proCodigo'];
$produto['proDescricao'] = $_POST['proDescricao'];
$produto['proComprimento'] = $_POST['proComprimento'];
$produto['proAltura'] = $_POST['proAltura'];
$produto['proLargura'] = $_POST['proLargura'];
$produto['proPesoBruto'] = $_POST['proPesoBruto'];
$produto['proPesoLiquido'] = $_POST['proPesoLiquido'];
$produto['proImagemExterna'] = isset($_FILES['proImagemExterna']) ? $_FILES['proImagemExterna'] : null;
$produto['proImagemInterna'] = isset($_FILES['proImagemInterna']) ? $_FILES['proImagemInterna'] : null;

//verifica se vai remover as imagens
$removerImagemExterna = isset($_POST['removerImagemExterna']) ? true : false;
$removerImagemInterna = isset($_POST['removerImagemInterna']) ? true : false;

$allowedExtensions = ['png', 'jpeg', 'jpg', 'gif'];
$extensaoImagemExterna = isset($produto['proImagemExterna']) 
    ? pathinfo($produto['proImagemExterna']['name'], PATHINFO_EXTENSION)
    : null;
$extensaoImagemInterna = isset($produto['proImagemInterna']) 
    ? pathinfo($produto['proImagemInterna']['name'], PATHINFO_EXTENSION)
    : null;
    
if ($extensaoImagemExterna && !in_array($extensaoImagemExterna, $allowedExtensions)) {
    get_error_msg('Formato da Imagem Externa é inválido!
    Os formatos permitidos são: PNG, JPEG, JPG e GIF.');
    exit;
}
if ($extensaoImagemInterna && !in_array($extensaoImagemInterna, $allowedExtensions)) {
    get_error_msg('Formato da Imagem Interna é inválido!
    Os formatos permitidos são: PNG, JPEG, JPG e GIF.');
    exit;
}

foreach ($produto as $col => $valor) {
    if ($valor === ''){
        get_error_msg("Preencha todos os campos obrigatórios!");
        exit;
    }   
}

$sql = "update produtos set 
            proDescricao = '{$produto['proDescricao']}',
            proComprimento = '{$produto['proComprimento']}',
            proAltura = '{$produto['proAltura']}',
            proLargura = '{$produto['proLargura']}',
            proPesoBruto = '{$produto['proPesoBruto']}',
            proPesoLiquido = '{$produto['proPesoLiquido']}'
        where proCodigo = '{$produto['proCodigo']}'
";
if (!(mysqli_query($con, $sql))) {
    get_error_msg('Ocorreu um erro ao atualizar os dados');
    exit;
}

//remover imagens do produto
if ($removerImagemExterna) {
    $query = mysqli_query($con, "select proImagemExterna from produtos where proCodigo = {$produto['proCodigo']}");
    $dirExterna = mysqli_fetch_assoc($query);
    if (!(mysqli_query($con, "update produtos set proImagemExterna = null where proCodigo = {$produto['proCodigo']}"))) {
        mysqli_rollback($con);
        get_error_msg('Ocorreu um erro ao remover a imagem externa, o produto não foi salvo!');
        exit;
    }
    var_dump('passou');
    exit;
    unlink($dirExterna[0]);
}

if ($removerImagemInterna) {
    $query = mysqli_query($con, "select proImagemInterna from produtos where proCodigo = {$produto['proCodigo']}");
    $dirInterna = mysqli_fetch_assoc($query);
    if (!(mysqli_query($con, "update produtos set proImagemInterna = null where proCodigo = {$produto['proCodigo']}"))) {
        mysqli_rollback($con);
        get_error_msg('Ocorreu um erro ao remover a imagem interna, o produto não foi salvo!');
        exit;
    }
    var_dump('passou');
    exit;
    unlink($dirInterna[0]);
}

$dir = "img/";
if ($produto['proImagemExterna']) {
    $imagemExternaTmp = $produto['proImagemExterna']['tmp_name'];
    $dirImagemExterna = $produto['proCodigo']."externa.{$extensaoImagemExterna}";
    move_uploaded_file($imagemExternaTmp, $dir.$dirImagemExterna);
    $sql = "update produtos set proImagemExterna = '{$dir}{$dirImagemExterna}' where proCodigo = {$produto['proCodigo']}";
    if (!(mysqli_query($con, $sql))) {
        mysqli_rollback($con);
        get_error_msg('Ocorreu um erro ao atualizar a imagem externa. O produto não foi salvo!');
        exit;
    }
}
if ($produto['proImagemInterna']) {
    $imagemInternaTmp = $produto['proImagemInterna']['tmp_name'];
    $dirImagemInterna = $produto['proCodigo']."interna.{$extensaoImagemInterna}";
    move_uploaded_file($imagemInternaTmp, $dir.$dirImagemInterna);
    $sql = "update produtos set proImagemInterna = '{$dir}{$dirImagemInterna}' where proCodigo = {$produto['proCodigo']}";
    if (!(mysqli_query($con, $sql))) {
        mysqli_rollback($con);
        get_error_msg('Ocorreu um erro ao atualizar a imagem interna. O produto não foi salvo!');
        exit;
    }
}

get_success_msg('Dados salvos com sucesso!');
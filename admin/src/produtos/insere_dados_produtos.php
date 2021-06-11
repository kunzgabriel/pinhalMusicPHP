<?php

include '../../conecta.php';
include '../../lib/funcoes.php';

$produto['proCodigo'] = $_POST['proCodigo'];
$produto['proDescricao'] = $_POST['proDescricao'];
$produto['proComprimento'] = $_POST['proComprimento'];
$produto['proAltura'] = $_POST['proAltura'];
$produto['proLargura'] = $_POST['proLargura'];
$produto['proPesoBruto'] = $_POST['proPesoBruto'];
$produto['proPesoLiquido'] = $_POST['proPesoLiquido'];
$produto['proImagemExterna'] = $_FILES['proImagemExterna'];
$produto['proImagemInterna'] = $_FILES['proImagemInterna'];

$allowedExtensions = ['png', 'jpeg', 'jpg', 'gif'];
$extensaoImagemExterna = pathinfo($produto['proImagemExterna']['name'], PATHINFO_EXTENSION);
$extensaoImagemInterna = pathinfo($produto['proImagemInterna']['name'], PATHINFO_EXTENSION);

foreach ($produto as $col => $valor) {
    if ($valor === ''){
        get_error_msg("Preencha todos os campos obrigatórios!");
        exit;
    }   
}

//verificacoes antes de realizar o insert no banco de dados
$query = mysqli_query($con, "select * from produtos where proCodigo = {$produto['proCodigo']}");
if ($row = mysqli_fetch_array($query)) {
    get_error_msg('Já existe um produto cadastrado com esse código!');
    exit;
}

if (!in_array($extensaoImagemExterna, $allowedExtensions)) {
    get_error_msg('Formato da Imagem Externa é inválido!
    Os formatos permitidos são: PNG, JPEG, JPG e GIF.');
    exit;
}
if (!in_array($extensaoImagemInterna, $allowedExtensions)) {
    get_error_msg('Formato da Imagem Interna é inválido!
    Os formatos permitidos são: PNG, JPEG, JPG e GIF.');
    exit;
}

//grava os dados
$sql = "
    insert into produtos (
        proCodigo,
        proDescricao,
        proComprimento,
        proLargura,
        proAltura,
        proPesoBruto,
        proPesoLiquido
    ) values (
        '{$produto['proCodigo']}',
        '{$produto['proDescricao']}',
        '{$produto['proComprimento']}',
        '{$produto['proLargura']}',
        '{$produto['proAltura']}',
        '{$produto['proPesoBruto']}',
        '{$produto['proPesoLiquido']}'
    )
";
if (!(mysqli_query($con, $sql))) {
    get_error_msg('Ocorreu um erro ao Inserir os dados');
    exit;
}

//grava as imagens
$dir = "img/";
$imagemExternaTmp = $produto['proImagemExterna']['tmp_name'];
$dirImagemExterna = $produto['proCodigo']."externa.{$extensaoImagemExterna}";
move_uploaded_file($imagemExternaTmp, $dir.$dirImagemExterna);
$imagemInternaTmp = $produto['proImagemInterna']['tmp_name'];
$dirImagemInterna = $produto['proCodigo']."interna.{$extensaoImagemInterna}";
move_uploaded_file($imagemInternaTmp, $dir.$dirImagemInterna);

$sql = "update produtos set proImagemExterna = '{$dir}{$dirImagemExterna}', proImagemInterna = '{$dir}{$dirImagemInterna}'
where proCodigo = {$produto['proCodigo']}";
if (!(mysqli_query($con, $sql))) {
    mysqli_rollback($con);
    get_error_msg('Ocorreu um erro ao inserir as imagens. O produto não foi cadastrado!');
    exit;
} 

get_success_msg('Produto cadastrado com sucesso.');
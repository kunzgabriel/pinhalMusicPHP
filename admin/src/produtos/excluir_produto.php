<?php

require "../../conecta.php";

$produto['proCodigo'] = (isset($_GET['proCodigo'])) ? $_GET['proCodigo'] : 0;
mysqli_query($con,"delete from produtos where proCodigo = {$produto['proCodigo']} ") or die (mysqli_error($con));

echo "<script>alert('Produto deletado com sucesso!')</script>";
echo "<script>window.location ='listar_produtos.php';</script>";

?>
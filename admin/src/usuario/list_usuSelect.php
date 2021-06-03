<?php

    //chamamos nossa conexão com o banco.
    require "../../conecta.php";
    //chamar nossas bibliotecas para validar nossa informação recebida e retornar nossa msg.
    require "../../lib/funcoes.php";

    $id =  validacao($_GET['IDusuario']);

    $sql = mysqli_query($con,"select senha from login where id= $id");



while($reg = mysqli_fetch_object($sql)){
    echo "<option value='$reg->id'>$reg->senha</option>";
}


?>

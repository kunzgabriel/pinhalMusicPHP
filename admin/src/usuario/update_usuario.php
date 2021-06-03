<?php
if (isset($_POST['inp_login']) && isset($_POST['inp_nome']) && isset($_POST['inp_senha'])) {
	require "../../conecta.php";
	require "../../lib/funcoes.php";

	$id = $_POST['id'];
	$nome = $_POST['inp_nome'];
	$login =  $_POST['inp_login'];
	$senhaAntiga =  $_POST['inp_senhaAntiga'];
	$senhaNova =  $_POST['inp_senhaNova'];

	$sql = mysqli_query($con,"select * from usuarios where id = $id and senha = '$senhaAntiga'") or die(mysqli_error($con));
	$row = mysqli_fetch_assoc($sql);

	if (!$row) {
    	get_error_msg("Senha antiga está incorreta.");
		exit;
	}
	else {
		$sql = "update usuarios set nome = '{$nome}', senha = '{$senhaNova}' where id = '{$id}'";

		if (!(mysqli_query($con,$sql))){
			die(mysqli_error($con));
			exit;
		}

		get_success_msg("Dados atualizados");
	}
	
}
?>
<?php
if (isset($_POST['inp_login'])) {
	require "../../conecta.php";
	require "../../lib/funcoes.php";

//validar se foi preenchido todos os campos
	$login =  validacao($_POST['inp_login']);
	$senhaAntiga =  validacao($_POST['inp_senhaAntiga']);
	$senhaNova =  validacao($_POST['inp_senhaNova']);

	$id = $_POST['id'];

	//verificar se a senha antiga confere.
	$sql = mysqli_query($con,"select * from login where id= $id and senha= '$senhaAntiga'") or die(mysqli_error($con));
	$row = mysqli_num_rows($sql);

    //verificar se retornou algo.
	if ($row ==0) {
    // se não retornou retorna mensagem informando que a senha está incorreta.
		get_error_msg("Senha incorreta, tente novamente");

	}
	else{
	//caso esteja correta faz update na senha.
		$sql = "update login set senha = '{$senhaNova}'
		where  id = '{$id}'";

		if (!(mysqli_query($con,$sql))){
			die(mysqli_error($con));
			exit;
		}

		get_success_msg("Senha Atualizada");
	}
	
}
?>
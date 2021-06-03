<?php

class validacao {
	var $campo;
	var $valor;
	var $msg = array();

	function mensagens($num, $campo, $max, $min) {
		$this->msg[0] = "Preencha o campo com um email válido. <br /> \n";
		$this->msg[1] = "CEP com formato inválido (Ex: XXXXX-XXX). <br /> \n";
		$this->msg[2] = "Data em formato inválido (Ex: DD/MM/AAAA). <br /> \n";
		$this->msg[3] = "Telefone inválido (Ex: 01433333333). <br /> \n";
		$this->msg[4] = "CPF inválido (Ex: 11111111111). <br /> \n";
		$this->msg[5] = "IP inválido (Ex: 192.168.10.1). <br /> \n";
		$this->msg[6] = "Preencha o campo ".$campo." com numeros. <br /> \n";
		$this->msg[7] = "URL especificada é inválida (Ex: http://www.google.com). <br /> \n";
		$this->msg[8] = "Preencha o campo ".$campo.". <br /> \n";
		$this->msg[9] = "O ".$campo." deve ter no máximo ".$max." caracteres. <br /> \n";
		$this->msg[10] = "O ".$campo." deve ter no mínimo ".$min." caracteres. <br /> \n";
		$this->msg[11] = "Preencha o campo ".$campo.". <br /> \n";
		$this->msg[12] = "Adicione uma ".$campo.". <br /> \n";
		return $this->msg[$num];
	}

	function validarEmail($email) {
		if(filter_var($email , FILTER_VALIDATE_EMAIL) === FALSE){
			return $this->mensagens(0, 'email', null, null);
		}
	}

    // Validar CEP (xxxxx-xxx)
	function validarCep($cep) {
		if (!preg_match("/^[0-9]{5}-[0-9]{3}$/i", $cep)) {
			return $this->mensagens(1, 'cep', null, null);
		}
	}

	// Validar Datas (DD/MM/AAAA)
	function validarData($data) {
		if (!preg_match('/(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/[12][0-9]{3}/', $data)) {
			return $this->mensagens(2, 'data', null, null);
		}
	}

	// Validar Telefone (01432363810)
	function validarTelefone($telefone) {
		if (!preg_match("/^[0-9]{11}$/i", $telefone)) {
			return $this->mensagens(3, 'telefone', null, null);
		}
	}

	// Validar CPF (111111111111)
	function validarCpf($cpf) {

		if(!is_numeric($cpf)) {
			$status = false;
		} else {
   			# Pega o digito verificador
			$dv_informado = substr($cpf, 9,2);

			for($i=0; $i<=8; $i++) {
				$digito[$i] = substr($cpf, $i,1);
			}
   			# Calcula o valor do 10� digito de verifica��o
			$posicao = 10;
			$soma = 0;

			for($i=0; $i<=8; $i++) {
				$soma = $soma + $digito[$i] * $posicao;
				$posicao = $posicao - 1;
			}

			$digito[9] = $soma % 11;

			if($digito[9] < 2) {
				$digito[9] = 0;
			} else {
				$digito[9] = 11 - $digito[9];
			}

   			# Calcula o valor do 11� digito de verifica��o
			$posicao = 11;
			$soma = 0;

			for ($i=0; $i<=9; $i++) {
				$soma = $soma + $digito[$i] * $posicao;
				$posicao = $posicao - 1;
			}

			$digito[10] = $soma % 11;

			if ($digito[10] < 2) {
				$digito[10] = 0;
			} else {
				$digito[10] = 11 - $digito[10];
			}

  			# Verifica de o dv � igual ao informado
			$dv = $digito[9] * 10 + $digito[10];

			if ($dv != $dv_informado) {
				$status = false;
			} else
			$status = true;
		}

  		  # Se houver erro
		if (!$status) {
			return $this->mensagens(4, 'cpf', null, null);
		}

	}

	// Validar IP (200.200.200.200)
	function validarIp($ip) {
		if (!preg_match("/^([0-9]){1,3}.([0-9]){1,3}.([0-9]){1,3}.([0-9]){1,3}$/i", $ip)) {
			return $this->mensagens(5, 'ip', null, null);
		}
	}

	// Validar Numero
	function validarNumero($campo,$numero) {
		if(!is_numeric($numero)) {
			return $this->mensagens(6, $campo, null, null);
		}
	}

	// Validar URL
	function validarUrl($url) {
		if (!preg_match('/|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i/i', $url)) {
			return $this->mensagens(7, $url, null, null);
		}
	}

	// Verificação simples (Campo vazio, maximo/minimo de caracteres)
	function validarCampo($campo, $valor, $max, $min) {
		$this->campo = $campo;

		if ($valor == "" || $valor == "NULL") {
			return $this->mensagens(8, $campo, $max, $min);
		}
		elseif (strlen($valor) > $max) {
			return $this->mensagens(9, $campo, $max, $min);
		}
		elseif (strlen($valor) < $min) {
			return $this->mensagens(10, $campo, $max, $min);
		}
	}

	// Validar campo vazio
	function validarCampoVazio($campo, $valor) {
		$this->campo = $campo;

		if ($valor == "" || $valor == "NULL") {
			return $this->mensagens(11, $campo, null, null);
		}
	}

	// Validar campo vazio
	function validarCampoImg($campo, $valor) {
		$this->campo = $campo;

		if ($valor == "" || $valor == "NULL") {
			return $this->mensagens(12, $campo, null, null);
		}
	}

	// Verifica se há erros
	function verifica() {
		return count($this->msg) <= 0;
	}


}
?>
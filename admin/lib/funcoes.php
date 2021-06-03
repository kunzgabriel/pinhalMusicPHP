<?php

function validacao($campo) {
	if (empty($campo) || $campo == 'NULL') {
		$msg = "Preencha os campos Obrigatórios!";
		get_warning_msg($msg);
		exit;
	}
	return $campo;
}

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

function retirarElementop($descricao){
	$elemento_p = array("<p>", "</p>");
	return str_replace($elemento_p,"",$descricao);
}

function get_error_msg($mensagem) {
	return print("<div class='alert alert-error'><p>" . $mensagem . "</p></div>");
}

function get_warning_msg($mensagem) {
	return print("<div class='alert alert-warnig'>" . $mensagem . "</div>");
}

function get_success_msg($mensagem) {
	return print("<div class='alert alert-success'>" . $mensagem . "</div>");
}

function get_info_msg($mensagem) {
	return print("<div class='alert alert-info'>" . $mensagem . "</div>");
}

function valida_imagem($arquivo) {
	$tiposPermitidos = array('image/jpeg', 'image/pjpeg', 'image/png');
	$tamanhoMaxImg = 20048000;

	$numUploads = count($arquivo['name']);
	for ($n = 0; $n < $numUploads; $n++) {
		$nome = $arquivo["name"][$n];
		$tipo = $arquivo["type"][$n];
		$tmp_name = $arquivo["tmp_name"][$n];
		$error = $arquivo["error"][$n];
		$size = $arquivo["size"][$n];

		if ($error > 0) {
			switch ($error) {
				case UPLOAD_ERR_INI_SIZE :
				get_error_msg("O arquivo de upload excedeu o tamanho permitido.");
				break;
				case UPLOAD_ERR_PARTIAL :
				get_error_msg("O arquivo de upload foi parcialmente enviado.");
				break;
				case UPLOAD_ERR_NO_FILE :
				get_error_msg("Nenhum arquivo foi enviado.");
				break;
				case UPLOAD_ERR_NO_TMP_DIR :
				get_error_msg("Não encontrado diretório.");
				break;
				case UPLOAD_ERR_CANT_WRITE :
				get_error_msg("Falha ao gravar o arquivo.");
				break;
				case UPLOAD_ERR_EXTENSION :
				get_error_msg("Extensão de arquivo não suportada.");
				break;
				default :
				get_error_msg("Erro de upload desconhecido.");
				break;
			}
			return false;
			exit ;
		}
		if (array_search($tipo, $tiposPermitidos) === false) {
			get_error_msg("O arquivo: $nome possui extenção inválida. Tipos Permitidos: JPG/PNG/JPEG");
			return false;
			exit ;
		}
		if ($size > $tamanhoMaxImg) {
			get_error_msg("Tamanho Foto: $size Tamanho max: 2MB");
			return false;
		}

	}
	return true;
}

function valida_img($arquivo) {
    $tiposPermitidos = array('image/jpeg', 'image/pjpeg', 'image/png','image/jpg');
    $tamanhoMaxImg = 20048000;

        $nome = $arquivo["name"];
        $tipo = $arquivo["type"];
        $tmp_name = $arquivo["tmp_name"];
        $error = $arquivo["error"];
        $size = $arquivo["size"];

        if ($error > 0) {
            switch ($error) {
                case UPLOAD_ERR_INI_SIZE :
                get_error_msg("O arquivo de upload excedeu o tamanho permitido.");
                break;
                case UPLOAD_ERR_PARTIAL :
                get_error_msg("O arquivo de upload foi parcialmente enviado.");
                break;
                case UPLOAD_ERR_NO_FILE :
                get_error_msg("Nenhum arquivo foi enviado.");
                break;
                case UPLOAD_ERR_NO_TMP_DIR :
                get_error_msg("Não encontrado diretório.");
                break;
                case UPLOAD_ERR_CANT_WRITE :
                get_error_msg("Falha ao gravar o arquivo.");
                break;
                case UPLOAD_ERR_EXTENSION :
                get_error_msg("Extensão de arquivo não suportada.");
                break;
                default :
                get_error_msg("Erro de upload desconhecido.");
                break;
            }
            return false;
            exit ;
        }
        if (array_search($tipo, $tiposPermitidos) === false) {
            get_error_msg("O arquivo: $nome possui extenção inválida. Tipos Permitidos: JPG/PNG/JPEG");
            return false;
            exit ;
        }
        if ($size > $tamanhoMaxImg) {
            get_error_msg("Tamanho Foto: $size Tamanho max: 2MB");
            return false;
        }
    return true;
    }

function normaliza($doc_name) {
	$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$b = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	$doc_name = utf8_decode($doc_name);
	$doc_name = strtr($doc_name, utf8_decode($a), $b);
	$doc_name = strtolower($doc_name);
	$doc_name = str_replace(" ", "", $doc_name);
	$doc_name = str_replace("-", "_", $doc_name);
	return utf8_encode($doc_name);
}

function get_nome_imagem($titulo, $tipo, $md5 = true) {
	$titulo = toAscii($titulo.microtime(true));
	$titulo = str_replace(" ", "-", $titulo);
	$titulo = str_replace("jpg", "", $titulo);
	$titulo = str_replace("png", "", $titulo);
	if ($md5) {
		$titulo = md5($titulo);
	}
	return $titulo . "." . $tipo;
}
function get_nome_arquivo($titulo, $tipo, $md5 = false) {
	$titulo = toAscii($titulo.microtime(true));
	$titulo = str_replace(" ", "-", $titulo);
	if ($md5) {
		$titulo = md5($titulo);
	}
	return $titulo . "." . $tipo;
}


function tipo_imagem($tipo) {
	if ($tipo == 'image/jpeg') {
		$tipo = str_replace("image/", "", $tipo);
	} else if ($tipo == 'image/pjpeg') {
		$tipo = str_replace("image/", "", $tipo);
	} else if ($tipo == 'image/png') {
		$tipo = str_replace("image/", "", $tipo);
	} else if ($tipo == 'image/gif') {
		$tipo = str_replace("image/", "", $tipo);
	}

	return $tipo;
}

function get_qualidade($tipo) {
	if ($tipo == "png") {
		return 9;
		exit ;
	}
	return 80;
}

setlocale(LC_ALL, 'en_US.UTF8');
function toAscii($str, $replace = array(), $delimiter = '-') {
	if (!empty($replace)) {
		$str = str_replace((array)$replace, ' ', $str);
	}
	$str_final = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$str_final = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str_final);
	$str_final = strtolower(trim($str_final, '-'));
	$str_final = preg_replace("/[\/_|+ -]+/", $delimiter, $str_final);
	return $str_final;
}
function AsciiToStr($str, $replace = array(), $delimiter = ' ') {
	if (!empty($replace)) {
		$str = str_replace((array)$replace, '-', $str);
	}
	$str_final = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$str_final = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str_final);
	$str_final = strtolower(trim($str_final, '-'));
	$str_final = preg_replace("/[\/_|+ -]+/", $delimiter, $str_final);
	return $str_final;
}


function exibe_data($data) {
	$data = explode("-", $data);
	return $data[2] . "/" . $data[1] . "/" . $data[0];
}

function exibe_data_hora($datahora) {
	$datahora = strtotime($datahora);
	return date('d/m/Y H:i:s', $datahora);
}

function ajusta_data_update($data) {
	return implode("-", array_reverse(explode("/", $data)));
}

function qz_truncate($str, $length, $append = '...') {
	$strLength = mb_strlen($str);
	if ($strLength <= $length)
		return $str;
	return preg_replace('/(.{' . $length . '}).*/u', '$1' . $append, $str);
}

function formata_conteudo($campo) {
	$campo = addslashes($campo);
	return $campo;
}

function getNomeEstado($nome_estado_min) {
	switch ($nome_estado_min) {
		case "acre" :
		return "Acre";
		break;
		case "alagoas" :
		return "Alagoas";
		break;
		case "amazonas" :
		return "Amazonas";
		break;
		case "amapa" :
		return "Amapá";
		break;
		case "bahia" :
		return "Bahia";
		break;
		case "ceara" :
		return "Ceará";
		break;
		case "distritofederal" :
		return "Distrito Federal";
		break;
		case "espiritosanto" :
		return "Espirito Santo";
		break;
		case "goias" :
		return "Goiás";
		break;
		case "maranhao" :
		return "Maranhão";
		break;
		case "minasgerais" :
		return "Minas Gerais";
		break;
		case "matogrossosul" :
		return "Mato Grosso do Sul";
		break;
		case "matogrosso" :
		return "Mato Grosso";
		break;
		case "para" :
		return "Pará";
		break;
		case "paraiba" :
		return "Paraíba";
		break;
		case "pernambuco" :
		return "Pernambuco";
		break;
		case "piaui" :
		return "Piauí";
		break;
		case "parana" :
		return "Paraná";
		break;
		case "riodejaneiro" :
		return "Rio de Janeiro";
		break;
		case "riograndenorte" :
		return "Rio Grande do Norte";
		break;
		case "rondonia" :
		return "Rondônia";
		break;
		case "roraima" :
		return "Roraima";
		break;
		case "riograndedosul" :
		return "Rio Grande do Sul";
		break;
		case "santacatarina" :
		return "Santa Catarina";
		break;
		case "saopaulo" :
		return "São Paulo";
		break;
		case "sergipe" :
		return "Sergipe";
		break;
		case "tocantins" :
		return "Tocantins";
		break;
		default :
		"representantes";
		return "";
	}
}

function getEstadoExtenso($siglaEstado) {
	$estados = array(
		"AC"=>"Acre",
		"AL"=>"Alagoas",
		"AM"=>"Amazonas",
		"AP"=>"Amapá",
		"BA"=>"Bahia",
		"CE"=>"Ceará",
		"DF"=>"Distrito Federal",
		"ES"=>"Espírito Santo",
		"GO"=>"Goiás",
		"MA"=>"Maranhão",
		"MT"=>"Mato Grosso",
		"MS"=>"Mato Grosso do Sul",
		"MG"=>"Minas Gerais",
		"PA"=>"Pará",
		"PB"=>"Paraíba",
		"PR"=>"Paraná",
		"PE"=>"Pernambuco",
		"PI"=>"Piauí",
		"RJ"=>"Rio de Janeiro",
		"RN"=>"Rio Grande do Norte",
		"RO"=>"Rondônia",
		"RS"=>"Rio Grande do Sul",
		"RR"=>"Roraima",
		"SC"=>"Santa Catarina",
		"SE"=>"Sergipe",
		"SP"=>"São Paulo",
		"TO"=>"Tocantins"
		);
	return $estados[$siglaEstado];
}

function getSiglaEstado($nome_estado_min) {
	switch ($nome_estado_min) {
		case "acre" :
		return "AC";
		break;
		case "alagoas" :
		return "AL";
		break;
		case "amazonas" :
		return "AM";
		break;
		case "amapa" :
		return "AP";
		break;
		case "bahia" :
		return "BA";
		break;
		case "ceara" :
		return "CE";
		break;
		case "distritofederal" :
		return "DF";
		break;
		case "espiritosanto" :
		case "ES" :
		return "ES";
		break;
		case "goias" :
		return "GO";
		break;
		case "maranhao" :
		return "MA";
		break;
		case "minasgerais" :
		return "MG";
		break;
		case "matogrossosul" :
		return "MS";
		break;
		case "matogrosso" :
		return "MT";
		break;
		case "para" :
		return "PA";
		break;
		case "paraiba" :
		return "PB";
		break;
		case "pernambuco" :
		return "PE";
		break;
		case "piaui" :
		return "PI";
		break;
		case "parana" :
		return "PR";
		break;
		case "riodejaneiro" :
		return "RJ";
		break;
		case "riograndenorte" :
		return "RN";
		break;
		case "rondonia" :
		return "RO";
		break;
		case "roraima" :
		return "RR";
		break;
		case "riograndedosul" :
		return "RS";
		break;
		case "santacatarina" :
		return "SC";
		break;
		case "saopaulo" :
		return "SP";
		break;
		case "sergipe" :
		return "SE";
		break;
		case "tocantins" :
		return "TO";
		break;
		default :
		return "";
	}
}

function abreviatura_mes($referencia = NULL){
	switch ($referencia){
		case 1: $mes = " Jan "; break;
		case 2: $mes = " Fev "; break;
		case 3: $mes = " Mar "; break;
		case 4: $mes = " Abr "; break;
		case 5: $mes = " Mai "; break;
		case 6: $mes = " Jun "; break;
		case 7: $mes = " Jul "; break;
		case 8: $mes = " Ago "; break;
		case 9: $mes = " Set "; break;
		case 10: $mes = " Out "; break;
		case 11: $mes = " Nov "; break;
		case 12: $mes = " Dez "; break;
		default: $mes = " ___ ";
	}
	return $mes;
}

function mes_extenso($referencia = NULL){
	switch ($referencia){
		case 1: $mes = " de Janeiro de "; break;
		case 2: $mes = " de Fevereiro de "; break;
		case 3: $mes = " de Março de "; break;
		case 4: $mes = " de Abril de "; break;
		case 5: $mes = " de Maio de "; break;
		case 6: $mes = " de Junho de "; break;
		case 7: $mes = " de Julho de "; break;
		case 8: $mes = " de Agosto de "; break;
		case 9: $mes = " de Setembro de "; break;
		case 10: $mes = " de Outubro de "; break;
		case 11: $mes = " de Novembro de "; break;
		case 12: $mes = " de Dezembro de "; break;
		default: $mes = " de _______________ de ";
	}
	return $mes;
}

function exibe_data_mes_extenso($data = NULL){
	$data = explode("-", $data);
	$dia = date($data[2]);
	$mes = date($data[1]);
	$ano = date($data[0]);
	$mes =  mes_extenso($mes);
	$data_formatada = $dia.$mes.$ano;
	return $data_formatada;
}


function exibe_data_mes_extenso_hora($data = NULL){
	$time = strtotime($data);
	$hora = date('h:i', $time);
	$data_mes = exibe_data_mes_extenso(date("Y-m-d",$time));
	return $data_mes." ".$hora;
}

function resumo($string,$chars) {
	$string = str_replace("<p>", "", $string);
	if (strlen($string) > $chars) {
		while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
			$chars++;
		};
	};
	if (strlen($string) > $chars) {
		return substr($string,0,$chars)."[...]";
	}else{
		return substr($string,0,$chars);
	}
};

function compareFloatNumbers($float1, $float2, $operator='=')
{
	$epsilon = 0.00001;

	$float1 = (float)$float1;
	$float2 = (float)$float2;

	switch ($operator)
	{
        // equal
		case "=":
		case "eq":
		{
			if (abs($float1 - $float2) < $epsilon) {
				return true;
			}
			break;
		}
        // less than
		case "<":
		case "lt":
		{
			if (abs($float1 - $float2) < $epsilon) {
				return false;
			}
			else
			{
				if ($float1 < $float2) {
					return true;
				}
			}
			break;
		}
		case "<=":
		case "lte":
		{
			if (compareFloatNumbers($float1, $float2, '<') || compareFloatNumbers($float1, $float2, '=')) {
				return true;
			}
			break;
		}
		case ">":
		case "gt":
		{
			if (abs($float1 - $float2) < $epsilon) {
				return false;
			}
			else
			{
				if ($float1 > $float2) {
					return true;
				}
			}
			break;
		}
		case ">=":
		case "gte":
		{
			if (compareFloatNumbers($float1, $float2, '>') || compareFloatNumbers($float1, $float2, '=')) {
				return true;
			}
			break;
		}
		case "<>":
		case "!=":
		case "ne":
		{
			if (abs($float1 - $float2) > $epsilon) {
				return true;
			}
			break;
		}
		default:
		{
			die("Unknown operator '".$operator."' in compareFloatNumbers()");
		}
	}

	return false;
}

function createThumbs( $filename, $destination, $desired_width )
{
	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	//converte a extenção do arquivo para minúsculo
	$extension = strtolower($extension);

    // Read source image
	if ($extension == 'jpg' || $extension == 'jpeg') {
		$source_image = imagecreatefromjpeg($filename); 
	} else if ($extension == 'png') {
        $source_image = imagecreatefrompng($filename); // I think the crash occurs here. 

    } else {
    	return 'error';
    }

    $width = imagesx($source_image);
    $height = imagesy($source_image);

    $img_ratio = floor($height / $width);

    // Find the "desired height" of this thumbnail, relative to the desired width
    $desired_height = floor($height * ($desired_width / $width));

    // Create a new "virtual" image
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

	//Permanece com fundo transparente
    if($extension == "gif" or $extension == "png"){
    	imagecolortransparent($virtual_image, imagecolorallocatealpha($virtual_image, 0, 0, 0, 127));
    	imagealphablending($virtual_image, false);
    	imagesavealpha($virtual_image, true);
    }

    // Copy source image at a resized size
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    // Create the physical thumbnail image to its destination 
    if ($extension == 'jpg' || $extension == 'jpeg') {
    	$source_image = imagejpeg($virtual_image, $destination); 
    } else if ($extension == 'png') {
    	$source_image = imagepng($virtual_image, $destination, 1);
    } else {
    	return 'another error';
    }
}


if(!function_exists("antiSQL")) {
function antiSQL($campo, $adicionaBarras = false) {
// remove palavras que contenham sintaxe sql
$campo = preg_replace("/(from|alter table|select|insert|delete|update|were|drop table|show tables|#|\*|--|\\\\)/i","Anti Sql-Injection - bjus Mãe!",$campo);
$campo = trim($campo);//limpa espaços vazio
$campo = strip_tags($campo);//tira tags html e php
if($adicionaBarras || !get_magic_quotes_gpc())
$campo = addslashes($campo);
return $campo;
}
}

?>
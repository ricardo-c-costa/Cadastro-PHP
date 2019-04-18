<?php 
function safe_input_login ($safeinput)
{
	$safeinput = trim($safeinput);
  	$safeinput = stripslashes($safeinput);
  	$safeinput = htmlspecialchars($safeinput);
  	return $safeinput;
}

function validaForm($usrNome,$usrSnome,$usrDnasc,$usrSexo,$usrEmail)
{
	$err_nome = $err_snome = $err_dnasc = $err_sexo = $err_email = '';

	###########################################

##  CAMPO NOME
		if (empty($usrNome)) 
		{
			$err_nome = 'Preencha o campo vazio';
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$usrNome))
		{
 			 $err_nome = "Esse campo só aceita letras"; 
		}
## CAMPO SOBRENOME
		if (empty($usrSnome)) 
		{
			$err_snome = 'Preencha o campo vazio';
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$usrSnome))
		{
 			 $err_snome = "Esse campo só aceita letras"; 
		}
## CAMPO DT NASCIMENTO
		if (empty($usrDnasc)) 
		{
			$err_dnasc = 'Preencha o campo vazio';
		}
		elseif (!preg_match("/[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}/", $usrDnasc)) 
		{
			$err_dnasc = 'Data de nascimento inválida';
		}
## CAMPO SEXO
		if (empty($usrSexo)) 
		{
			$err_sexo = 'Preencha o campo vazio';
		}
		elseif ($usrSexo == "ND") 
		{
			$err_sexo = 'Escolha uma opção';	
		}
## CAMPO EMAIL
		if (empty($usrEmail)) {
			$err_email = 'Preencha o campo vazio';
		}

		return array($err_nome,$err_snome,$err_dnasc,$err_sexo,$err_email);
}

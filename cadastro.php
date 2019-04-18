<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (isset($_POST['Cadastrar'])) 
		{
			require 'func/cadfunc.php';

			$usrNome = safe_input_login($_POST['user_nome']);
			$usrSnome = safe_input_login($_POST['user_snome']);
			$usrDnasc = safe_input_login($_POST['data_nasc']);
			$usrSexo = safe_input_login($_POST['user_sexo']);
			$usrEmail = safe_input_login($_POST['user_email']);
			$validaCad = validaForm($usrNome,$usrSnome,$usrDnasc,$usrSexo,$usrEmail);

		}
			$erroNome = $validaCad[0];
			$erroSnome = $validaCad[1];
			$erroDnasc = $validaCad[2];
			$erroSexo = $validaCad[3];
			$erroEmail = $validaCad[4];

		if (empty($erroNome) && empty($usrSnome) &&	empty($erroDnasc) && empty($erroSexo) && empty($erroEmail) && isset($_POST['Cadastrar']))
		{		
			ECHO "CADASTRADO COM SUCESSO !";
			return;
		}
		else 
		{
			$erroNome =  "<div class='col erro-form'>".$erroNome."</div>";
			$erroSnome = "<div class='col erro-form'>".$erroSnome."</div>";
			$erroDnasc = "<div class='col erro-form'>".$erroDnasc."</div>";
			$erroSexo =  "<div class='col erro-form'>".$erroSexo."</div>";
			$erroEmail = "<div class='mx-auto erro-form'>".$erroEmail."</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/crudstyle.css">
		<link rel="stylesheet" href="js/bootstrap.min.js">
		<link rel="stylesheet" href="js/jquery-3.3.1.min.js">
	</head>
	<body>
		<div class="cadContainer col-8 m-0 p-0 mx-auto pb-5">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">CRUD</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item ml-3">
							<a class="nav-link" href="cadastro.php">VOLTAR</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="form-cad col-6 mx-auto border p-2 rounded">
				<form method="POST">
					<fieldset class="mt-2 mb-2 p-3">
						<legend>Dados Cadastrais:</legend>
						<div class="form-group row"> 
							<div class="col">
								<input type="text" id="lbl-nome" class="form-control p-3 mx-auto" name="user_nome" placeholder="Nome" />
								<span class="form-group row p-0 m-0"><?php echo empty($erroNome)? '':$erroNome;?></span>
							</div>
							<div class="col mb-2">
								<input type="text" id="lbl-nome" class="form-control p-3 mx-auto" name="user_snome" placeholder="Sobrenome"/>
								<span class="form-group row p-0 m-0"><?php echo empty($erroNome)? '':$erroSnome;?></span>
							</div>
						</div>
						<div class="form-group row p-2">
							<div class="col">
								<input type="text" id="lbl-nasc" class="form-control p-3" name="data_nasc" placeholder="Data de Nascimento"/>
								<span class="form-group row p-0 m-0"><?php echo empty($erroDnasc)? '':$erroDnasc;?></span>
							</div>
							<div class="col">
								<select name="user_sexo" class="form-control" id="lbl-sexo">
									<option value="ND">Sexo</option>
									<option value="masc">Masculino</option>
									<option value="femin">Feminino</option>
								</select>
								<span class="form-group row p-0 m-0"><?php echo empty($erroSexo)? '':$erroSexo;?></span>	
							</div>
						</div>
						<div class="form-group row p-2">
							<div class="col-10 mx-auto">
								<input type="email" class="form-control p-3 mx-auto" name="user_email" placeholder="Email">
								<span class="form-group row p-0 m-0"><?php echo empty($erroEmail)? '':$erroEmail;?></span>	
							</div>
						</div>
						<div class="form-group mt-5">
							<input class="btn btn-success btn-lg btn-block w-50 mx-auto" type="submit" value="Cadastrar" name="Cadastrar">
						</div>
  					</fieldset>		
				</form>
			</div>
		</div>
	</body>
</html>

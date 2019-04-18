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
		<div class="dashContainer col-8 m-0 p-0 mx-auto">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">CRUD</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item ml-3">
							<a class="nav-link" href="cadastro.php">+ Novo Usuario</a>
						</li>
						<li class="nav-item ml-3">
							<form class="form-inline">
								<input class="form-control mr-sm-0" type="search" placeholder="Buscar..." aria-label="Search">
							</form>
						</li>
					</ul>
				</div>
			</nav>
			<div class="col-12 mt-5 table-responsive">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">COD</th>
							<th scope="col">Nome</th>
							<th scope="col">Sobrenome</th>
							<th scope="col">Data de Nascimento</th>
							<th scope="col">Sexo</th>
							<th scope="col">Email</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>05/11/1994</td>
							<td>Masculino</td>
							<td>mark@otto.com.br</td>
							<td>Apagar/Editar</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		

	</body>
</html>

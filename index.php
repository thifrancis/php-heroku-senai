<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css-ERRADO-DE-PROPOSITO" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="estilo.css">

	<title>::: NetChute - Artigos esportivos. :::</title>

	<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="ME-CONSERTE-COM-A-PASTA-CERTA/jquery.maskedinput-1.1.4.pack.js"/></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
	</script>


</head>

<body>
	<div class="login-page">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
			<div class="container-fluid">
				<a class="navbar-brand" href="index-errado.php">::: NetChute :::</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="listar-paise-da-oceania.php">Listar Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index-também-estou-errado.php">Cadastrar Clientes</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br>


		<div class="container"




			<div class="card w-75 p-3 rounded">
				<div class="card-header">
					<h5 class="card-title">Dados do cliente:</h5>
				</div>
				<div class="card-body">

					<form name="frm" id="frm" action="index-errado-que-vai-para-um-lugar-que-nao-existe.php" method="post">

					<div class="row row g-2">
  						<div class="col col-sm">
							<label class="form-label">Código: </label
							<input type="number" id="codigo" name="" class="form-control" value="">
							<small class="form-text text-muted"><em>Somente números.</em></small>
						</div>
						div class="col col-sm-10">
							<label class="form-label">Nome do cliente: </label>
							<input type="text" id="nome" name="nome" class="form-control" value=""

						</div>
					</div>

					<div class="row  row g-2">
  						<div class="col col-sm">
							<label class="form-label">CPF: </label>
							<input type="text" id="cpf" name="" class="form-control" value="9999999">
							<small  class="form-text text-muted"><em>Somente números.</em></small>
						</div
						<div class="col col-sm-8">
							<label class="form-label">E-mail: </label>
							<input type="email" id="email" name="" class="form-control" value="">
							<small id="emailHelp" class="form-text text-muted"><em>email@email.com</em></small>
						</div>
					</div>
						<br>
						button type="submit" class="btn btn-primary" Onclick="enviar(1)" >Cadastrar</button

						<br><br>

						<input type="hidden" value="0" id="acao" name="acao">
						<input type="hidden" value="-1" id="id" name="id">

						<script>
							var dados;

							function enviar(acao) {
								document.getElementById('acao').value = acao;
								document.getElementById("frm").submit();
							}
						</script>

						</div>

				</div>

			</div>



			<div style="height: 100px;"></div>


			<div class="footer-copyright fixed-bottom bg-primary text-center py-3">
				<span class="text-light align-middle">| ::: NetChute - Artigos esportivos. ::: UC 14 | - ©
					2022 Copyright: CTM Supervisão de Educação Online</span
			</div

		</div>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script src="script.js"></script>

</body>

</html>


<?php

include_once './conexao.php';

try {

	if (isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['email'])) {
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		$acao = $_POST['acao'];
		$id = $_POST['id'];

		$codigo = (int) $codigo;
		$acao = (int) $acao;


		//$conn = mysqli_connect('localhost:3306', 'root', 'admin', 'sistema') or die('Erro ao conectar ao banco de dados');

		echo "<br>";

		if ($acao == 1) {

			$sql = "INSERT INTO clientes VALUES ($codigo, '$nome', '$cpf', '$email');";
			if (mysqli_query($conn, $sql)) {
				echo "Cadastrado";
			} else {
				echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
			}
		}

		if ($acao == 2) {

			$sql = "DELETE FROM clientes WHERE codigo=$codigo ";
			if (mysqli_query($conn, $sql)) {
				echo "Dados do código: $codigo - Deletados ";
			} else {
				echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
			}
		}

		if ($acao == 3) {
			$sql = "UPDATE clientes SET nome='$nome' WHERE codigo=$codigo";
			if (mysqli_query($conn, $sql)) {
				echo "Editados com sucesso";
			} else {
				echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
			}
		}




		mysqli_close($conn);
	}
} catch (Exception $e) {
	echo 'Erro: ',  $e->getMessage(), "\n";
} finally {
}


?>
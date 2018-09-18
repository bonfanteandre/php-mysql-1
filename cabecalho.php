<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Minha Loja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Minha loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adicionar produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="sobre.php">Sobre</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
<?php 
mostraAlerta("success");
mostraAlerta("danger");
?>
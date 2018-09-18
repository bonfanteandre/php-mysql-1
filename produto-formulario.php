<?php 
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuarioLogado();

$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao); 
?>
		<h1>Formulário de produto</h1>
		<div class="col-sm-6 col-sm-offset-3">
			<form action="adiciona-produto.php" method="POST">
				<?php include("produto-formulario-base.php"); ?>
				<input type="submit" name="Cadastrar" class="btn btn-success">
			</form>
		</div>
<?php include("rodape.php") ?>
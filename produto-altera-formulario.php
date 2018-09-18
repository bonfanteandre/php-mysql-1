<?php 
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");

$categorias = listaCategorias($conexao);
$produto_id = $_GET['id'];
$produto = buscaProduto($conexao, $produto_id);
$usado = $produto['usado']  ? "checked='checked'" : "";
?>
		<h1>Alteração de produto</h1>
		<div class="col-sm-6 col-sm-offset-3">
			<form action="altera-produto.php" method="POST">
				<div>
					<input type="hidden" name="id" value="<?=$produto['id']?>">
				</div>
				<?php include("produto-formulario-base.php"); ?>
				<input type="submit" name="Alterar" class="btn btn-success">
			</form>
		</div>
<?php include("rodape.php") ?>
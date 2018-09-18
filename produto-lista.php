<?php 

	require_once("cabecalho.php");
	require_once("banco-produto.php");
	require_once("logica-usuario.php");

	verificaUsuarioLogado();
?>

<?php
	if (isset($_SESSION["success"])) :
?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php endif ?>

	<table class="table table-striped table-bordered">
<?php
	$produtos = listarProdutos($conexao);
	foreach ($produtos as $produto) :
?>
		<tr>
			<td><?=$produto['nome'] ?></td>
			<td><?=$produto['preco'] ?></td>
			<td><?=substr($produto['descricao'], 0, 40)?></td>
			<td><?=$produto['categoria']?></td>
			<td>
				<a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-primary">
				Alterar</a>
			</td>
			<td>
				<form action="remove-produto.php" method="POST">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<button class="btn btn-danger" type="submit">Remover</button>
				</form>
			</td>
		</tr>
<?php endforeach ?>
	</table>
<?php include("rodape.php") ?>
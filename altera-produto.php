<?php

	require_once("cabecalho.php");
	require_once("banco-produto.php");
	
	//Pega os parametros que vieram pelo get
	$id = $_POST['id'];
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$preco = (int)$_POST['preco'];
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
	$categoria_id = $_POST['categoria_id'];

	if (array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	
	if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>

		<p class="text-success">Produto <?=$nome?> alterado com sucesso!</p>

	<?php } else { 
		$msgErro = mysqli_error($conexao);
	?>
		<p class="text-danger">O produto não foi adicionado. <?=$msgErro?> </p>
	<?php }

	//Teoricamente nao precisa fechar manualmente, pois o php fecha a conexao sozinho ao termina do processamento
	mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
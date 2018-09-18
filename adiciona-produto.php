<?php

	require_once("cabecalho.php");
	require_once("banco-produto.php");
	require_once("logica-usuario.php");

	verificaUsuarioLogado();
	
	//Pega os parametros que vieram pelo get
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];

	if (array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	
	if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>

		<p class="text-success">Produto <?=$nome?> adicionado com sucesso! Valor: R$ <?=$preco?></p>

	<?php } else { 
		$msgErro = mysqli_error($conexao);
	?>
		<p class="text-danger">O produto não foi adicionado. <?=$msgErro?> </p>
	<?php }

	//Teoricamente nao precisa fechar manualmente, pois o php fecha a conexao sozinho ao termina do processamento
	mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
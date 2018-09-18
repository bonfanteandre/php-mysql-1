<?php

require_once("conecta.php");

function listarProdutos($conexao) {

	$produtos = array();
	
	$query = "SELECT p.*, c.nome as categoria FROM produtos p INNER JOIN categorias c ON c.id = p.categoria_id";
	$resultado = mysqli_query($conexao, $query);
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}

	return $produtos;		
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {

	$nome = mysqli_real_escape_string($conexao, $nome);
	$descricao = mysqli_real_escape_string($conexao, $descricao);
	$preco = (int)$preco;

	//Monta a query interpolando as variaveis
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', '{$preco}', '{$descricao}', {$categoria_id}, {$usado})";

	//Tenta executar a query e retorna
	return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {

	$query = "DELETE FROM produtos WHERE id = {$id}";

	return mysqli_query($conexao, $query);

}

function buscaProduto($conexao, $id) {

	$query = "SELECT * FROM produtos WHERE id = {$id}";

	$resultado = mysqli_query($conexao, $query);

	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {

	$query = "UPDATE produtos SET nome = '{$nome}', preco = '{$preco}', descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} WHERE id = {$id}";

	return mysqli_query($conexao, $query);
}
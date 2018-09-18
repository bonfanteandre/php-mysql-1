<div class="form-group">
	<label class="control-label">Nome:</label>
	<input type="text" name="nome" class="form-control" placeholder="Insira o nome do produto..." value="<?=$produto['nome']?>">
</div>
<div class="form-group">
	<label class="control-label">Preço:</label>
	<input type="number" name="preco" class="form-control" value="<?=$produto['preco']?>"><br>
</div>
<div class="form-group">
	<label class="control-label">Descrição</label>
	<textarea class="form-control" name="descricao">
		<?=$produto['descricao']?>
	</textarea>
</div>
<div>
	<input type="checkbox" name="usado" value="true" <?=$usado?>>&nbsp;Usado
</div>
<div class="form-group">
	<select class="form-control" name="categoria_id">
		<?php foreach($categorias as $categoria): 
			$selected = $categoria['id'] == $produto['categoria_id'] ? "selected='selected'" : "";
		?>
			<option value="<?=$categoria['id']?>" <?=$selected?>>
				<?=$categoria['nome']?>
			</option>
	<?php endforeach ?> 
	</select>
</div>
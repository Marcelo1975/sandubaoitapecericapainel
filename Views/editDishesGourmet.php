<div class="container-fluid">
	<h2>Editar cardápio linha gourmet</h2>
	<?php foreach($editDishesGourmets as $info): ?>
	<form method="POST">
		<div class="form-group">
			<label for="name_gourmet">Nome</label>
			<input type="text" name="name_gourmet" class="form-control" id="name_gourmet" required="required" value="<?php echo $info['name']; ?>" autofocus />
		</div>
		<div class="form-group">
			<label for="description_gourmet">Descrição</label>
			<input type="text" name="description_gourmet" class="form-control" id="description_gourmet" required="required" value="<?php echo $info['description']; ?>" />
		</div>
		<div class="form-group">
			<label for="price">Preço</label>
			<input type="text" name="price" class="form-control" id="price" required="required" value="<?php echo $info['price']; ?>" />
		</div>
		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
	<?php endforeach; ?>
</div>
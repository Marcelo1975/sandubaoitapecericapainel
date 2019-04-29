<div class="container-fluid">
	<h2>Editar cardápio linha gigante</h2>
	<?php foreach($editDishesGiants as $info): ?>
	<form method="POST">
		<div class="form-group">
			<label for="name_giant">Nome</label>
			<input type="text" name="name_giant" class="form-control" id="name_giant" required="required" value="<?php echo $info['name']; ?>" autofocus />
		</div>
		<div class="form-group">
			<label for="description_giant">Descrição</label>
			<input type="text" name="description_giant" class="form-control" id="description_giant" required="required" value="<?php echo $info['description']; ?>" />
		</div>
		<div class="form-group">
			<label for="price">Preçp</label>
			<input type="text" name="price" class="form-control" id="price" required="required" value="<?php echo $info['price']; ?>" />
		</div>
		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
	<?php endforeach; ?>
</div>
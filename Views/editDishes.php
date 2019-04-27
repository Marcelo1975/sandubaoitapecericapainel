<div class="container-fluid">
	<h2>Editar cardápio tradicionais</h2>
	<?php foreach($editDishes as $info): ?>
	<form method="POST">
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $info['name']; ?>" autofocus />
		</div>
		<div class="form-group">
			<label for="descriptionDishes">Descrição</label>
			<input type="text" name="description" class="form-control" id="descriptionDishes" required="required" value="<?php echo $info['description']; ?>" />
		</div>		
		<div class="form-group">
			<label for="price">Preço</label>
			<input type="text" name="price" class="form-control" id="price" required="required" value="<?php echo $info['price']; ?>" />
		</div>
		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
	<?php endforeach; ?>
</div>
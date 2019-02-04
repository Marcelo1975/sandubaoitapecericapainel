<div class="container-fluid">
	<h2>Editar cardápio tradicionais</h2>
	<?php foreach($editDishes as $info): ?>
	<form method="POST">
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $info['name']; ?>" autofocus />
		</div>
		<div class="form-group">
			<label for="description">Descrição</label>
			<input type="text" name="description" class="form-control" id="description" required="required" value="<?php echo $info['description']; ?>" />
		</div>
		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
	<?php endforeach; ?>
</div>
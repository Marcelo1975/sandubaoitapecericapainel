<div class="container-fluid">
	<h2>Editar venda</h2>
	<?php foreach($salesEdits as $info): ?>
	<form method="POST" action="<?php echo BASE_URL.'sales/edit_sale/'.$info['id']; ?>">
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $info['name']; ?>" />
		</div>

		<div class="form-group">
			<label for="quantity">Qt.de vendas</label>
			<input type="text" name="quantity" class="form-control" id="quantity" pattern="[0-9.,]{1,}" required="required" value="<?php echo $info['quantity']; ?>" />
		</div>

		<div class="form-group">
			<label for="val">Valor</label>
			<input type="text" name="val" class="form-control" id="val" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" value="<?php echo $info['value']; ?>" />
		</div>			
		<button type="submit" class="btn btn-primary">Salvar</button>
	<?php endforeach; ?>
</div>
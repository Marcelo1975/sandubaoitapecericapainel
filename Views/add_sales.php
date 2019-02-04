<div class="container-fluid">
	<h2>Adicionar Vendas</h2>
	<form method="POST" action="<?php echo BASE_URL; ?>sales/add_sales">
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control" id="name" required="required" placeholder="Ex.x-tudo" />
		</div>

		<div class="form-group">
			<label for="quantity">Quantidade</label>
			<input type="text" name="quantity" class="form-control" id="quantity" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.200" />
		</div>

		<div class="form-group">
			<label for="val">Valor</label>
			<input type="text" name="val" class="form-control" id="val" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>
		<button type="submit" class="btn btn-primary">Adicionar</button>
	</form>
</div>
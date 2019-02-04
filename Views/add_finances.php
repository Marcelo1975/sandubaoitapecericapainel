<div class="container-fluid">
	<h2>Adicinar gastos</h2>
	<form method="POST">
		<div class="form-group">
			<label for="energy">Cemig</label>
			<input type="text" name="energy" class="form-control" id="energy" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>

		<div class="form-group">
			<label for="water">Água</label>
			<input type="text" name="water" class="form-control" id="water" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>

		<div class="form-group">
			<label for="gas">Gás</label>
			<input type="text" name="gas" class="form-control" id="gas" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>

		<div class="form-group">
			<label for="for-rent">Aluguel</label>
			<input type="text" name="for-rent" class="form-control" id="for-rent" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>

		<div class="form-group">
			<label for="officials">Funcionários</label>
			<input type="text" name="officials" class="form-control" id="officials" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>

		<div class="form-group">
			<label for="providers">Estoque</label>
			<input type="text" name="providers" class="form-control" id="providers" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>
		<button type="submit" class="btn btn-primary">Adicionar</button>
	</form>
</div>
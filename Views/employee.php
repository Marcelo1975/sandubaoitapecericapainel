<div class="container-fluid">
	<h2>Adicionar Funcionário</h2>
	<form method="POST">
		<div class="form-group">
			<label for="fistname">Nome</label>
			<input type="text" name="fistname" class="form-control" id="fistname" required="required" placeholder="Ex.Fulano" />
		</div>
		<div class="form-group">
			<label for="lastname">Sobrenome</label>
			<input type="text" name="lastname" class="form-control" id="lastname" required="required" placeholder="Ex.De Tal" />
		</div>
		<div class="form-group">
			<label for="work">Cargo</label>
			<input type="text" name="work" class="form-control" id="work" required="required" placeholder="Ex.Função" />
		</div>
		<div class="form-group">
			<label for="enter">Data de Entrada</label>
			<input type="text" name="enter" class="form-control" id="enter" required="required" maxlength="10" placeholder="Ex.00/00/0000" />
		</div>
		<div class="form-group">
			<label for="exit">Data de Saída</label>
			<input type="text" name="exit" class="form-control" id="exit" maxlength="10" placeholder="Ex.00/00/0000" />
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" required="required" placeholder="Ex.fulano@gmail.com"/>
		</div>
		<div class="form-group">
			<label for="phone">Telefone</label>
			<input type="text" name="phone" class="form-control" id="phone" maxlength="18" required="required" placeholder="Ex.(00)9 9999-9999" />
		</div>
		<div class="form-group">
			<label for="salary">Salário</label>
			<input type="text" name="salary" class="form-control" id="salary" pattern="[0-9.,]{1,}" required="required" placeholder="Ex.1500" />
		</div>
		<button type="submit" class="btn btn-primary">Adicionar</button>
	</form>
</div>
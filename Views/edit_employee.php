<div class="container-fluid">
	<h2>Editar Informações do Funcionário</h2>
	<?php foreach($getAll as $info): ?>
	<form method="POST">
		<div class="form-group">
			<label for="fistname">Nome</label>
			<input type="text" name="fistname" class="form-control" id="fistname" required="required" value="<?php echo $info['fistname']; ?>" autofocus />
		</div>
		<div class="form-group">
			<label for="lastname">Sobrenome</label>
			<input type="text" name="lastname" class="form-control" id="lastname" required="required" value="<?php echo $info['lastname']; ?>" />
		</div>
		<div class="form-group">
			<label for="work">Cargo</label>
			<input type="text" name="work" class="form-control" id="work" required="required" value="<?php echo $info['work']; ?>" />
		</div>
		<div class="form-group">
			<label for="enter">Data de Entrada</label>
			<input type="text" name="enter" class="form-control" id="enter" value="<?php echo $info['data_enter']; ?>" maxlength="10" />
		</div>
		<div class="form-group">
			<label for="exit">Data de Saída</label>
			<input type="text" name="exit" class="form-control" id="exit" value="<?php echo $info['data_exit']; ?>" maxlength="10" />
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" required="required" value="<?php echo $info['email']; ?>"/>
		</div>
		<div class="form-group">
			<label for="phone">Telefone</label>
			<input type="text" name="phone" class="form-control" id="phone" maxlength="15" required="required" value="<?php echo $info['phone']; ?>" />
		</div>
		<div class="form-group">
			<label for="salary">Salário</label>
			<input type="text" name="salary" class="form-control" id="salary" pattern="[0-9.,]{1,}" required="required" value="<?php echo $info['salary']; ?>" />
		</div>
		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
	<?php endforeach; ?>
</div>
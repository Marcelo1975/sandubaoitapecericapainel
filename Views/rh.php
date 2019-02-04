<div class="container-fluid rh">
	<h2>Recursos Humanos</h2>
	<a href="<?php echo BASE_URL; ?>humanresources/add" class="btn btn-primary">Adicionar novo funcionário</a>
	<table class="table table-rh">
		<thead>
			<tr>
				<th scope="col">Nº</th>
				<th scope="col">Nome</th>
				<th scope="col">Sobrenome</th>
				<th scope="col">Cargo</th>
				<th scope="col">Entrada</th>
				<th scope="col">Saída</th>
				<th scope="col">E-mail</th>
				<th scope="col">Telefone</th>
				<th scope="col">Salário</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<?php foreach($getEmployeeAdds as $infoEmployee): ?>
		<tbody>
			<tr>
				<th scope="row"><?php echo $infoEmployee['id']; ?></th>
				<td><?php echo $infoEmployee['fistname']; ?></td>
				<td><?php echo $infoEmployee['lastname']; ?></td>
				<td><?php echo $infoEmployee['work']; ?></td>
				<td><?php echo $infoEmployee['data_enter']; ?></td>
				<td><?php echo $infoEmployee['data_exit']; ?></td>
				<td><?php echo $infoEmployee['email']; ?></td>
				<td width="200"><?php echo $infoEmployee['phone']; ?></td>
				<td>R$ <?php echo number_format($infoEmployee['salary'], 2, ',', '.'); ?></td>
				<td width="200">
				<a href="<?php echo BASE_URL.'humanresources/del/'.$infoEmployee['id']; ?>" class="btn btn-danger">Excluir</a>
				<a href="<?php echo BASE_URL.'humanresources/edit/'.$infoEmployee['id']; ?>" class="btn btn-success">Editar</a>
				</td>
			</tr>
		</tbody>
		<?php endforeach; ?>
	</table>
</div>
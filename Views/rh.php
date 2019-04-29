<div class="container-fluid">
	<h2>Recursos Humanos</h2>
	<a href="<?php echo BASE_URL; ?>humanresources/add" class="btn btn-primary">Adicionar novo funcionário</a>
	<table class="table table-rh">
		<thead>
			<tr>
				<th>Nº</th>
				<th>Nome</th>
				<th>Cargo</th>
				<th>Entrada</th>
				<th>Saída</th>
				<th>E-mail</th>
				<th>Telefone</th>
				<th>Salário</th>
				<th>Ações</th>
			</tr>
		</thead>
		<?php foreach($getEmployeeAdds as $infoEmployee): ?>
		<tbody>
			<tr>
				<th scope="row"><?php echo $infoEmployee['id']; ?></th>
				<td><?php echo $infoEmployee['fistname']; ?></td>
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
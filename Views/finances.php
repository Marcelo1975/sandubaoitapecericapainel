<div class="container-fluid rh">
	<h2>Gastos</h2>
	<a href="<?php echo BASE_URL; ?>finances/add_finances" class="btn btn-primary">Adicionar Gastos</a>
	<table class="table mobile">
		<thead>
			<tr>
				<th scope="col">Água</th>
				<th scope="col">Cemig</th>
				<th scope="col">Gás</th>
				<th scope="col">Aluguel</th>
				<th scope="col">Funcionários</th>
				<th scope="col">Estoque</th>
				<th scope="col">Data</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($finances as $item): ?>
			<tr>
				<td>R$<?php echo number_format($item['cemig'], 2, ',', '.'); ?></td>
				<td>R$<?php echo number_format($item['water'], 2, ',', '.'); ?></td>
				<td>R$<?php echo number_format($item['gas'], 2, ',', '.'); ?></td>
				<td>R$<?php echo number_format($item['for_rent'], 2, ',', '.'); ?></td>
				<td>R$<?php echo number_format($item['officials'], 2, ',', '.'); ?></td>
				<td>R$<?php echo number_format($item['providers'], 2, ',', '.'); ?></td>
				<td><?php echo date('d/m/Y, H:i', strtotime($item['data_operation']));?></td>
				<td width="180">
				<a href="<?php echo BASE_URL.'finances/del/'.$item['id']; ?>" class="btn btn-danger">Excluir</a>
				<a href="<?php echo BASE_URL.'finances/edit_finances/'.$item['id']; ?>" class="btn btn-success">Editar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
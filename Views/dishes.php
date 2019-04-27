<div class="container-fluid rh">
	<h2>Cardápio</h2>
	<a href="<?php echo BASE_URL; ?>dishes/add" class="btn btn-primary">Adicionar no cardápio</a>
	<table class="table mobile">
		<thead>
			<tr>
				<th scope="col">Nº</th>
				<th scope="col">Nome</th>
				<th scope="col">Descrição</th>
				<th scope="col">Preço</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			<h3 style="text-align: center;">TRADICIONAIS</h3>
			<?php foreach($dishes as $dishe): ?>
			<tr>
				<td><?php echo $dishe['id']; ?></td>
				<td><?php echo $dishe['name']; ?></td>
				<td width="400">
					<?php echo $dishe['description']; ?>
				</td>
				<td>R$ <?php echo number_format($dishe['price'], 2, ',', '.'); ?></td>
				<td width="180">
				<a href="<?php echo BASE_URL.'dishes/del/'.$dishe['id']; ?>" class="btn btn-danger">Excluir</a>
				<a href="<?php echo BASE_URL.'dishes/edit/'.$dishe['id']; ?>" class="btn btn-success">Editar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nº</th>
				<th scope="col">Nome</th>
				<th scope="col">Descrição</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>				
			<h3 style="text-align: center;">LINHA GOURMET</h3>
			<?php foreach($dishesGourmets as $dishegourmet): ?>
			<tr>
				<td><?php echo $dishegourmet['id']; ?></td>
				<td><?php echo $dishegourmet['name']; ?></td>
				<td width="400">
					<?php echo $dishegourmet['description']; ?>
				</td>
				<td width="180">
				<a href="<?php echo BASE_URL.'dishes/delgourmet/'.$dishegourmet['id']; ?>" class="btn btn-danger">Excluir</a>
				<a href="<?php echo BASE_URL.'dishes/editgourmet/'.$dishegourmet['id']; ?>" class="btn btn-success">Editar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nº</th>
				<th scope="col">Nome</th>
				<th scope="col">Descrição</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
		<h3 style="text-align: center;">LINHA GIGANTE</h3>
			<?php foreach($dishesGiants as $dishegiant): ?>
			<tr>
				<td><?php echo $dishegiant['id']; ?></td>
				<td><?php echo $dishegiant['name']; ?></td>
				<td width="400">
					<?php echo $dishegiant['description']; ?>
				</td>
				<td width="180">
				<a href="<?php echo BASE_URL.'dishes/delgiant/'.$dishegiant['id']; ?>" class="btn btn-danger">Excluir</a>
				<a href="<?php echo BASE_URL.'dishes/editgiant/'.$dishegiant['id']; ?>" class="btn btn-success">Editar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="container-fluid">
	<h2>Vendas</h2>
	<a style="float: right;" href="<?php echo BASE_URL; ?>sales/add_sales" class="btn btn-primary">Adicionar Vendas</a>
	<table class="table">
	  <thead>
		<tr>
			<th scope="col">Nº</th>
			<th scope="col">Nome</th>
			<th scope="col">Qt.de vendas</th>
			<th scope="col">Valor</th>
			<th scope="col">Data</th>
			<th scope="col">Ações</th>
		</tr>
	  	</thead>
	  	<?php foreach($salesInfo as $item): ?>
	  	<tbody>
	    <tr>
	    	<td><?php echo $item['id']; ?></td>
	      	<td><?php echo $item['name']; ?></td>
	      	<td><?php echo $item['quantity']; ?></td>
	      	<td>R$<?php echo number_format($item['value'], 2, ',', '.'); ?></td>
	      	<td><?php echo date('d/m/Y, H:i', strtotime($item['date_sale'])); ?></td>
	      	<td width="180">
	      	<a class="btn btn-success" href="<?php echo BASE_URL.'sales/edit_sale/'.$item['id']; ?>">Editar</a>
	      	<a class="btn btn-danger" href="<?php echo BASE_URL.'sales/del/'.$item['id']; ?>">Excluir</a>
	      </td>
	    </tr>
	  	</tbody>
	  	<?php endforeach; ?>
	</table>
</div>
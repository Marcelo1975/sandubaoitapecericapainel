<h2 style="text-align: center;">Relatório de gastos</h2>
<table width="100%" border="1">	
	<tr>
		<th>Cemig</th>
		<th>Água</th>
		<th>Gás</th>
		<th>Aluguel</th>
		<th>Pessoal</th>
		<th>Estoque</th>
		<th>Data</th>
	</tr>
<?php foreach($reportFinances as $item): ?>
	<tr>
		<td align="center">R$<?php echo $item['cemig']; ?></td>
		<td align="center">R$<?php echo $item['water']; ?></td>
		<td align="center">R$<?php echo $item['gas']; ?></td>
		<td align="center">R$<?php echo $item['for_rent']; ?></td>
		<td align="center">R$<?php echo $item['officials']; ?></td>
		<td align="center">R$<?php echo $item['providers']; ?></td>
		<td align="center"><?php echo date('d/m/Y', strtotime($item['data_operation'])); ?></td>
	</tr>
<?php endforeach; ?>
</table>
<h2 style="text-align: center;">Relatório de vendas</h2>
<table width="100%" border="1">	
	<tr>
		<th>Nome</th>
		<th>Qt.</th>
		<th>Valor</th>
		<th>Data</th>
	</tr>
<?php foreach($reportSales as $item): ?>
	<tr>
		<td align="center"><?php echo $item['name']; ?></td>
		<td align="center"><?php echo $item['quantity']; ?></td>
		<td align="center">R$<?php echo number_format($item['value'], 2, ',','.'); ?></td>
		<td align="center"><?php echo date('d/m/Y', strtotime($item['date_sale'])); ?></td>
	</tr>
<?php endforeach; ?>
</table>
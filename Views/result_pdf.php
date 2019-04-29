<h2 style="text-align: center;">Resultados</h2>
<table class="table" style="text-align:center;width:100%" border="1">
  <thead>
    <tr>
      <th width="80">Id</th>
      <th>Resultado</th>
      <th>Data</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($results as $result): ?>
    <tr>
      <th width="80"><?php echo $result['id']; ?></th>
      <td style="text-align:center;"><?php echo $result['result']; ?></td>
      <td style="text-align:center;"><?php echo date('d/m/Y, H:i', strtotime($result['data'])); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
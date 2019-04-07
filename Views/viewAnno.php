<div class="container-fluid">
	<h2 style="text-align: center;"><strong>Sua anotação</strong></h2>
	<?php foreach($annotation as $anno): ?>
	<h3><?php echo $anno['title']; ?></h3>
	<hr/>
	"<?php echo $anno['body']; ?>"<br/>
	<?php endforeach; ?>
	<a href="<?php echo BASE_URL; ?>home" class="btn btn-danger">Voltar</a>
</div>
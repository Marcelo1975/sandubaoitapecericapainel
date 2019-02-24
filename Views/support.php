<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="sendEmail">
			  	<?php if(!empty($warning)):?>
				<div class="alert alert-success"><?php echo $warning; ?></div>
				<?php endif; ?>
				<h2>SUPORTE</h2>
				<form method="POST">
				  	<div class="form-group">
				      	<label for="name">Nome</label>
				      		<input type="text" class="form-control" name="name" id="name" placeholder="Fulano de tal" />
				    	</div>

				    	<div class="form-group">
				      		<label for="email">Email</label>
				      		<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" />
				    	</div>

				    	<div class="form-group">
				      		<label for="subjectmatter">Assunto</label>
				      		<input type="text" class="form-control" name="subjectmatter" id="subjectmatter" placeholder="Resuma sua duvida" />
				    	</div>

				    	<div class="form-group">
				      		<label for="msg">Mensagem</label>
				      		<textarea name="msg" class="form-control" id="msg" rows="3" placeholder="Seja o mais claro possível"></textarea>
				    	</div>
				      	<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
		<div class="col-sm-6 video">
			<h2>Tutorial de uso</h2>
			<iframe  src="https://www.youtube.com/embed/QBnDdZ1xEVg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<div class="support-footer">
		<div class="row">
			<div class="col-sm-4">
				<div class="what"><img src="<?php echo BASE_URL; ?>assets/images/icons/whatsapp.png" alt="whatsapp"/>
					<span style="font-weight: bold;">(37)9 9932-4082</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="email"><img src="<?php echo BASE_URL; ?>assets/images/icons/gmail.png" alt="e-mail"/>
					<span style="font-weight: bold;">E-mail: contato@m18web.com.br</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="site"><img src="<?php echo BASE_URL; ?>assets/images/icons/web.png" alt="empresa"/>
					<span style="font-weight: bold;"><a target="_blank" href="https://m18web.com.br">m18web</a></span>
				</div>
			</div>
		</div>
	</div>
</div>
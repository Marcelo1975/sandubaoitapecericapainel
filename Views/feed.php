<div class="container-fluid">
<h2 style="text-align: center;">Alimentar o site</h2>
	<div class="content">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="sliderTitle">Título do cabeçalho</label>
				<input type="text" name="sliderTitle" id="sliderTitle" class="form-control" />
			</div>	
			<div class="form-group">
				<label for="sliderDescription">Descrição do cabeçalho</label>
				<input type="text" name="sliderDescription" id="sliderDescription" class="form-control" />
			</div>
			<div class="form-group">
				<label for="slider">Imagem do cabeçalho</label>
				<input type="file" name="slider" id="slider" class="form-control" />
			</div>	
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
	<!--Final do Slider-->
	<hr/>
	<div class="content">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="marketing">Novidades</label>
				<input type="file" name="marketing" id="marketing" class="form-control" />
			</div>
			<hr/>
			<div class="form-group">
				<label for="title">Título</label>
				<input type="text" name="title" id="title" class="form-control" />
			</div>
			<hr/>
			<div class="form-group">
				<label for="description">Texto</label>
				<textarea name="description" id="description" class="form-control" rows="5"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
	<!--Final da novidades-->
	<hr/>
	<div class="content">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="featurette">Destaques</label>
				<input type="file" name="featurette" id="featurette" class="form-control" />
			</div>
			<hr/>
			<div class="form-group">
				<label for="featurettetitle">Título</label>
				<input type="text" name="featurettetitle" id="featurettetitle" class="form-control" />

				<label for="featurettedescription">Descrição</label>
				<textarea name="featurettedescription" id="featurettedescription" class="form-control" rows="5"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
	<!--Final dos destaques-->
	<hr/>
	<div class="content">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="about">Página Sobre</label>
				<input type="file" name="about" id="about" class="form-control" />
			</div>
			<hr/>
			<div class="form-group">
				<label for="bodyabout">Conteúdo da página sobre</label>		
				<textarea name="bodyabout" id="bodyabout" class="form-control" rows="10"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
</div>
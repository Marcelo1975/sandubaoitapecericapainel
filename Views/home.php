<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="recipe">
				<span>Gastos:</span>
				R$<?php echo (isset($_COOKIE['recipeValues']) && !empty($_COOKIE['recipeValues']))?number_format($_COOKIE['recipeValues'], 2, ',', '.'):'000,00'; ?>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="sales">
				<span>Vendas:</span>
				R$<?php echo (isset($_COOKIE['salesValues']) && !empty($_COOKIE['salesValues']))?number_format($_COOKIE['salesValues'], 2, ',', '.'):'000,00'; ?>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="liquid">
				<span>Liquido:</span>
				<?php $result = $_COOKIE['salesValues'] - $_COOKIE['recipeValues']; ?>
				R$<?php echo number_format($result, 2, ',','.'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<canvas id="graphic"></canvas>
		</div>

		<div class="col-sm-4" style="margin-top: 1em;height: 20em;">
			<script type="text/javascript">
			<!-- //Begin
				var day_of_week = new Array('Dom','Seg','Ter','Qua','Qui','Sex','Sab');
				var month_of_year = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
				 
				var Calendar = new Date();
				 
				var year = Calendar.getYear();       // Retorna o ano
				var month = Calendar.getMonth();    // Retorna mes (0-11)
				var today = Calendar.getDate();     // Retorna dias (1-31)
				var weekday = Calendar.getDay();   // Retorna dias (1-31)
				 
				var DAYS_OF_WEEK = 7;    // "constant" para o numero de dias na semana
				var DAYS_OF_MONTH = 31;    // "constant" para o numero de dias no mes
				var cal;    // Usado para imprimir na tela
				 
				Calendar.setDate(1);    // Comecar o calendario no dia '1'
				Calendar.setMonth(month);    // Comecar o calendario com o mes atual
				 
				 
				var TR_start = '<TR>';
				var TR_end = '</TR>';
				var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=0 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=45><B><CENTER>';
				var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
				var TD_start = '<TD WIDTH="30"><CENTER>';
				var TD_end = '</CENTER></TD>';
				 
				cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB WIDTH=100% HEIGHT=300><TR><TD>';
				cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2 WIDTH=100%>' + TR_start;
				cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
				cal += month_of_year[month]  +  '</B>' + TD_end + TR_end;
				cal += TR_start;
				 
				for(index=0; index < DAYS_OF_WEEK; index++)
				{
				 
				if(weekday == index)
				cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;
				else
				cal += TD_start + day_of_week[index] + TD_end;
				}
				 
				cal += TD_end + TR_end;
				cal += TR_start;
				 
				for(index=0; index < Calendar.getDay(); index++)
				cal += TD_start + '  ' + TD_end;
				 
				for(index=0; index < DAYS_OF_MONTH; index++)
				{
				if( Calendar.getDate() > index )
				{
				  week_day =Calendar.getDay();
				  if(week_day == 0)
				  cal += TR_start;
				  if(week_day != DAYS_OF_WEEK)
				  {
				  var day  = Calendar.getDate();
				  if( today==Calendar.getDate() )
				  cal += highlight_start + day + highlight_end + TD_end;
				  else
				  cal += TD_start + day + TD_end;
				  }
				  if(week_day == DAYS_OF_WEEK)
				  cal += TR_end;
				  }
				  Calendar.setDate(Calendar.getDate()+1);
				}
				cal += '</TD></TR></TABLE></TABLE>';
				 
				//  MOSTRAR CALENDARIO
				document.write(cal);
				//  End -->
			</script>

		</div>
	</div>
	<strong>Anotações</strong>
	<div class="row">
		<div class="col-sm-8">
			<form method="POST" action="">
				<div class="form-group">
				    <label for="title">Título</label>
				    <input type="text" class="form-control" name="title" id="title" placeholder="Título para sua anotação...">
				</div>
				<div class="form-group">
				    <label for="msg">Anotação</label>
				    <textarea class="form-control" name="msg" id="msg" rows="3" placeholder="Digite sua anotação aqui..."></textarea>
				</div>
  				<button type="submit" class="btn btn-primary">Salvar anotação</button>
			</form>
		</div>
		<div class="col-sm-4">
			<div>
				<span class="title d-flex">Suas anotações</span>
				<a href="<?php echo BASE_URL; ?>home/viewAllAnnotations" class="btn btn-primary d-flex anoButton">Ver Todas</a>
			</div>
			<?php foreach($annotations as $an): ?>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Nº</th>
			      <th scope="col">Título</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row"><?php echo $an['id']; ?></th>
				  <td><?php echo $an['title']; ?></td>
				  <td><a href="<?php echo BASE_URL.'home/viewAnnotation/'.$an['id']; ?>" class="btn btn-success">Visualizar</a></td>
			    </tr>
			  </tbody>
			</table>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	var days_list = <?php echo json_encode($days_list); ?>;
	var finances = <?php echo json_encode(array_values($finances)); ?>;
	var sales = <?php echo json_encode(array_values($sales)); ?>;
	window.onload = function() {
		var ctx = document.getElementById("graphic").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels:days_list,
		        datasets: [{
		            label: 'Gastos',
		            data: finances,
		            backgroundColor: [
		                'rgba(255, 0, 0)'
		            ],
		            borderColor: [
		                'rgba(255,0, 0)'
		            ],
		            borderWidth: 1
		        }, {
		        	label:'Vendas',
		        	data:sales,
		        	backgroundColor: [
		                'rgba(0, 0, 255)'
		            ],
		            borderColor: [
		                'rgba(0, 0, 255)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
	}
</script>
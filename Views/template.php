<!--
* @Template HTML
* @version 1.0
* @Copyright m18web 2019
* @access public
* @Author Marcelo A. Rodrigues
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sandubão Itapecerica</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
  	<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<img src="<?php echo BASE_URL; ?>assets/images/icons/menu.png" class="menu-icon" onclick="return toggleMenu()" />
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<div class="mainLeft" id="menu">
				<div class="menu_item">
					<strong class="title-sandubao">Sandubão Itapecerica</strong>						
					<div class="userName"><strong><i class="fa fa-circle text-success"></i> <?php echo $viewData['user']->getName(); ?></strong></div>
					<ul class="nav flex-column" id="links">
					  	<li class="nav-item">
							<a class="nav-link" href="<?php echo BASE_URL; ?>">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/dash.png" />
						    Dashboard</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>feed">
						  	<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/rss.png" />
						    Feed</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>dishes">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/burger.png" />
						    Cardápio</a>
						</li>
						 <li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>humanresources">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/friends.png" />
						    RH</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>finances">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/stock.png" />
						    Gastos</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>sales">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/sales.png" />
						    Vendas</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>reports">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/report.png" />
						    Relatórios</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>cash">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/cash.png" />
						    Fluxo de caixa</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="<?php echo BASE_URL; ?>support">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/support.png" />
						    Suporte</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link exitAdmin" href="<?php echo BASE_URL; ?>login/logout">
							<img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/exit.png" />
						    Sair</a>
						</li>
					</ul>
			    </div>
		    </div>
	    </div>
	</div>
	<div class="col-sm-10 center">
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
</div>


<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/Chart.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

</body>
</html>
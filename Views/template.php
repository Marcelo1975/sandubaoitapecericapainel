<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Painel Admin Sandubão-Itapecerica</title>
    <!--<script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>-->

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">                      
            <div class="sidebar-header">
                <img src="<?php echo BASE_URL; ?>assets/images/logosandubaosite.png" width="210" height=60">
                <!--<h3><strong class="title-sandubao">Sandubão Itapecerica</strong></h3>-->
            </div>

            <ul class="list-unstyled components">
                <div class="userName"><strong><i class="fa fa-circle text-success"></i> <?php echo $viewData['user']->getName(); ?></strong></div>
                <li>
                    <a href="<?php echo BASE_URL; ?>">
                        <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/dash.png" />
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>feed">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/rss.png" />
                    Feed</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>dishes">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/burger.png" />
                    Cardápio</a>
                </li>
                 <li>
                    <a href="<?php echo BASE_URL; ?>humanresources">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/friends.png" />
                    RH</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>finances">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/stock.png" />
                    Gastos</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>sales">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/sales.png" />
                    Vendas</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>reports">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/report.png" />
                    Relatórios</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>cash">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/cash.png" />
                    Fluxo de caixa</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>support">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/support.png" />
                    Suporte</a>
                </li>
                <li>
                    <a class="exitAdmin" href="<?php echo BASE_URL; ?>login/logout">
                    <img class="nav-img" src="<?php echo BASE_URL; ?>assets/images/icons/exit.png" />
                    Sair</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
        <div class="container-fluid">            
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
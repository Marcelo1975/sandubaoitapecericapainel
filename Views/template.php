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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                    <a href="<?php echo BASE_URL; ?>calc">
                    <svg class="nav-img" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 50 50"
                    style=" fill:#ffffff;"><g id="surface1">
                        <path style=" " d="M 11 4 C 9.355469 4 8 5.355469 8 7 L 8 43 C 8 44.644531 9.355469 46 11 46 L 39 46 C 40.644531 46 42 44.644531 42 43 L 42 7 C 42 5.355469 40.644531 4 39 4 Z M 11 6 L 39 6 C 39.554688 6 40 6.445313 40 7 L 40 43 C 40 43.554688 39.554688 44 39 44 L 11 44 C 10.445313 44 10 43.554688 10 43 L 10 7 C 10 6.445313 10.445313 6 11 6 Z M 12 8 L 12 18 L 38 18 L 38 8 Z M 14 10 L 36 10 L 36 16 L 14 16 Z M 24 12 L 24 14 L 26 14 L 26 12 Z M 28 12 L 28 14 L 30 14 L 30 12 Z M 32 12 L 32 14 L 34 14 L 34 12 Z M 12.8125 22 C 12.335938 22.089844 11.992188 22.511719 12 23 L 12 41 C 12 41.550781 12.449219 42 13 42 L 37 42 C 37.550781 42 38 41.550781 38 41 L 38 23 C 38 22.449219 37.550781 22 37 22 L 13 22 C 12.96875 22 12.9375 22 12.90625 22 C 12.875 22 12.84375 22 12.8125 22 Z M 14 24 L 18 24 L 18 28 L 14 28 Z M 20 24 L 24 24 L 24 28 L 20 28 Z M 26 24 L 30 24 L 30 28 L 26 28 Z M 32 24 L 36 24 L 36 28 L 32 28 Z M 14 30 L 18 30 L 18 34 L 14 34 Z M 20 30 L 24 30 L 24 34 L 20 34 Z M 26 30 L 30 30 L 30 34 L 26 34 Z M 32 30 L 36 30 L 36 34 L 32 34 Z M 14 36 L 18 36 L 18 40 L 14 40 Z M 20 36 L 24 36 L 24 40 L 20 40 Z M 26 36 L 30 36 L 30 40 L 26 40 Z M 32 36 L 36 36 L 36 40 L 32 40 Z ">
                        </path></g></svg>                    
                    Calculadora</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>uploadReceipt">
                    <img class="nav-img" src="https://img.icons8.com/office/16/000000/purchase-order.png">
                    Comp/Recibos</a>
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
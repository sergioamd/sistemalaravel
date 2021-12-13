
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Sgva</title>

  <!--icheck-->
  <link href="{{asset('js/iCheck/skins/minimal/minimal.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/square.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/red.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/blue.css')}}" rel="stylesheet">

  <!--dynamic table-->
  <link href="{{asset('js/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('js/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('js/data-tables/DT_bootstrap.css')}}" />

  <!--dashboard calendar-->
  <link href="{{asset('css/clndr.css')}}" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{asset('js/morris-chart/morris.css')}}">

  <!--common-->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

 


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
        
    <!-- left side start-->
    <div class="left-side sticky-left-side">
     
        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html">{{$_SESSION['nome']}}</a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="{{ route('mostrar.index') }}"><i class="fa fa-home"></i> <span>Cobrança</span></span></a>
                </li>
                <hr>
                <li class=""><a href="{{ route('cliente.index') }}"><i class="fa fa-laptop"></i> <span>Clientes</span></a>   
                </li>
				<li class=""><a href="{{ route('produto.index') }}"><i class="fa fa-list-alt"></i> <span>Produtos</span></a>  
                </li>
				<li class=""><a href="{{ route('venda.index') }}"><i class="fa fa-money"></i> <span>Vendas</span></a>
                </li>
				<hr>
				<li class=""><a href="{{ route('relatorio.index') }}"><i class="fa fa-file"></i> <span>Relatórios</span></a>  
                </li>
                <li class=""><a href="{{ route('usuario.index') }}"><i class="fa fa-file"></i> <span>Cadastro Usuários</span></a>  
                </li>
                <hr>
                <li><a href="{{ route('app.sair') }}"><i class="fa fa-sign-in"></i> <span>Log out</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

          

            <!--notification menu start -->
            <div class="menu-right">
            
                
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
       

        <!--body wrapper start-->
        <div class="wrapper">
           
            @yield('conteudo')


        </div>
        

       


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>

<!--easy pie chart-->
<script src="{{asset('js/easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart/easypiechart-init.js')}}"></script>

<!--Sparkline Chart-->
<script src="{{asset('js/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('js/sparkline/sparkline-init.js')}}"></script>

<!--icheck -->
<script src="{{asset('js/iCheck/jquery.icheck.js')}}"></script>
<script src="{{asset('js/icheck-init.js')}}"></script>

<!-- jQuery Flot Chart-->
<script src="{{asset('js/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.resize.js')}}"></script>


<!--Morris Chart-->
<script src="{{asset('js/morris-chart/morris.js')}}"></script>
<script src="{{asset('js/morris-chart/raphael-min.js')}}"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{asset('js/advanced-datatable/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/data-tables/DT_bootstrap.js')}}"></script>
<!--dynamic table initialization -->
<script src="{{asset('js/dynamic_table_init.js')}}"></script>


<!--common scripts for all pages-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/calculos.js')}}"></script>

<!--script for editable table-->
<script src="{{asset('js/editable-table.js')}}"></script>

<!--Dashboard Charts-->
<script src="{{asset('js/dashboard-chart-init.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>

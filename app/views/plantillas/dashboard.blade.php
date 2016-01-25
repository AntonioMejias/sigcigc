<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ferrominera - SIGCIGC</title>
      @section('cabecera')
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
        {{HTML::style("bootstrap/css/bootstrap.min.css")}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <style type="text/css">
          .datepicker {

            z-index:99999999 !important;
          }
        </style>
        <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
      @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>F</b>MO</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIG</b>CIGC</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 
                  <span class="hidden-xs">  <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/boxed-bg.png" class="img-circle" alt="User Image">
                    <p>
                      Jessica Abreo
                      <small>Administrador</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#"></a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#"></a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#"></a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{URL::to('/')}}/images/logo3.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
             
              <p> {{Session::get('nivel')}} </p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>

            <li><a href="#"><i class="fa fa-list"></i> <span>Control de Asistencia</span> <i class="fa fa-angle-left pull-right"></i></a>

                <ul class="treeview-menu">
                   <li><a href="{{URL::to('control_asistencia')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Visualizar Control</a></li>
                   <li><a href="{{URL::to('anadir_asistencia')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Anadir Asistencia</a></li>
                </ul>
            </li>

            <li><a href="{{URL::to('vacaciones')}}"><i class="glyphicon glyphicon-calendar"></i> <span>Vacaciones</span></a></li>
            
             <li><a href="#"><i class="glyphicon glyphicon-file"></i> <span>Objetivo de Gestion</span> <i class="fa fa-angle-left pull-right"></i></a>

                <ul class="treeview-menu">
                   <li><a href="{{URL::to('objetivogestion')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Visualizar</a></li>
                   <li><a href="{{URL::to('anadir_objetivo_gestion')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Anadir</a></li>
                </ul>
            </li>
            
            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Informe Semanal</span> <i class="fa fa-angle-left pull-right"></i></a>

                <ul class="treeview-menu">
                   <li><a href="{{URL::to('informe_semanal')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Visualizar</a></li>
                   <li><a href="{{URL::to('anadir_informe')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Anadir</a></li>
                </ul>
            </li>

             <li><a href="#"><i class="fa fa-wrench"></i> <span>Opciones</span> <i class="fa fa-angle-left pull-right"></i></a>

                <ul class="treeview-menu">
                   <li><a href="{{URL::to('usuarios')}}"><i class="glyphicon glyphicon-triangle-right"></i></i>Usuarios</a></li>
                </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          @section('titulo')
              Menu Principal
          @show
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">
              @section('miga')
                Menu Principal
              @show
            </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          @yield("content")
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://almsaeedstudio.com">Jessica Abreo</a>.</strong> All rights reserved.
      </footer>


    </div><!-- ./wrapper -->

      @section('modal')

       @show

    {{HTML::script("plugins/jQuery/jQuery-2.1.4.min.js")}}
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/datepicker.js"></script>
    <script src="js/picker.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/knob/jquery.knob.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
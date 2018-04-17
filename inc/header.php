<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <!--IE Compatibility modes-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Mobile first-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ownkitchen</title>

  <meta name="description" content="Plataforma de venda e compra de comidas">
  <meta name="author" content="Laiali">
  <meta name="msapplication-TileColor" content="#5bc0de" />
  <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/lib/bootstrap/css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- Metis core stylesheet -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/main.css">

  <!-- metisMenu stylesheet -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/lib/metismenu/metisMenu.css">

  <!-- onoffcanvas stylesheet -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/lib/onoffcanvas/onoffcanvas.css">

  <!-- animate.css stylesheet -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/lib/animate.css/animate.css">
  <link rel="stylesheet/less" type="text/css" href="<?php echo BASEURL; ?>assets/less/theme.less">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
</head>
<body class="boxed">
  <div class="bg-red dker" id="wrap">
    <div id="top" class="">
      <!-- .navbar -->
      <header class="head">
        <div class="search-bar">
          <form class="main-search" action="">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Pesquisar...">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm text-muted" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.main-search -->
        </div>
        <!-- /.search-bar -->
        <div class="main-bar">

          <a href="<?php echo BASEURL; ?>/index.php" class="navbar-brand"><img src="<?php echo BASEURL; ?>assets/img/logo.png" alt=""></a>

        </div>
        <!-- /.main-bar -->
      </header>
      <!-- /.head -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <div class="topnav">
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
              class="btn btn-default btn-sm" id="toggleFullScreen">
              <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
            <div class="btn-group">
              <a href="#" data-toggle="tooltip" data-original-title="Entrar" data-placement="bottom"
              class="btn btn-default btn-sm">
              <i class="glyphicon glyphicon-log-in"></i>
            </a>
          </div>
          <div class="btn-group">
            <a href="#"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            data-toggle="tooltip" data-original-title="Sair" data-placement="bottom"
            class="btn btn-default btn-sm">
            <i class="glyphicon glyphicon-log-out"></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <!-- .nav -->
      <ul class="nav navbar-nav">
        <li><a href="/ownkitchen/companies">Empresas</a></li>
        <li><a href="/ownkitchen/companies/add.php">Nova empresa</a></li>
        <li><a href="/ownkitchen/products">Produtos</a></li>
      </ul>
      <!-- /.nav -->
    </div>
  </div>
  <!-- /.container-fluid -->
</nav>
<!-- /.navbar -->

</div>

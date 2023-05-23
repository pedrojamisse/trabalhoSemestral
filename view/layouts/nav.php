
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>

      <li class="nav-item dropdown show" id="cat-compra" style="display: none;">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right show" style="left: inherit; right: 0px;">
    <table class="table table-hover text-nowrap p-0">
      <thead class=" table-success">
<tr>
  <td>Codigo</td>
  <td>Nome</td>
  <td>Preco</td>
  <td>Eleminar</td>
</tr>
      </thead>
      <tbody>

      </tbody>
    </table>2
    <a href="" class="btn btn-danger btn-block">processar compra</a>
    <a href="" class="btn btn-primary btn-block">processar compra</a>
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <a href="../controller/logout.php">log out</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../view/catalogo.php" class="brand-link">
      <img src="../imagens/doctor.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Farmacia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
  
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../imagens/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
             echo $_SESSION['nome'];
            ?>
          </a>
        </div>
      </div>

     


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">USUARIO</li>
         
          <li class="nav-item">
            <a href="../view/editar_dados_pessoais.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
               Dados Pessoais
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../view/adm_catalogo.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
               Gestao de Usuario
              </p>
            </a>
          </li>
          <li class="nav-header">DEPOSITO</li>
         
         <li class="nav-item">
           <a href="../view/laboratorio.php" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p>
               Gestao de Origem
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="../view/produto.php" class="nav-link">
             <i class="nav-icon fas fa-pills"></i>
             <p>
               Gestao de produto
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="../view/fornecedor.php" class="nav-link">
             <i class="nav-icon fas fa-pills"></i>
             <p>
               Gestao de fornecedor
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="../view/stock.php" class="nav-link">
             <i class="nav-icon fas fa-pills"></i>
             <p>
              Stock
             </p>
           </a>
         </li>
         <li class="nav-header">COMPRAR</li>
         
         <li class="nav-item">
           <a href="../view/index.php" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p>
               vendas
             </p>
           </a>
         </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   
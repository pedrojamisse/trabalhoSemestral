<?php
session_start();
if($_SESSION['tipo_us']==1){
    include_once 'layouts/header.php';
?>

  <title>Catalogo</title>
<?php

?>

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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section>
<div class="container-fluid">


<article class="caTMain container-fluid">
    <div class="catItem row bgc-7">
    <figure><img src="../imagens/pharmacy.jpg" alt="Sistema de Farmácia"></figure>
        <div class="col">
            <p>Seja uma farmácia independente ou uma rede de farmácias, o sistema de farmácia da Ewave MD Medical cobre todos os aspectos e necessidades de gerenciamento eficaz de farmácias.</p>
<p>Características incluem:</p>
<ul>
<li>Vendas digitais</li>
<li>Gestão de compras e coordenação de pedidos</li>
<li>Gestão de inventário</li>
<li>Gestão da rede de farmácias</li>
<li>Mobilização de estoque</li>
<li>Interações medicamentosas</li>
<li>E-prescrições</li>
<li>Envio automatizado de reivindicações</li>
</ul>
<p>Nosso sistema beneficia centenas de farmácias instaladas em todo o mundo, tornando-o altamente flexível, dinâmico e adaptável o suficiente para implementar personalizações, processos ou qualquer regra de negócios que a organização possa precisar.</p>
<p>Um mecanismo integrado de interação de medicamentos permite que as farmácias tomem precauções extras ao vender medicamentos, alertando sobre as regras de segurança, interações medicamentosas, gravidade, alergias e riscos como overdose. O mecanismo de interação de medicamentos pode funcionar como uma farmácia autônoma, conectada ao EMR ou qualquer consultório médico com recursos de prescrição eletrônica, alarmante quando ocorrem interações, como medicamento com medicamento, medicamento com doença, medicamento com alergia, overdose e muito mais.</p>
<p>O sistema de gerenciamento farmacêutico gerencia a cesta de medicamentos corporativa a partir de um banco de dados centralizado que rege todas as farmácias de ponto de vendas com um mecanismo de regras integrado que impõe regras corporativas, como que profissão pode proibir que tipo de medicamento. Ele também permite o envio automatizado de requisições às seguradoras, reduzindo drasticamente a sobrecarga administrativa. Oferece opções dinâmicas de preços para medicamentos com base em apólices de seguro e considera preços especiais, franquias e reembolsos para os segurados.</p>
<p>Recentemente, adicionamos um modelo de administração de medicamentos não registrados na cesta de saúde nacional, com base na recomendação de um médico assistente e na aprovação do comitê de especialistas.</p>
            
        </div>
               

    </div>

</article>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
<!-- jQuery -->
<script src="../bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../bootstrap/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>
<script src="../js/catalogo.js"></script>
<script src="../js/comprar.js"></script>
</body>
</html>

<?php
}else{
    header('location:../view/index.php');
}
?>
<?php
session_start();
if($_SESSION['tipo_us']==1){
    include_once 'layouts/header.php';
?>

  <title>Catalogo</title>
<?php
include_once 'layouts/nav.php';
?>
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
        <div class="carde card-success">
          <div class="card-header">
          <h3 class="card-title">lote em Risco</h3>
          </div>
          <div class="card-body">
          <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>nome</td>
                    <td>concentracao </td>
                    <td>adicional</td>
                    <td>preco</td>
                    <td>stock</td>
                    <td>laboratorio</td>
                    <td>tipo</td>
                    <td>apresentacao</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="">

                </tbody>
              </table>
        
          </div>
          </div>
          </div>
</section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="carde card-success">
          <div class="card-header">
            <h3 class="card-title">Buscar produto</h3>
            <div class="input-group">
              <input type="text" id="buscar" class="form-control float-left" placeholder="Pesquisar usuario">
              <div class="input-group-append">
                <button class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </div>
          </div>
          <div class="card-body ">
          <div id="tabelaProduto"  class="row d-flex align-items-stretch"></div>
             
          </div>
          <div class="card-footer"></div>
        </div>
      </div>

    </section>
    
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
    header('location:../view/login.php');
}
?>
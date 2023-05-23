<?php
session_start();
if ($_SESSION['tipo_us'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Adm | Fornecedor</title>
  <?php
  include_once 'layouts/nav.php';
  ?>


  <!-- Modal -->
  <div class="modal fade" id="criarFornecedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar Fornecedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card-body">
        <div class="alert alert-success text-center" id="add-fornecedor" style="display: none;">
            <span><i class="fas fa-check"></i>Cadastrodo com sucesso</span>
          </div>
          <div class="alert alert-danger text-center" id="noadd-fornecedor" style="display: none;">
            <span><i class="fas fa-check"></i>Nao foi possivel efectuar o Cadastrodo </span>
          </div> 
          <form action="">
            <div class="form-group">
              <label for="">Nome</label>
              <input id="nome" type="text" class="form-control" placeholder="nome" required>
            </div>
            <div class="form-group">
              <label for="">Endereco</label>
              <input id="endereco" type="text" class="form-control" placeholder="Digita um endereco" required>
            </div>
            <div class="form-group">
              <label for="">Telefone</label>
              <input id="telefone" type="number" class="form-control" placeholder="xxx-xxx-xxx" required>
            </div>
            <div class="form-group">
              <label for="">Pais</label>
              <input id="pais" type="text" class="form-control" placeholder="Digita o pais" required>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="guardar" type="button" class="btn btn-primary">Guardar</button>
        </div>
          </form>
        </div>
        </div>
      
      </div>
    </div>
  </div> <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fornecedor <button type="button" class="btn btn-primary criar" data-bs-toggle="modal" data-bs-target="#criarFornecedor">Criar Fornecedor</button></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fornecedor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="carde card-success">
          <div class="card-header">
            <h3 class="card-title">Buscar Fornecedor</h3>
            <div class="input-group">
              <input type="text" id="buscar" class="form-control float-left" placeholder="Pesquisar Fornecedor">
              <div class="input-group-append">
                <button class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
              </div>
          </div>
          <div id="usuario" class="card-body p-0">
              <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>nome</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="tabelaFornecedor">

                </tbody>
              </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include_once 'layouts/footer.php';
} else {
  header('location:../view/login.php');
}
?>

<script src="../js/fornecedor.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>

<?php
session_start();
if ($_SESSION['tipo_us'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Adm | Catalogo</title>
  <?php
  include_once 'layouts/nav.php';
  ?>


  <!-- Modal -->
  <div class="modal fade" id="criarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <label for="">Nome</label>
              <input type="text" class="form-control" placeholder="nome" required>
            </div>
            <div class="form-group">
              <label for="">Apelido</label>
              <input type="text" class="form-control" placeholder="Apelido" required>
            </div>
            <div class="form-group">
              <label for="">Data de Nascimento</label>
              <input type="date" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
            <div class="form-group">
              <label for="">username</label>
              <input type="text" class="form-control" placeholder="username" required>
            </div>
            <div class="form-group">
              <label for="">senha</label>
              <input type="password" class="form-control" placeholder="senha" required>
            </div>
            
          </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Guardar</button>
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
            <h1>Gestao de Usuario <button type="button" class="btn btn-primary criar" data-bs-toggle="modal" data-bs-target="#criarUsuario">Criar Usuario</button></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestao de Usuario</li>
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
            <h3 class="card-title">Buscar Usuario</h3>
            <div class="input-group">
              <input type="text" id="buscar" class="form-control float-left" placeholder="Pesquisar usuario">
              <div class="input-group-append">
                <button class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
              </div>
          </div>
          <div id="usuario" class="card-body p-0">
              <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>id</td>
                    <td>nome</td>
                    <td>apelido</td>
                    <td>username</td>
                    <td>telefone</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="tabelaUsuario">

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

<script src="../js/gestaoUsuario.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>

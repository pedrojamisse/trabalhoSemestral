<?php
session_start();
if ($_SESSION['tipo_us'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Adm | Produto</title>
  <?php
  include_once 'layouts/nav.php';
  ?>


  <!-- Modal -->
  <div class="modal fade" id="criarProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar produto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
            <form action="">
              <div class="form-group">
                <label for="">Nome</label>
                <input id="nomepro" type="text" class="form-control" placeholder="nome" required>
              </div>
              <div class="form-group">
                <label for="">concentracao</label>
                <input id="concentracao" type="text" class="form-control" placeholder="concentracao" required>
              </div>
              <div class="form-group">
                <label for="">Adicionar</label>
                <input id="adicionarpro" type="text" class="form-control" placeholder="adicionar" required>
              </div>
              <div class="form-group">
                <label for="">preco</label>
                <input id="preco" type="number" class="form-control" value="1" placeholder="preco" required>
              </div>
              <div class="form-group">
                <label for="">laboradorio</label>
              <select id="laboratorio" class="form-control select2"></select>
              </div>
              <div class="form-group">
                <label for="">Tipo</label>
              <select  id="tipo" class="form-control "></select>
              </div>
              <div class="form-group">
                <label for="">presentacao</label>
              <select  id="presentacao" class="form-control select2"></select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="gradarProduto" type="button" class="btn btn-primary">Guardar</button>
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
            <h1>Gestao de 
               <button type="button" class="btn btn-primary criar" data-bs-toggle="modal" data-bs-target="#criarProduto">Criar Produto</button>
              </h1>
              <input type="hidden" id="tipo-produto" value="<?php ?>">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestao de Produtos</li>
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
            <h3 class="card-title">Buscar produto</h3>
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
                <tbody class="table-active" id="tabelaProduto">

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

<script src="../js/produto.js"></script>

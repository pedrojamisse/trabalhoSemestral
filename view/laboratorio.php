<?php
session_start();
if ($_SESSION['tipo_us'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Adm | Laboratorio</title>
  <?php
  include_once 'layouts/nav.php';
  ?>
   

  <!-- Modal laboratorio -->
  <div class="modal fade" id="criarlaboratorio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar Origem</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
        <div class="alert alert-success text-center" id="add-laboratorio" style="display: none;">
            <span><i class="fas fa-check"></i>Cadastrodo com sucesso</span>
          </div>
          <div class="alert alert-danger text-center" id="noadd-laboratorio" style="display: none;">
            <span><i class="fas fa-check"></i>Nao foi possivel efectuar o Cadastrodo </span>
          </div> 
        <form dir="form-criar-lab" >
            <div class="form-group">
              <label for="nome-lab">Nome</label>
              <input  id="nome-lab" type="text" class="form-control" placeholder="nome" required>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="submit" type="button" class="btn btn-primary submit-form">Guardar</button>
        </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div> <!-- Content Wrapper. Contains page content -->

  <!-- Modal tipo-->
  <!-- Modal -->
  <div class="modal fade" id="criartipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar Origem</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
        <div class="alert alert-success text-center" id="add-Tipo" style="display: none;">
            <span><i class="fas fa-check"></i>Cadastrodo com sucesso</span>
          </div>
          <div class="alert alert-danger text-center" id="noadd-Tipo" style="display: none;">
            <span><i class="fas fa-check"></i>Nao foi possivel efectuar o Cadastrodo </span>
          </div> 
        <form dir="form-criar-tipo" >
            <div class="form-group">
              <label for="nome-tipo">Nome</label>
              <input  id="nome-tipo" type="text" class="form-control" placeholder="nome" required>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="submitTipo" type="button" class="btn btn-primary submit-form">Guardar</button>
        </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div> <!-- Content Wrapper. Contains page content -->

  <!-- Modal presente-->
  <!-- Modal -->
  <div class="modal fade" id="criarPresentacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="modal-title fs-5 card-title " id="exampleModalLabel">Criar Origem</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
        <div class="alert alert-success text-center" id="add-presetancao" style="display: none;">
            <span><i class="fas fa-check"></i>Cadastrodo com sucesso</span>
          </div>
          <div class="alert alert-danger text-center" id="noadd-presetancao" style="display: none;">
            <span><i class="fas fa-check"></i>Nao foi possivel efectuar o Cadastrodo </span>
          </div> 
        <form dir="form-criar-presentacao" >
            <div class="form-group">
              <label for="nome-lab">Nome</label>
              <input  id="nome-presetancao" type="text" class="form-control" placeholder="nome" required>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="submitPresentacao" type="button" class="btn btn-primary submit-form">Guardar</button>
        </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div> <!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>laboradorio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">laboradorio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header">
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="#laboratorio" class="nav-link active"  data-bs-toggle="tab">laboratorio</a></li>
                <li class="nav-item"><a href="#tipo" class="nav-link"  data-bs-toggle="tab">tipo</a></li>
                <li class="nav-item"><a href="#presentacao" class="nav-link"  data-bs-toggle="tab">presentacao</a></li>
              </ul>
            </div>
            <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="laboratorio">
                  <div class="card card-success">
                    <div class="card-header">
                      <div class="card-title">buscar laboratorio <button  class="btn bg-gradient-primary m-2" data-bs-toggle="modal"  data-bs-target="#criarlaboratorio">criar laboradorio</button></div>
                      <div class="input-group">
                        <input id="buscar-laboratorio" type="text" class="form-control" placeholder="Digita nome">
                        <div class="input-group-append">
                          <button class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0 ">
                    <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>nome</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="tabelaLaboratorio">

                </tbody>
              </table>
                    </div>
                    <div class="card-footer"></div>
                  </div>
                </div>
                <div class="tab-pane" id="tipo">
                  <div class="card card-success">
                    <div class="card-header">
                      <div class="card-title">buscar tipo <button  class="btn bg-gradient-primary m-2" data-bs-toggle="modal"  data-bs-target="#criartipo">criar tipo</button></div>
                      <div class="input-group">
                        <input id="buscar-tipo" type="text" class="form-control" placeholder="Digita nome">
                        <div class="input-group-append">
                          <button class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>nome</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="tabelaTipo">

                </tbody>
              </table>
                    </div>
                    <div class="card-footer"></div>
                  </div>
                </div>
                <div class="tab-pane" id="presentacao">
                  <div class="card card-success">
                    <div class="card-header">
                      <div class="card-title">buscar presentacao <button  class="btn bg-gradient-primary m-2" data-bs-toggle="modal"  data-bs-target="#criarPresentacao">criar presentecao</presentacaobtn></div>
                      <div class="input-group">
                        <input id="buscar-presentacao" type="text" class="form-control" placeholder="Digita nome">
                        <div class="input-group-append">
                          <button class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-over text-nowrap">
                <thead class="table-success">
                  <tr>
                    <td>nome</td>
                    <td>accao</td>
                  </tr>
                </thead>
                <tbody class="table-active" id="tabelaPresentacao">

                </tbody>
              </table>
                    </div>
                    <div class="card-footer"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer"></div>
            </div>
          </div>
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
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>

<script src="../js/laboratorio.js"></script>

<script src="../js/tipo.js"></script>
<script src="../js/apresentacao.js"></script>

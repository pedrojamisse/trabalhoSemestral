<?php
session_start();
if ($_SESSION['tipo_us'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Editar Dados</title>
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
            <h1>Dados Pessoais</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dados Pessoais</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-success card-outline">
              <div class="card-body card-profile">
                <div class="text-center">
                  <img src="../imagens/avatar4.png" class="profile-user-img img-fluid img-circle" alt="">
                </div>
                <input id="pk_usuario" type="hidden" value="<?php echo $_SESSION['pk_usuario'] ?>">
                <h3 id="nome" class="profile-username text-center text-success">Nome</h3>
                <p id="apelido" class="text-muted text-center text-success">Apelido</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b style="color: #087300;">Idade</b><a id="idade" class="float-right">12</a>
                  </li>
                  <li class="list-group-item">
                    <b style="color: #087300;">user</b><a id="user" class="float-right">12</a>
                  </li>

                  <li class="list-group-item">
                    <b style="color: #087300;">Tipo de usuario</b>
                    <span id="tipo_us" class="float-right badge badge-primary">Administrador</span>
                  </li>

                </ul>
              </div>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">sobre mim</h3>
              </div>
              <div class="card-body">
                <strong style="color:#087300">
                  <i class="fas fa-phone mr-1"></i>Telefone
                </strong>
                <p id="telefone" class="text-muted">8462662</p>
                <strong style="color:#087300">
                  <i class="fas fa-phone mr-1"></i>Residencia
                </strong>
                <p id="endereco" class="text-muted">8462662</p>
                <strong style="color:#087300">
                  <i class="fas fa-phone mr-1"></i>E-mail
                </strong>
                <p id="email" class="text-muted">8462662</p>
                <strong style="color:#087300">
                  <i class="fas fa-phone mr-1"></i>Sexo
                </strong>
                <p id="sexo" class="text-muted">8462662</p>
                <button class="editar btn btn-block bg-gradient-danger">Editar</button>
              </div>
              <div class="card-footer">
                <p class="text-muted"> click no butao se quiser editar</p>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Editar dados Pessoais</h3>
              </div>
              <div class="card-body">
                <div class="alert alert-success text-center " id="editado" style="display: none;">
                    <span><i class="fas fa-check">Editado</i></span>
                </div>
                <div class="alert alert-danger text-center " id="noeditado" style="display: none;">
                    <span><i class="fas fa-check">Editado</i></span>
                </div>
                <form id="form-usuario" class="form-horizontal">
                  <div class="form-group row">
                    <label for="" class="col-sm-2">Telefone</label>
                    <div class="col-sm-18">
                      <input type="number" id="FTelefone" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2">Residencia</label>
                    <div class="col-sm-18">
                      <input type="text" id="fEndereco" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2">E-mail</label>
                    <div class="col-sm-18">
                      <input type="text" id="fEmail" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2">Sexo</label>
                    <div class="col-sm-18">
                      <input type="text" id="fSexo" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2">Informacoes Adicionar</label>
                    <div class="col-sm-18">
                      <textarea class="form-control" id="adcionar" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class=" col-sm-18 ">
                      <button type="submit" class="btn btn-block btn-outline-success">Guardar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <h3 class="card-title">Atencao! para nao submeter dados errados</h3>
              </div>
              <!-- /.card-footer-->
            </div>
          </div>
        </div>

      </div>
  </div>
  </div>
  </div>
  <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </body>
  </html>
<?php
  include_once 'layouts/footer.php';
} else {
  header('location:../view/login.php');
}
?>
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>
<script src="../js/usuario.js"></script>
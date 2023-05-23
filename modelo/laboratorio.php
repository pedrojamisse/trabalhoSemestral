<?php
include_once'conexao.php';
class laboradorio{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($nome_lab){
    $sql="INSERT INTO tb_laboratorio(nome) VALUES(:nome_lab)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':nome_lab'=>$nome_lab));
    echo 'adicionado';
}
function buscar_laboratorio() {
  $sql = "SELECT * FROM tb_laboratorio";
  $query = $this->acesso->prepare($sql);
  if ($query->execute()) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}
function buscar_laboratorioNome($nome) {
  $sql = "SELECT pk_lab FROM tb_laboratorio WHERE nome=:nome";
  $query = $this->acesso->prepare($sql);
  if ($query->execute(array(':nome'=>$nome))) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

function carregar_laboratorio(){
  $sql = "SELECT * FROM tb_laboratorio ORDER BY nome ASC";
  $query = $this->acesso->prepare($sql);
  if ($query->execute()) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

}
?>
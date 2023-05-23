<?php
include_once 'conexao.php';
class tipo{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($nome_lab){
    $sql="INSERT INTO tb_tipo_produto(nome) VALUES(:nome_lab)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':nome_lab'=>$nome_lab));
    echo 'adicionado';
}
function buscar_tipo() {
  $sql = "SELECT * FROM tb_tipo_produto";
  $query = $this->acesso->prepare($sql);
  if ($query->execute()) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

function carregar_tipo(){
  $sql = "SELECT * FROM tb_tipo_produto ORDER BY nome ASC";
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
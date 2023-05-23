<?php
include_once'conexao.php';
class apresentacao{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($nome_apre){
    $sql="INSERT INTO tb_apresentacao(nome) VALUES(:nome_apre)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':nome_apre'=>$nome_apre));
    echo 'adicionado';
}
function buscar_apresentacao() {
  $sql = "SELECT * FROM tb_apresentacao";
  $query = $this->acesso->prepare($sql);
  if ($query->execute()) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

function carregar_apresentacao(){
  $sql = "SELECT * FROM tb_apresentacao ORDER BY nome ASC";
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
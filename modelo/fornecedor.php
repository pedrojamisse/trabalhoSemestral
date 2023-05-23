<?php
include_once 'conexao.php';
class fornecedor{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($nome,$telefone,$endereco,$pais){
    $sql="INSERT INTO tb_fornecedor(nome,telefone,endereco,pais) VALUES(:nome,:telefone,:endereco,:pais)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':nome'=>$nome,':telefone'=>$telefone,':endereco'=>$endereco,':pais'=>$pais));
    echo 'adicionado';
}
function buscar_fornecedor() {
  $sql = "SELECT * FROM tb_fornecedor";
  $query = $this->acesso->prepare($sql);
  if ($query->execute()) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

function carregar_fornecedor(){
  $sql = "SELECT * FROM tb_fornecedor ORDER BY nome ASC";
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
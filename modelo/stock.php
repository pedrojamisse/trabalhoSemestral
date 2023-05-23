<?php
include_once 'conexao.php';
class stock{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($produto,$fornecedor,$stock,$lote,$dat){
    $sql="INSERT INTO tb_lote(stock,validade,lote_id_pro,lote_id_for,lote) VALUES(:stock,:dat,:produto,:fornecedor,:lote)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':stock'=>$stock,':dat'=>$dat,':produto'=>$produto,':fornecedor'=>$fornecedor,':lote'=>$lote));
    echo 'adicionado';
}


function carregar_stock(){
  $sql = "SELECT stock,validade,lote,p.nome as produto ,f.nome as fornecedor FROM tb_lote
    join tb_produto p on pk_lote=pk_produto 
    join tb_fornecedor f on pk_lote=pk_for ORDER BY validade ASC";
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
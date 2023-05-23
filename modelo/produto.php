<?php
include_once 'conexao.php';
class produto{
    public $acesso;
    var $objectos;
  public function __construct()
  {
   $db = new conexao();
   $this->acesso = $db->pdo;

  }
  function guardar($nome,$concentracao,$adicinal,$preco,$labotarotio,$tipo,$apresentacao){
    $sql="INSERT INTO tb_produto(nome,concentracao,adicinal,preco,pro_lab,pro_tipo,pro_pre) VALUES(:nome,:concentracao,:adicinal,:preco,:pro_lab,:pro_tipo,:pro_pre)";
    $query = $this->acesso->prepare($sql);
    $query->execute(array(':nome'=>$nome,':concentracao'=>$concentracao,':adicinal'=>$adicinal,':preco'=>$preco,':pro_lab'=>$labotarotio,':pro_tipo'=>$tipo,':pro_pre'=>$apresentacao));
    echo 'adicionado';
}
function buscar_produto($consulta) {
  $sql = "SELECT pk_produto, p.nome as nome,concentracao,adicinal,preco,l.nome as laboratorio, tipo_produto.nome as tipo, apre.nome as apresentacao FROM tb_produto p 
  JOIN tb_laboratorio l on pro_lab=pk_lab 
  JOIN tb_tipo_produto tipo_produto on p.pro_tipo = tipo_produto.pro_tipo 
  JOIN tb_apresentacao apre on pro_pre = pk_apre and p.nome  LIKE =:consulta LIMIT 25";
  $query = $this->acesso->prepare($sql);
  if ($query->execute(array(':consulta'=>$consulta))) {
      $this->objectos = $query->fetchAll();
  } else {
      $this->objectos = array();
  }
  return $this->objectos;
}

function carregar_produto(){
  $sql = " SELECT pk_produto, p.nome as nome,concentracao,adicinal,preco,l.nome as laboratorio, tipo_produto.nome as tipo, apre.nome as apresentacao FROM tb_produto p 
  JOIN tb_laboratorio l on pro_lab=pk_lab 
  JOIN tb_tipo_produto tipo_produto on p.pro_tipo = tipo_produto.pro_tipo 
  JOIN tb_apresentacao apre on pro_pre = pk_apre and p.nome not LIKE '' LIMIT 25";
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
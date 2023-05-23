<?php
include_once '../modelo/stock.php';
$stockObj= new stock();
if($_POST['funcao']=='guardar'){
$produto= $_POST['produto'];
$fornecedor = $_POST['fornecedor'];
$stock = $_POST['stock'];
$lote = $_POST['lote'];
$dat = $_POST['data'];

$stockObj->guardar($produto,$fornecedor,$stock,$lote,$dat);

}
//---buscar laboratorio------
if ($_POST['funcao']=='buscar_produto') {
    $produto->buscar_produto();
    $json= array();
    foreach($produto->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_lab,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}
//---carregar produto------
if ($_POST['funcao']=='carregar_stock') {
    $stock->carregar_stock();
    $json= array();
    foreach($stock->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_lote,
            'stock'=>$objecto->stock,
            'validade'=>$objecto->validade,
            'lote'=>$objecto->lote,
            'fornecedor'=>$objecto->fornecedor,
            'produto'=>$objecto->produto
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
<?php
include '../modelo/fornecedor.php';
$fornecedor = new fornecedor();
if($_POST['funcao']=='guardar'){
$nome = $_POST['nome_for'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$pais = $_POST['pais'];
$fornecedor->guardar($nome,$telefone,$endereco,$pais);

}
//---buscar laboratorio------
if ($_POST['funcao']=='buscar_fornecedor') {
    $fornecedor->buscar_fornecedor();
    $json= array();
    foreach($fornecedor->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_for,
            'nome'=>$objecto->nome,
            'telefone'=>$objecto->telefone,
            'endereco'=>$objecto->endereco,
            'pais'=>$objecto->pais
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}
//---carregar laboratorio------
if ($_POST['funcao']=='carregar_fornecedor') {
    $fornecedor->carregar_fornecedor();
    $json= array();
    foreach($fornecedor->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_for,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
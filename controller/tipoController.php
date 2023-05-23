<?php
include '../modelo/tipo.php';
$tipo = new tipo();
if($_POST['funcao']=='guardar'){
$nome = $_POST['nome_tipo'];
$tipo->guardar($nome);

}
//---buscar tipo------
if ($_POST['funcao']=='buscar_tipo') {
    $tipo->buscar_tipo();
    $json= array();
    foreach($tipo->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pro_tipo,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}
//---carregar tipo------
if ($_POST['funcao']=='carregar_tipo') {
    $tipo->carregar_tipo();
    $json= array();
    foreach($tipo->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pro_tipo,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
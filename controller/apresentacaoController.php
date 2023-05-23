<?php
include '../modelo/apresentacao.php';
$apresentacao = new apresentacao();
if($_POST['funcao']=='guardar'){
$nome = $_POST['nome_apresentacao'];
$apresentacao->guardar($nome);

}
//---buscar tipo------
if ($_POST['funcao']=='buscar_apresentacao') {
    $apresentacao->buscar_apresentacao();
    $json= array();
    foreach($apresentacao->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_apre,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}
//---carregar tipo------
if ($_POST['funcao']=='carregar_apresentacao') {
    $apresentacao->carregar_apresentacao();
    $json= array();
    foreach($apresentacao->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_apre,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
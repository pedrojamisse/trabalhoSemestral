<?php
include_once '../modelo/produto.php';
$produto= new produto();
if($_POST['funcao']=='guardar'){
$nome = $_POST['nomepro'];
$concentracao = $_POST['consentracao'];
$adicional = $_POST['adicionarpro'];
$preco = $_POST['preco'];
$laboratorio = $_POST['laboratorio'];
$tipo = $_POST['tipo'];
$apresentacao = $_POST['apresentacao'];
$produto->guardar($nome,$concentracao,$adicional,$preco,$laboratorio,$tipo,$apresentacao);

}
//---buscar laboratorio------
if ($_POST['funcao']=='buscar_produto') {
    $produto->buscar_produto($consulta);
    $json= array();
    foreach($produto->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_produto,
            'nome'=>$objecto->nome,
            'concetracao'=>$objecto->concentracao,
            'adicional'=>$objecto->adicinal,
            'preco'=>$objecto->preco,
            'stock'=>'stock',
            'laboratorio'=>$objecto->laboradorio,
            'tipo'=>$objecto->tipo,
            'apresentacao'=>$objecto->apresentacao
        );
    }
    $stringJson = json_encode($json[0]);
    echo $stringJson;

}
//---carregar produto------
if ($_POST['funcao']=='carregar_produto') {
    $produto->carregar_produto();
    $json= array();
    foreach($produto->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_produto,
            'nome'=>$objecto->nome,
            'concentracao'=>$objecto->concentracao,
            'adicional'=>$objecto->adicinal,
            'preco'=>$objecto->preco,
            'stock'=>'stock',
            'laboratorio'=>$objecto->laboratorio,
            'tipo'=>$objecto->tipo,
            'apresentacao'=>$objecto->apresentacao
        );
    }
    
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
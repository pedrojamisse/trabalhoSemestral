<?php
include '../modelo/laboratorio.php';
$laboratorio= new laboradorio();
if($_POST['funcao']=='guardar'){
$nome = $_POST['nome_lab'];
$laboratorio->guardar($nome);

}
//---buscar laboratorio------
if ($_POST['funcao']=='buscar_laboratorio') {
    $laboratorio->buscar_laboratorio();
    $json= array();
    foreach($laboratorio->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_lab,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}
//---------- buscar um laboratorio-----------
if ($_POST['funcao']=='buscar_laboratorioNome') {
    $idLaboratorio=$laboratorio->buscar_laboratorioNome($nome);
  // Formate o resultado como um objeto JSON
  $response = array('pk_lab' => $idLaboratorio);
  echo json_encode($response);
}
//---carregar laboratorio------
if ($_POST['funcao']=='carregar_laboratorio') {
    $laboratorio->carregar_laboratorio();
    $json= array();
    foreach($laboratorio->objectos as $objecto){
        $json[] =array(
            'id'=>$objecto->pk_lab,
            'nome'=>$objecto->nome
        );
    }
    $stringJson = json_encode($json);
    echo $stringJson;

}

?>
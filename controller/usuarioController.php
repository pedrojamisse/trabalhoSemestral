<?php
include_once '../modelo/usuario.php';
$usuario = new Usuario();
if($_POST['funcao']=="buscar"){
    $json=array();
    $data_actual = new DateTime();
    $objectos=$usuario ->obter_dados($_POST['dados']);
 

    foreach ($objectos as $objecto) {
        $data_nascimento = new DateTime($objecto->idade);
        $idade = $data_nascimento->diff($data_actual);
        $ano =$idade->y;
        $json[]=array(
      'id_usuario' => $objecto->pk_usuario,
      'nome' => $objecto->nome,
      'apelido' => $objecto->apelido,
      'idade' => $ano,
      'user' => $objecto->user,
      'senha' => $objecto->senha,
      'telefone' => $objecto->telefone,
        'endereco' =>$objecto->endereco,
        'email' =>$objecto->email,
        'sexo'=>$objecto->sexo,
        'info_adcionar'=>$objecto->info_adicionar,
        'tipo_us'=>$objecto->nome_us
        );
    } 
    $jsonString = json_encode($json[0]);
    echo $jsonString;
}

if($_POST['funcao']=="capturar_dados"){
    $json=array();
    $id_usuario= $_POST['pkUsuario'];
    $objectos=$usuario ->obter_dados($id_usuario);
 

    foreach ($objectos as $objecto) {
        $json[]=array(
     
      'telefone' => $objecto->telefone,
        'endereco' =>$objecto->endereco,
        'email' =>$objecto->email,
        'sexo'=>$objecto->sexo,
        'info_adcionar'=>$objecto->info_adicionar,
     
    );
    } 
    $jsonString = json_encode($json[0]);
    echo $jsonString;
}


if($_POST['funcao']=="editar"){

    $id_usuario= $_POST['pkUsuario'];
    $telefone= $_POST['telefone'];
    $endereco= $_POST['endereco'];
    $email= $_POST['email'];
    $adicinal= $_POST['adicinal'];
    $sexo= $_POST['sexo'];
        
  
    $objectos=$usuario ->editar($id_usuario,$telefone,$endereco,$email,$sexo,$adicinal);
    echo 'editado com sucesso';


}

if($_POST['funcao']=="buscar_dados"){
    $json=array();
    $data_actual = new DateTime();
    $objectos=$usuario ->buscar_dados();
 

    foreach ($objectos as $objecto) {
        $data_nascimento = new DateTime($objecto->idade);
        $idade = $data_nascimento->diff($data_actual);
        $ano =$idade->y;
        $json[]=array(
      'id_usuario' => $objecto->pk_usuario,
      'nome' => $objecto->nome,
      'apelido' => $objecto->apelido,
      'idade' => $ano,
      'user' => $objecto->user,
      'senha' => $objecto->senha,
      'telefone' => $objecto->telefone,
        'endereco' =>$objecto->endereco,
        'email' =>$objecto->email,
        'sexo'=>$objecto->sexo,
        'info_adcionar'=>$objecto->info_adicionar,
        'tipo_us'=>$objecto->nome_us
        );
    } 
    $jsonString = json_encode($json);
    echo $jsonString;
}

?>
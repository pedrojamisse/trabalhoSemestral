<?php
include_once 'conexao.php';


class Usuario {
 
   public $acesso;
    var $objectos;
    
    public function __construct() {
        $db = new conexao();
        $this->acesso = $db->pdo;
    }

    function login($dni, $pass) {
        $sql = "SELECT * FROM tb_usuario INNER JOIN tb_tipo_usuario ON tipo_us = pk_tipo_us WHERE user = :user AND senha = :pass";
        $query = $this->acesso->prepare($sql);
        $query->execute(array(':user' => $dni, ':pass' => $pass));
        $this->objectos = $query->fetchAll();
        return $this->objectos ; // return an empty array if $objectos is not set or empty
    }
    function obter_dados($id) {
        $sql = "SELECT * FROM tb_usuario INNER JOIN tb_tipo_usuario ON tipo_us = pk_tipo_us WHERE pk_usuario=:id";
        $query = $this->acesso->prepare($sql);
        $query->execute(array(':id' => $id));
        $this->objectos = $query->fetchAll();
        return $this->objectos ; // return an empty array if $objectos is not set or empty
    }

    function editar($id_usuario,$telefone,$endereco,$email,$sexo,$adicinal) {
        $sql = "UPDATE tb_usuario SET telefone=:telefone, endereco=:endereco, email=:email, sexo=:sexo, info_adicionar=:adicinal WHERE pk_usuario=:id_usuario";
        $query = $this->acesso->prepare($sql);
        $query->execute(array(':id_usuario' => $id_usuario,':telefone'=>$telefone,':endereco'=>$endereco,':email'=>$email,':sexo'=>$sexo,':adicinal'=>$adicinal));
        
      
    }
    function buscar_dados() {
        $sql = "SELECT * FROM tb_usuario INNER JOIN tb_tipo_usuario ON tipo_us = pk_tipo_us WHERE nome IS NOT NULL ORDER BY pk_usuario LIMIT 25";
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








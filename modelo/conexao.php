<?php
class conexao{
    private $servidor ="localhost";
    private  $db ="farmaciadb";
    private $port = 3306;
    private $charset ="utf8";
    private $usuario = "root";
    private $senha="";
    private $atributo =[PDO::ATTR_CASE,PDO::CASE_LOWER,PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    public $pdo=null;

    public function __construct(){
        try{
            $this->pdo=new PDO("mysql:host={$this->servidor};dbname={$this->db};port={$this->port};charset={$this->charset}",$this->usuario,$this->senha,$this->atributo);
            
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            exit(); // adicionar uma saída para interromper o script caso a conexão falhe
        }
    }
}
?>
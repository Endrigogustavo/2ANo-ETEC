<?php
class Conectar extends PDO{
    private static $instancia;
    private $query;
    private $host = "localhost";
    private  $usuario = "root";
    private  $senha = "";
    private  $db = "bd_autoria";

    public function __construct(){
        parent:: __construct("mysql:host=$this->host;dbname=$this->db","$this->usuario","$this->senha");
    }

    public static function getInstance(){
        if(!isset(self::$instancia)){
            try{
                self::$instancia = new Conectar;
            }catch(Exception $e){
                echo 'Erro ao conectar';
                exit();
            }
        }
        return self::$instancia;
    }

    public function sql($query){
        $this->getInstance();
        $this->query = $query;
        $stmt = self::$instancia->prepare($this->query);
        $stmt->execute();
        self::$instancia = null;
    }
}
?>
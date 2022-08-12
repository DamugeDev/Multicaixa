<?php
 /*try{
        
    $conn = new PDO("mysql:dbname=multicaixa;host=localhost:3307","root","");
}
catch(PDOException $e){
    echo "Erro na conexao com o banco de dados: " .$e ->getMessage(); 
}

catch(Exception $e){
    echo "Erro Generioco " .$e->getMessage();
} */
    ?>

<?php

class Conexao{
    public $conn; //conexao
    public $id;
    public $nome;
    public $senha;
    
   public function Conecta(){
    try{
        
       $this-> conn = new PDO("mysql:dbname=multicaixa;host=localhost:3307","root","");
       echo "<label style='color:#00ff15; font-weight: bold;'>";
       echo "*";
       echo "</label>";
       
       
       
    }
    catch(PDOException $e){
        echo "Erro na conexao com o banco de dados: " .$e ->getMessage(); 
    }
    
    catch(Exception $e){
        echo "Erro Generioco " .$e->getMessage();
    }
    return $this->conn;
   }
   
   /* function __construct($id,$nome,$senha)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->senha=$senha;
    }*/
   public function getConecta(){
       return $this->Conecta();
   }
}

class Insert extends Conexao{
    private $pdo;
    private $query;
    public function setQuery($query){
        $this->query=$query;
    }
    public function getQuery(){
       return $this->query;
    }

    private function minhaConexao(){
        $this->pdo=parent::getConecta();
    }
    public function executaInsert($query){
            $this->minhaConexao();
            $this->montaInsert($query);
    }
    private function montaInsert(){
        try{
            $this->sql=$this->pdo->prepare($this->getQuery());
            $this->sql->execute();
        }catch(PDOException $erros){
            die("
                    Erro na linha #{$this->getLine}<br>
                    Erro no arquivo #{$this->getFile}<br>
                    Mensage do Erro #{$this->getMessage}<br>");
        }

    }
} 
 
class Select extends Conexao{
    private $pdo; private $query; private $sql; private $resultado;
    //GETS E SETS
    public function setQuery($query){
        $this->query=$query;
    }
    public function getQuery(){
        return $this->query;
    }
    public function getResultado(){
        return $this->resultado;
    }
    
    private function minhaConexao(){
        $this->pdo=parent::getConecta();        
    }
    public function executaSelect($query){
        $this->minhaConexao();
       // var_dump($this->pdo);
        $this->montaSelect($query);
    }

    private function montaSelect($query){
        $this->sql=$this->pdo->prepare($this->getQuery());
        $this->sql->execute();
        $this->resultado=$this->sql->fetchAll(PDO::FETCH_ASSOC);
        /*echo "<pre>";
        var_dump($this->resultado);
        echo "</pre>";*/
    }
}

/*$inserir=new Insert();
$inserir->executaInsert($inserir->setQuery(
    "INSERT INTO clientes (cliente_id,nome,senha) VALUES(1,'damuge',3342)"));*/
?>

<?php



/*$inserir=new Insert();
$inserir->executaInsert($inserir->setQuery(
    "INSERT INTO clientes (cliente_id,nome,senha) VALUES(1,'damuge',3342)"));*/
?>
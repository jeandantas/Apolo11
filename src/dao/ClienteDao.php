<?php
    include ('../src/dominio/Cliente.php');
    include ('connectionFactory.inc.php');
    
    class ClienteDao{
        public function insertCliente($cliente){
            try{
                $conn = get_connection();
                
                $stmt = $conn->prepare('INSERT INTO Cliente(nome, sobrenome, cpf, email, endereco, 
                                        senha, idCliente, ehVisitante) VALUES (:nome, :sobrenome, 
                                        :cpf, :email, :endereco, :senha, :idCliente, :ehVisitante)');
                
                $stmt->bindValue(':nome', $cliente->getNome(), PDO::PARAM_STR);
                $stmt->bindValue(':sobrenome', $cliente->getSobrenome(), PDO::PARAM_STR);
                $stmt->bindValue(':cpf', $cliente->getCPF(), PDO::PARAM_STR);
                $stmt->bindValue(':email', $cliente->getEmail(), PDO::PARAM_INT);
                $stmt->bindValue(':endereco', $cliente->getEndereco(), PDO::PARAM_STR);
                $stmt->bindValue(':senha', $cliente->getSenha(), PDO::PARAM_STR);
                $stmt->bindValue(':idCliente', $cliente->getIdCliente(), PDO::PARAM_STR);
                $stmt->bindValue(':ehVisitante', $cliente->getEhVisitante(), PDO::PARAM_STR);
                $stmt->execute();
                return null;
             }catch (PDOException $ex){
                echo "Erro: ".$ex->getMessage(); 
             }
        }
        
        public function deleteCliente($cliente){
            $conn = get_connection();
            
            $stmt = $conn->prepare("DELETE FROM Cliente WHERE idCliente = ?");
            
            $stmt->bindParam(1,$cliente->getIdCliente());
            $stmt->execute();
        }
        
        public function updateCliente($id, $cliente){
            $conn = get_connection();
            
            $sql = "UPDATE Cliente SET nome = ? WHERE idCliente = ?";
            
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(1,$cliente->getNome());
            $stmt->bindParam(2,$id);
            $stmt->execute();
        }
        
        public function selectCliente($id){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Cliente WHERE idCliente = ?";
            
            $stmt = $conn->prepare($sql);
 
            $stmt->bindParam(1,$id);
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->nome ."<br>";
                echo $row->sobrenome ."<br>";
                echo $row->cpf ."<br>";
                echo $row->email ."<br>";
                echo $row->endereco ."<br>";
            }
        }
        
        public function selectAllCliente(){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Cliente";
            
            $stmt = $conn->prepare($sql);
            
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->nome ."<br>";
                echo $row->sobrenome ."<br>";
                echo $row->cpf ."<br>";
                echo $row->email ."<br>";
                echo $row->endereco ."<br>";
            }
        }
        
        public function selectClienteCPF($cpf){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Cliente WHERE cpf = ?";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$cpf);
            $rs = $stmt->query();
            
            $rs->fetch(PDO::FETCH_OBJ);
            
        }
        
        public function  selectClienteEmail($email){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Cliente WHERE email = ?";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$cpf);
            $rs = $stmt->query();  
        }
        
        public function getIdLivre(){
            /*$conn = get_connection();
            
            $sql = "SELECT MAX(idCliente) FROM Cliente";
          
            $stmt = $conn->prepare($sql);
            $stmt->
            $rs = $stmt->query();

            $row = $rs->fetch(PDO::FETCH_OBJ);
            
            return $row + 1;*/
            return 1;
        }
    }
?>

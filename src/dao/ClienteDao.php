<?php
    require_once '../src/dominio/Cliente.class.php';
    include 'connectionFactory.inc.php';
    
    class ClienteDao{
        public function insertCliente($cliente){
            $conn = get_connection();
            
            $stmt = $conn->prepare("INSERT INTO cliente(nome, sobrenome, cpf, email, endereco, 
                                    senha, idCliente, ehVisitante)" + "VALUES(?,?,?,?,?,?,?,?)");
            
            $stmt->bindParam(1,$cliente->getNome());
            $stmt->bindParam(2,$cliente->getSobrenome());
            $stmt->bindParam(3,$cliente->getCPF());
            $stmt->bindParam(4,$cliente->getEmail());
            $stmt->bindParam(5,$cliente->getEndereco());
            $stmt->bindParam(6,$cliente->getSenha());
            $stmt->bindParam(7,$cliente->getIdCliente());
            $stmt->bindParam(8,$cliente->getEhVisitante());
            $stmt->execute();
        }
        
        public function deleteCliente($cliente){
            $conn = get_connection();
            
            $stmt = $conn->prepare("DELETE FROM Cliente WHERE idCliente = ?");
            
            $stmt->bindParam(1,$cliente->getIdCliente());
            $stmt->execute();
        }
        
        public function updateCliente($id, $cliente){
            $conn = get_connection();
            
            $sql = "UPDATE Cliente SET nome = ? WHERE id = ?";
            
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
                echo $row->senha ."<br>";
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
                echo $row->senha ."<br>";
            }
        }
    }
?>

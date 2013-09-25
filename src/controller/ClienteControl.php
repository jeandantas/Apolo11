<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class ClienteControl{
        
        function cadastroCliente($nome, $sobrenome, $cpf, $email, $endereco, $senha){
            $dao = new ClienteDao();
            $id = $dao.getIdLivre();
            
            if(validarDadosCliente($cpf, $email)){
                header("Location: ../../erros/erroCadastroLider.php");
            }
            
            $cliente = new Cliente($nome, $sobrenome, $cpf, $email, $endereco, $senha, $id, false);
            
            $dao->insertCliente($cliente);
        }
        
        function validarDadosCliente($cpf, $email){
            //Esta errado!!!
            $dao = new ClienteDao();
            
            $dao->selectCliente($cpf);
            $dao->selectCliente($email);
        }
    }
?>

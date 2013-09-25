<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class ClienteControl{
        
        function __construct() {
            
        }
        
        function cadastroCliente($nome, $sobrenome, $cpf, $email, $endereco, $senha){
            $dao = new ClienteDao();
            $id = $dao.getIdLivre();
            
            if(validaCPF($cpf)){
                
                return "CPF inválido";
            }
            elseif(validaEmail($email)) {
 
                return "Email inválido";
            }
            
            $cliente = new Cliente($nome, $sobrenome, $cpf, $email, $endereco, $senha, $id, false);
            
            $dao->insertCliente($cliente);
            return null;
        }
        
        function validaCPF($cpf){
            //Esta errado!!!
            $dao = new ClienteDao();
            
            $dao->selectCliente($cpf);
            $dao->selectCliente($email);
        }
        
        function validaEmail($email){
            //Esta errado!!!
            $dao = new ClienteDao();
            
            $dao->selectCliente($cpf);
            $dao->selectCliente($email);
        }
    }
?>

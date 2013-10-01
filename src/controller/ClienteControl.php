<?php
    require_once '../dominio/Cliente.php';
    require_once '../dao/ClienteDao.php';
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
  
            $cliente = new Cliente($nome, $sobrenome, $cpf, $email, $endereco, $senha, $id, false);
            $dao->insertCliente($cliente);
            return null;
        }
        
        function validarCPF($cpf){
            //Esta errado!!!
            $dao = new ClienteDao();
            
            $rs = $dao->selectCliente($cpf);
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

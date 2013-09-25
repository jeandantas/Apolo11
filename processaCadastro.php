<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $nome       = $_POST["nome"];
    $sobrenome  = $_POST["sobrenome"];
    $email      = $_POST["email"];      
    $cpf        = $_POST["cpf"]; 
    $endereco   = $_POST["endereco"];
    $senha      = $_POST["senha"];
    
    $ctlCliente = new ClienteControl();
    $ctlCliente->cadastroCliente($nome, $sobrenome, $cpf, $email, $endereco, $senha)
    
?>

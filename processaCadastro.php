<?php
    require_once '/src/controller/ClienteControl.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//É aqui que faz o login, faz o logon, é quem redireciona o fluxo. Basicamente são rotinas de verificação e redirecionamento
    $nome       = $_POST["nome"];
    $sobrenome  = $_POST["sobrenome"];
    $email      = $_POST["email"];      
    $cpf        = $_POST["cpf"]; 
    $endereco   = $_POST["endereco"];
    $senha      = $_POST["senha"];
    
    $cliente = new ClienteControl();
    $cliente->cadastroCliente($nome, $sobrenome, $cpf, $email, $endereco, $senha);
    
?>

<?php
    include ("src/controller/ClienteControl.php");
 
    $nome       = $_POST["nome"];
    $sobrenome  = $_POST["sobrenome"];
    $email      = $_POST["email"];      
    $cpf        = $_POST["cpf"]; 
    $endereco   = $_POST["endereco"];
    $senha      = $_POST["senha"];
    
    $cliente = new ClienteControl();
    $cliente->cadastroCliente($nome, $sobrenome, $cpf, $email, $endereco, $senha);
    print "Sucesso";
?>

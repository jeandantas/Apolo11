<?php
    $nome       = $_POST["nome"];       //pega o nome do remetente
    $email      = $_POST["email"];      //pega o email do remetente
    $assunto    = $_POST["assunto"];    //assunto


    if (($nome == "") || ($email == "") || ($assunto == "")) {
        echo "Atencao! Todos os campos do formulario devem ser preenchidos.";
    }
    else{
        echo "<h1> Parabens!!! Mensagem enviada com sucesso!</h1>";
    }
 ?>
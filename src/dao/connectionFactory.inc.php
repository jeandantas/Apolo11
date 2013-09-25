<?php

    function get_connection(){
        try{
            $conn = new PDO('mysql:host=localhost;port=3306;dbname=project', 'php_user', 'php_user');
            return $conn;
        }catch (PDOException  $e) {
            print $e->getMessage();
        }
    }
?>

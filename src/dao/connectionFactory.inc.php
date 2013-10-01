<?php

    function get_connection(){
        try{
            $conn = new PDO('mysql:host=192.168.56.101;port=3306;dbname=project', 'root', 'root');
            return $conn;
        }catch (PDOException  $e) {
            print $e->getMessage();
        }
    }
?>

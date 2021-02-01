<?php

    conectar();

    function conectar(){
        $connection = new mysqli("localhost","root","","testando");
        $connection->set_charset("utf8");
        if($connection->connect_error){
            die("Impossível conectar ao banco." . $connection->connect_error);
        }else{
            return $connection;
        }
    }

?>

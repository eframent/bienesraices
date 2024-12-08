<?php
    function conectarDB() : mysqli{
        $db = mysqli_connect('localhost', 'root', '', 'bienesraices');

        if(!$db){
            echo "Error de coneccion";
            exit;
        }

        return $db;
    }
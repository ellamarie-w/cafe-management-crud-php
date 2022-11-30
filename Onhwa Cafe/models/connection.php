<?php

    $name_db = 'onhwa_cafe';
    $user = 'root';
    $password = '';

    try {
        $db = new PDO(
            'mysql:host=localhost;
            dbname='.$name_db,
            $user,
            $password
        );

    } catch(Exception $e) {
        echo 'Connection failed:'.$e->getMessage();
    }

?>
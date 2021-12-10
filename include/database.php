<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'getasoftware');
    define('USER', 'root');
    define('PASS', '');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?> <script>console.log('connection réussi !')</script> <?php
    } catch(PDOException $e){
        ?> <script>console.log($e)</script> <?php
    }catch(Exception $e){
        ?> <script>console.log($e)</script> <?php
    }

?>
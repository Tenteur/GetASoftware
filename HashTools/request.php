<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'hashtools');
    define('USER', 'root');
    define('PASS', '');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?> <script>console.log('connection réussi !')</script> <?php
    } catch(PDOException $e){
        ?> <script>console.log($e)</script> <?php
    }

    $orignalchar = $_GET['originalchar'];
    $hash = hash('sha256', $orignalchar);

    $q = $db->prepare("INSERT INTO sha256(originalchar, hash) VALUES(:originalchar, :hash)");
    $q->execute([
                'originalchar' => $orignalchar,
                'hash' => $hash
            ]);

?>
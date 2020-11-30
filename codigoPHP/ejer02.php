<?php
    
    $paso = false;
    if(! isset($_SERVER['PHP_AUTH_USER']) ||! isset($_SERVER['PHP_AUTH_PW']) || !paso){
        require_once '../config/confDBPDO.php';
       header('WWW-Authenticate: Basic realm="Mi dominio"');
       header('HTTP/1.0 401 Unauthorized');
        
       $miDB = new PDO(DSN , USER, PASSWORD);
       
       
    } else{
     ?>

     <?php
    }
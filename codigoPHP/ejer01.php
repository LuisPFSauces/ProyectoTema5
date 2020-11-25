<?php
    if( $_SERVER['PHP_AUTH_USER'] != "admin" || $_SERVER['PHP_AUTH_PW'] != "paso"){
        header('WWW-Authenticate: Basic realm="Mi dominio"');
        header('HTTP/1.0 401 Unauthorized');
    } else{
        header("Location: pagina.php");
    }
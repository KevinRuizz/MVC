<?php

try{
    $pdo = new PDO("mysql:dbname=pokemon;host=localhost","root","");
    if(isset($pdo)){
        //echo "Conectado";
    }
}catch(PDOException $e){
    echo("Eror al conectar: ".$e->getCode());
}
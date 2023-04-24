<?php

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $database = "pokemon";
    private $con;

    public function __construct()
    {
        try {
            $this->con = new PDO("mysql:dbname=$this->database; host=$this->host", $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo("Eror al conectar: ".$e->getCode());
        }
    }

    /**
     * Get the value of con
     */
    public function getCon()
    {
        return $this->con;
    }
}
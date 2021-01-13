<?php

class Conectarse
{

    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct()
    {
        require('config-bd.php');

        $this->user = $userName;
        $this->password =  $passwordDB;
        $this->database = $dBName;
        $this->host = $hostDB;
    }

    public function conecta()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->conn->connect_errno) {
            die('Error de conexión: (' . $this->conn->connect_error . ')' . $this->conn->connect_erron);
        }
    }

    public function cerrarBD()
    {
        $this->conn->close();
    }

    public function ejecutar($sql)
    {
        $result = $this->conn->query->$sql;
        return $result;
    }

    public function renglones()
    {
        return $this->conn->affected->rows;
    }

    public function ultimoRenglon($result)
    {
        return $result->fetch_row();
    }

    public function limpiarQuery($result)
    {
        $result->free_result();
    }
}

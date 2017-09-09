<?php
    //Servidor de Desarrollo
    $servername = "172.19.16.21";
    $username = "fernando";
    $password = "F3rn4nd0FCE";
    $dbname = "CONSULTORES";
    
    //Servidor de Produccion
    //$servername = "172.19.10.23";
    //$username = "encuestas";
    //$password = "3ncu3st4s2017*+++";
    //$dbname = "ENCUESTAS";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>
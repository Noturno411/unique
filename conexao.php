<?php
$host = "localhost";
$user = "u849257120_user";
$pass = "Admin411@";
$banco = "u849257120_clientes";

mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = @new mysqli($host,$user,$pass,$banco);
if ($mysqli->connect_error) {
    //echo "Erro de conexão";
}else{
    //echo "Conexão OK!";
    error_log('Connection error: ' . $mysqli->connect_error);
}
?>
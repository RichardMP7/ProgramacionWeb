<?php
$server_name     =   "localhost";
$user_name       =   "root";
$password_name   =   "root";
$Database_name   =   "bdunad2023_25";


// Create Conexion To MySql
$conn = mysqli_connect($server_name, $user_name, $password_name, $Database_name);
// Print conection
if(!$conn){
    die("conexion fallida: " . mysqli_connect_error());
}
?>






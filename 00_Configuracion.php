<?php
$server_name     =   "localhost";
$user_name       =   "root";
$password_name   =   "root";

// Create Conexion To MySql
$conn = mysqli_connect($server_name, $user_name, $password_name);
// Print conection
if(!$conn){
    die("conexion fallida: " . mysqli_connect_error());
} 
// else {
//     echo "La conexion se creo ok\n";
// }
?>


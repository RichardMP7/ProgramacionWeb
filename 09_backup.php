<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>actualiza</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php

require('01_configuracion.php');

// Ruta donde se guardará el archivo de backup
$backup_path = 'C:/xampp/htdocs/component_2023/backups/';

// Nombre del archivo de backup
$backup_file = 'backup_' . date('Y-m-d_H-i-s') . '.sql';

// Ruta completa del archivo de backup
$backup_full_path = $backup_path . $backup_file;

$mysqldump_path = 'C:\Xampp\MySQL\bin\mysqldump.exe'; // Para Xampp

$command = "$mysqldump_path --user=$user_name --password=$password_name --host=$server_name $Database_name > $backup_full_path";
system($command);

if (file_exists($backup_full_path)){

?> 
<div class="modal-dialog">
    <div class="modal-content">
        <!-- head modal -->
        <div class = "modal-header">
            <h4 class = "modal-title">BackUp Realizado</h4>
            <button class="close" onclick = "location.href='index.html'">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
            Su BackUp fue creado correctamente puede verificar en su carpeta BackUps.             
        </div>    
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>    
    </div>
</div>

<?php
}mysqli_close($conn);
?>

</body>
</html>












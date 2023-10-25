<!DOCTYPE html>
<html lang="es">
<head>
  <title>Backup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

date_default_timezone_get("America/Bogota");

require('01_Configuracion.php');


$mysqldump='"../../../MySQL\bin\mysqldump.exe"';
// Nombre del archivo de backup
$backup_file = '"../backups/"'.$Database_name. "-" .date("Y-m-d_H-i-s") . ".sql";

system("$mysqldump --no-defaults -u $user_name -p$password_name $Database_name > $backup_file",$output);
switch ($output){
    case 0:
        ?> 
        <div class="modal-dialog">
            <div class ="modal-content">
                <div class= "modal-header">
                    <h4 class = "modal-title"> Exelente </h4>
                     <button =class = "close" onclick="location.href='../index.html'">&times;></button>
                 </div>
                 <div class="modal-body">
                     <?php
                     echo 'La base de datos <b>' .$Database_name .'</b> se ha almacenado correctamente en la siguiente ruta: '. getcwd().'/' .$backup_file .'</b>';
                     ?>
                 </div>
                 <div class = "modal-footer">
                     <button class = "btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                 </div>
            </div>
            <?php
        break;
        case 1:
           ?> 
        <div class="modal-dialog">
            <div class ="modal-content">
                <div class= "modal-header">
                    <h4 class = "modal-title"> Error </h4>
                     <button =class = "close" onclick="location.href='../index.html'">&times;></button>
                 </div>
                 <div class="modal-body">
                     <?php
                     echo 'Se ha producido un error al exportar La base de datos <b>' .$Database_name .'</b> a ' . getcwd().'/ verifique en la siguiente ruta: ' .$backup_file .'</b>';
                     ?>
                 </div>
                 <div class = "modal-footer">
                     <button class = "btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                 </div>
            </div>
 </div>
            <?php
        break;
        case 2:

    ?> 
        <div class="modal-dialog">
            <div class ="modal-content">
                <div class= "modal-header">
                    <h4 class = "modal-title"> Error </h4>
                     <button =class = "close" onclick="location.href='../index.html'">&times;></button>
                 </div>
                 <div class="modal-body">
                     <?php
                     echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br><table><tr><td> Nombre de la base de datos: </td><td><b>' .$Database_name .'</b></td></tr><tr><td> Nombre Usuario MySQL: </td><td><b>' .$user_name .'</b></td></tr><tr><td> Contraseña MySQL: </td><td><b> ' .$password_name.'</b></td></tr><tr><td>Nombre de Host MySQL: </td><td><b>' .$server_name .'</b></td></tr></table>';
                     ?>
                 </div>
                 <div class = "modal-footer">
                     <button class = "btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                 </div>
            </div>
 </div>
            <?php

        break;
}

mysqli_close($conn);
?>
</body>
</html>

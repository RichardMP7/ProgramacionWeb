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

    $CodProd = $_POST['CodProd'];
    $NomProd = $_POST['NomProd'];
    $MarcaProd = $_POST['MarcaProd'];
    $PrecioProd = $_POST['PrecioProd'];
    $CantidadProd = $_POST['CantidadProd'];


    $sqlUpdt  = "UPDATE tabla25 SET Nombre_Prod = '$NomProd', Marca_Prod = '$MarcaProd', Precio_Compra = '$PrecioProd', Cantidad_Prod = '$CantidadProd' WHERE Cod_Prod='$CodProd'";

    if (mysqli_query($conn, $sqlUpdt)){
?>
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- body header -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Actualizando....</h4>
                        <button class="close" onclick = "location.href='../actualizaAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <?php 
                                echo "Se Actualizo La Información Del Producto Satisfactoriamente" . "<br>";
                        ?>
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../actualizaAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>
<?php
    } else {
?>
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- body header -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Actualizando....</h4>
                        <button class="close" onclick = "location.href='../actualizaAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                       <?php "Los Datos No Se Lograron Actualizar" . "<br>". mysqli_error($conn); ?>
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../actualizaAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>
    <?php
}     mysqli_close($conn);
    ?>
    </body>
</html>


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

    $sql  = "Select * From tabla25 where Cod_Prod = $CodProd";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
            while ($row = mysqli_fetch_assoc($resultado)) {

                    $sqldelte = "DELETE FROM tabla25 where Cod_Prod = $CodProd";       
                    if(mysqli_query($conn, $sqldelte)){
    ?> 
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- body header -->
                                <div class = "modal-header">
                                    <h4 class = "modal-title">Eliminando....</h4>
                                    <button class="close" onclick = "location.href='../eliminaAlt.html'">&times;</button>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <?php 
                                            echo "" . "<br>";
                                    ?>
                                </div>    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" onclick="location.href='...html'">Cerrar</button>
                                </div>    
                            </div>
                        </div>

                        <?php
                            } else {
                        ?> 
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- head modal -->
                                <div class = "modal-header">
                                    <h4 class = "modal-title">Error</h4>
                                    <button class="close" onclick = "location.href='../eliminaAlt.html'">&times;</button>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                <?php
                                    echo "El Producto No Se Pudo Eliminar" . "<br>". mysqli_error($conn); 
                                ?>
                                </div>    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" onclick="location.href='../eliminaAlt.html'">Cerrar</button>
                                </div>    
                            </div>
                        </div>
                        <?php
                    }
                }
        } else {        
                        ?>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- head modal -->
                        <div class = "modal-header">
                            <h4 class = "modal-title">Error al Eliminar..</h4>
                            <button class="close" onclick = "location.href='../eliminaAlt.html'">&times;</button>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                        <?php
                            echo "El Producto No Existe En BBDD" . "<br>"; 
                        ?>
                        </div>    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="location.href='../eliminaAlt.html'">Cerrar</button>
                        </div>    
                    </div>
                </div>
    <?php
    } mysqli_close($conn);
    ?>
</body>
</html>












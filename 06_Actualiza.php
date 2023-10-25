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

    $sqlUpdt  = "Select * From tabla25 where Cod_Prod = $CodProd";
    $resultado = mysqli_query($conn, $sqlUpdt);

    if (mysqli_num_rows($resultado) > 0) {
            while ($row = mysqli_fetch_assoc($resultado)) {
?> 
    <div class="conatiner">
        <article>
            <form action="07_ActualizaV2.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Código de producto</span>
                    <ul></ul>
                    <input type="text" class="form-control" value="<?php echo $row['Cod_Prod']?>" name="CodProd" id="CodProd" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Nombre de producto</span>
                    <ul></ul>
                    <input type="text" class="form-control" value="<?php echo $row['Nombre_Prod'] ?>" name="NomProd" id="NomProd">
                </div>
                <div class="input-group mb-3 ">
                    <span class="input-group-text col-3 "> Marca del producto</span>
                    <ul></ul>
                    <input type="text" class="form-control" value="<?php echo $row['Marca_Prod'] ?>" name="MarcaProd" id="MarcaProd">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Precio de compra</span>
                    <ul></ul>
                    <input type="text" class="form-control" value="<?php echo $row['Precio_Compra'] ?>" name="PrecioProd" id="PrecioProd">  
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Cantidad comprada</span>
                    <ul></ul>
                    <input type="text" class="form-control" value="<?php echo $row['Cantidad_Prod'] ?>" name="CantidadProd" id="CantidadProd"> 
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
                    <button id="btnIngresar" class="btn btn-outline-dark" type="submit">Actualizar Producto</button>
                </div>
            </form>         
        </article>                    
    </div> 
    <?php
}} else {
    ?> 
           <!-- Window Modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- head modal -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Error</h4>
                        <button class="close" onclick = "location.href='../actualizaAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        El Producto No existe.
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../actualizaAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>
    <?php
        } mysqli_close($conn);
    ?>
    </body>
</html>












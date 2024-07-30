<?php
require("includes/conexion.php");
$conexion=conectar();
if (isset($_FILES['imagen']['tmp_name'])&&is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $imagen_array=getimagesize($_FILES['imagen']['tmp_name']);
    $imagen_Cargarda=file_get_contents($_FILES['imagen']['tmp_name']);
    $imagen_Cargarda=addslashes($imagen_Cargarda);
    $sql="insert into imagenes (ancho,altura,tipo,imagen, nombre) values('".$imagen_array[0]."','".$imagen_array[1]."',
    '".$_FILES['imagen']['type']."','".$imagen_Cargarda."','".$_FILES['imagen']['name']."') ";
    $r=mysqli_query($conexion,$sql);
    echo ($r)?"datos insertadors":"error al insertar";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="imagen" id="">
        <input type="sumbit" name="" id="" value="Subir">
    </form>
</body>
</html>
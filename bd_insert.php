<?php
    include "bd_conexion.php";
    if(isset($_POST['insert'])){
        $nombre = $_POST['Nombre'];
        $telefono = $_POST['Telefono'];
        $negocio = $_POST['Negocio'];
        $direccion = $_POST['Direccion'];
        $cantidad = $_POST['Cantidad'];

        $sql = "INSERT INTO `registro` (`Id`, `Nombre`, `Telefono`, `Negocio`, `Direccion`, `Cantidad`) VALUES (NULL, '$nombre', '$telefono', '$negocio', '$direccion', '$cantidad');";
        $ejecutar = $conexion ->query($sql);

        if($ejecutar){
            echo "Correcto";
        } else {
            echo "Error";
        }
    }
?>
<?php
    include "bd_conexion.php";

        $data = array();
        $sql = "SELECT * FROM registro";
        $ejecutar = $conexion->query($sql);

        while($row = mysqli_fetch_objetc($ejecutar)){
            $data[]=$row;
        }
        echo json_encode($data);
?>
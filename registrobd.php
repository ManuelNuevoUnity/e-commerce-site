<?php
    include("conexion.php");
    $conec=conectar();
    $nombre=$_POST['Nombre'];
    $nombreu=$_POST['NombreU']; 
    $contrasena=$_POST['Contrasena']; 
    $Correo=$_POST['CORREO'];
    
    try{
        $sql="INSERT INTO paginaof(Nombre,NombreU,Correos,Contrasena) VALUES 
                             ('$nombre','$nombreu','$Correo','$contrasena') ";
    $ejecutar=mysqli_query($conec,$sql);
    echo "datos guardados";

    }
    catch(Exception)
    {
        echo "Error al intentar guardar los datos";
    }
?>
<?php
    include("conexion.php");
    $conec=conectar();
    $nombreusuario=$_POST['inicios']; 
    $clave=$_POST['Contrasenas']; 
    try{
        $sql="select *from paginaof where NombreU='$nombreusuario' and Contrasena='$clave'";
        $ejecutar=mysqli_query($conec,$sql);
        $fila= mysqli_num_rows($ejecutar);
        if($fila>0)
        {
            $datos=mysqli_fetch_array($ejecutar);
            echo "Bienvenido estimado(a)"." ".$datos["Nombre"]." ". $datos["Correos"];
        }
        else
        {
            echo "Usuario no encontrado";
        }

    }
    catch(Exception)
    {
        echo "Error en la consulta";
    }

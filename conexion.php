<?php
 function conectar(){
    $server="localhost";
    $user="id21998654_userbd";
    $pass="27dpro403X$";
    $bd="id21998654_armoirebdnew";
    $conexion=new mysqli($server,$user,$pass,$bd);
    return $conexion; 
 }
 
?>
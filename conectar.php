<?php

/*
    $conexion = new mysqli(null,"root","Test12345.","BaseProyectoAppEngine",null,"/cloudsql/eighth-parity-214721:us-central1:mysql-tarea");

    if($conexion){
        echo "conexion exitosa";

    }else{
        echo "fallo la conexion";


}*/


  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "Test12345.";
  $db_name = "BaseProyectoAppEngine";
  $socket = "/cloudSql/eighth-parity-214721:us-central1:mysql-tarea";
  $port = "3306";


  $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name,$port,$socket);



  if($mysqli -> connect_error){


      die ('Error en la conexion '.$mysqli -> connect_error);


  }
  //printf("Servidor Informacion: %s\n", $mysqli -> server_info);
  return $mysqli;



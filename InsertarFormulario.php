<?php
include("conectar.php");

$id_nombre = $_POST['nombre'];
$id_apellido = $_POST['apellido'];
$id_tel = $_POST['tel'];
$direc = $_POST['direc'];


echo "<br>".$id_nombre;
echo "<br>".$id_apellido;
echo "<br>".$id_tel;
echo "<br>".$direc;



$mysqli = Conectar();



$query = "INSERT INTO BaseProyectoAppEngine.Formulario VALUES ('', '$id_nombre', '$id_apellido', '$id_tel',
'$direc')";
$resul= $mysqli ->query($query);


if($resul){
    echo "<br>";
    echo"Usted ingreso estos datos y fueron";
    echo "<br>";
    echo"Ingresados con Exito";
}
else{
    echo "No se pudo Insertar en la base: ".mysqli_error($mysqli);
}


?>
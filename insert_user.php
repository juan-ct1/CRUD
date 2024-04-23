<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$age = $_POST['age'];
$ci = $_POST['ci'];
$email = $_POST['email'];

$sql = "INSERT INTO empleados VALUES('$id','$nombre','$apellido','$age','$ci','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
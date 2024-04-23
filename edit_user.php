<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$age = $_POST['age'];
$ci = $_POST['ci'];
$email = $_POST['email'];


$sql="UPDATE empleados SET nombre='$nombre', apellido='$apellido', age='$age', ci='$ci', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
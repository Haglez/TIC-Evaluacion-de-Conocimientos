<?php

include("connection.php");
$con = connect();

$cod_estudiante = $_POST['cod_estudiante'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$auto = $_POST['auto'];
$modelo = $_POST['modelo'];

$sql = "UPDATE registro SET  name='$name',age='$age',phone='$phone',email='$email',auto='$auto',modelo='$modelo' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: home.php");
}

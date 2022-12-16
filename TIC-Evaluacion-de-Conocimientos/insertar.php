<?php
include("connection.php");
$con = connect();

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$auto = $_POST['auto'];
$modelo = $_POST['modelo'];


$sql = "INSERT INTO registro VALUES('$id','$name','$age','$phone','$email','$auto','$modelo')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: home.php");
}

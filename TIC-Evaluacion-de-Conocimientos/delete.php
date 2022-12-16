<?php

include("connection.php");
$con = connect();

$id = $_GET['id'];

$sql = "DELETE FROM registro  WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: home.php");
}

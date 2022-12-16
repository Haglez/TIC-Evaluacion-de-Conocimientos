<?php
include("connection.php");
$con = connect();

$id = $_GET['id'];

$sql = "SELECT * FROM registro WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <input type="text" class="form-control mb-3" name="name" placeholder="Nombre completo" value="<?php echo $row['name']  ?>">
            <input type="text" class="form-control mb-3" name="age" placeholder="Edad" value="<?php echo $row['age']  ?>">
            <input type="text" class="form-control mb-3" name="phone" placeholder="Numero de Teléfono" value="<?php echo $row['phone']  ?>">
            <input type="text" class="form-control mb-3" name="email" placeholder="Correo Electrónico" value="<?php echo $row['email']  ?>">

            <select class="form-select mb-3" aria-label="Default select example" name="auto" value="<?php echo $row['auto']  ?>">
                <option selected>Auto de interés</option>
                <option value=" Honda">Honda</option>
                <option value="KIA">KIA</option>
                <option value="Ford">Ford</option>
                <option value="Nissan">Nissan</option>
            </select>
            <select class="form-select mb-3" aria-label="Default select example" name="modelo" value="<?php echo $row['modelo']  ?>">
                <option selected>Modelo de interés</option>
                <option value=" CRV">CRV</option>
                <option value="HRV">HRV</option>
                <option value="BRV">BRV</option>
                <option value="SOUL">SOUL</option>
                <option value="RIO">RIO</option>
                <option value="SPORTAGE">SPORTAGE</option>
                <option value="MUSTANG">MUSTANG</option>
                <option value="ESCAPE">ESCAPE</option>
                <option value="FIESTA">FIESTA</option>
                <option value="VERSA">VERSA</option>
                <option value="MARCH">MARCH</option>
                <option value="SENTRA">SENTRA</option>
            </select>

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>
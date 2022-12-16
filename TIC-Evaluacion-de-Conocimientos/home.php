<?php
include("connection.php");
$con = connect();

$sql = "SELECT *  FROM registro";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TIC-Evaluacion-de-Conocimientos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Registro</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Nombre completo">
                    <input type="text" class="form-control mb-3" name="age" placeholder="Edad">
                    <input type="text" class="form-control mb-3" name="phone" placeholder="Numero de Teléfono">
                    <input type="email" class="form-control mb-3" name="email" placeholder="Correo Electrónico">
                    <select class="form-select mb-3" aria-label="Default select example" name="auto">
                        <option selected>Auto de interés</option>
                        <option value="Honda">Honda</option>
                        <option value="KIA">KIA</option>
                        <option value="Ford">Ford</option>
                        <option value="Nissan">Nissan</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example" name="modelo">
                        <option selected>Modelo de interés</option>
                        <option value="CRV">CRV</option>
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
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-primary table-striped">
                        <tr>
                            <th>Nombre completo</th>
                            <th>Edad</th>
                            <th>Numero de Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Auto de interés</th>
                            <th>Modelo de interés</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['name'] ?></th>
                                <th><?php echo $row['age'] ?></th>
                                <th><?php echo $row['phone'] ?></th>
                                <th><?php echo $row['email'] ?></th>
                                <th><?php echo $row['auto'] ?></th>
                                <th><?php echo $row['modelo'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
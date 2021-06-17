<?php
$mysqli = new mysqli('localhost', 'root', '', 'dht_log');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item"

        <p><img style="border-radius: 40px;" src="img/termometro.png" alt="logo"/></p>

        </a>
        <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="index.php" class="navbar-item">Gráfica</a>
            <a href="index1.php" class="navbar-item">Reporte</a>


        </div>


    </div>

</nav>
    <h1 class="has-text-centered">Exportar</h1>
    <?php
    $query = "SELECT * FROM dht_log";
    $result = $mysqli->query($query);

    //foreach ($result as $fila) {
      //  echo $fila['date'];

    ?>
    <table class="table">
        <thead class="thead-dark">

    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Fecha</th>
        <th scope="col">Temperatura</th>
        <th scope="col">Humedad</th>
        <th scope="col">Exportar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $fila) {?>
    <tr>
        <td><?php echo $fila['id'];?></td>
        <td><?php echo $fila['date'];?></td>
        <td><?php echo $fila['temperature'];?></td>
        <td><?php echo $fila['humidity'];?></td>
        <td><a href="exportarpdf.php?id=<?php echo $fila['id'];?>">Generar pdf</td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>

<script src="./js/Chart.bundle.min.js"></script>
<script src="./js/vue.min.js"></script>
<script src="./js/script.js"></script>
</body>


</html>
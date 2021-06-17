<?php ob_start();

$mysqli = new mysqli('localhost', 'root', '', 'dht_log');
$id = $_GET['id'];

$query = "SELECT * FROM dht_log WHERE id= $id";
$result = $mysqli->query($query);
?>

<html>
<body>
<table class="table table-bordered">

    <thead>

    <tr>
    <th>Id</th>
    <th>Fecha</th>
    <th>Temperatura</th>
    <th>Humedad</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $fila) { ?>
    <tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['date']; ?></td>
    <td><?php echo $fila['temperature']; ?></td>
    <td><?php echo $fila['humidity']; ?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>

<?php

require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'nombre.pdf';
$dompdf->stream($filename, array("Attachment" => 0));

?>

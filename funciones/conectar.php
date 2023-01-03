<?php


$con= mysqli_connect('localhost', 'esalvatore_pagoclick', 'SistemasCM2021','esalvatore_pagoclick')
    or die('No se pudo conectar: ' );
//echo 'Connected successfully';
mysqli_select_db($con,'esalvatore_pagoclick') or die('No se pudo seleccionar la base de datos');


?>
<?php
$servername = 'localhost:8111';
$username = 'root';
$password = '';
$database = 'crud'; 

// Crear conexión
$enlace = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$enlace) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
    
    // Verificar si se ha enviado el formulario
if(isset($_POST['registro'])){ 
    $Identificacion= $_POST['Identificacion'];
    $Nombres= $_POST['Nombres'];
    $Apellidos= $_POST['Apellidos'];
    $Ingresos= $_POST['Ingresos'];
    $Franquicia= $_POST['Franquicia'];
    $Monto= $_POST['Monto'];
    $Tarjeta= $_POST['Tarjeta'];

    $InsertarDatos = "INSERT INTO usuarios (`Identificacion`, `Nombres`, `Apellidos`, `Ingresos`, `Franquicia`, `Monto`, `Tarjeta`) VALUES ('$Identificacion', '$Nombres', '$Apellidos', '$Ingresos', '$Franquicia', '$Monto', '$Tarjeta')";
   
    $ejecutarInsertar = mysqli_query ($enlace,$InsertarDatos);
    if (!$ejecutarInsertar) {
        die("Error al insertar datos: " . mysqli_error($enlace));
    } else {
        echo "Los datos se insertaron correctamente.";
    }
}}


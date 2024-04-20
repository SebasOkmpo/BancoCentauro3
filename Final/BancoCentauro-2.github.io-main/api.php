<?php

// Establecer encabezados para permitir solicitudes desde cualquier origen (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Validar la logica GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Validar que se puede obtener datos de la base de datos)
    echo json_encode(array("La funcion GET funciona correctamente"));

} else {
    
    http_response_code(405); 
    echo json_encode(array("message" => "Metodo No permitido"));
}

?>

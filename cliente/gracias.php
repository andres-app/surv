<?php
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email_cliente']);
    $encuesta_id = 1;

    foreach ($_POST as $key => $valor) {
        if (strpos($key, 'respuesta_') === 0) {
            $pregunta_id = str_replace('respuesta_', '', $key);
            $respuesta = trim($valor);

            $stmt = $conn->prepare("INSERT INTO respuestas (encuesta_id, pregunta_id, valor, email_cliente) VALUES (?, ?, ?, ?)");
            $stmt->execute([$encuesta_id, $pregunta_id, $respuesta, $email]);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Gracias por participar!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="text-align: center; padding: 50px; font-family: sans-serif;">
    <div style="font-size: 3rem; color: #f1c40f;">★ ★ ★</div>
    <h2>¡Gracias por participar!</h2>
    <p>Tu opinión importa mucho para mejorar nuestra calidad de servicio.</p>
    <a href="encuesta.php"><button style="margin-top: 20px; padding: 10px 30px; background-color: #333; color: white; border: none; border-radius: 8px;">Volver</button></a>
</body>
</html>

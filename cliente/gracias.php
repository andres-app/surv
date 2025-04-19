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
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: #fff;
            text-align: center;
        }

        .header {
            background: url('/surv/assets/img/banner.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 80px 20px 40px;
        }

        .header h1 {
            font-size: 56px;
            margin: 0;
            font-weight: bold;
            text-shadow: 2px 2px 3px #000;
        }

        .header p {
            font-size: 28px;
            font-style: italic;
            margin: 10px 0;
            text-shadow: 1px 1px 2px #000;
        }

        .linea-azul {
            height: 12px;
            background-color: #00aaff;
            width: 100%;
        }

        .btn-encuesta {
            margin-top: -32px;
            background: #00aaff;
            color: white;
            font-weight: bold;
            font-size: 28px;
            padding: 20px 60px;
            border: none;
            border-radius: 14px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .estrellas {
            font-size: 80px;
            color: #333;
            margin: 60px 0 30px;
        }

        .mensaje {
            font-size: 32px;
            font-style: italic;
            margin-bottom: 20px;
            color: #333;
        }

        .detalle {
            font-size: 22px;
            color: #444;
            margin-bottom: 50px;
        }

        .btn-volver {
            background: #333;
            color: white;
            border: none;
            padding: 18px 50px;
            font-size: 20px;
            border-radius: 12px;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .header h1 {
                font-size: 36px;
            }

            .header p {
                font-size: 20px;
            }

            .btn-encuesta {
                font-size: 20px;
                padding: 14px 40px;
            }

            .estrellas {
                font-size: 60px;
            }

            .mensaje {
                font-size: 24px;
            }

            .detalle {
                font-size: 18px;
            }

            .btn-volver {
                font-size: 16px;
                padding: 14px 30px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>BAS FOOD</h1>
        <p>Comer es Amar</p>
    </div>

    <div class="linea-azul"></div>

    <div style="margin-top: 30px;">
        <div class="btn-encuesta">¡EXCELENTE!</div>
    </div>

    <div class="estrellas">★ ★ ★</div>

    <div class="mensaje">¡Gracias por participar!</div>
    <div class="detalle">Tu opinión importa mucho para mejorar nuestra calidad de servicio</div>

    <a href="encuesta.php"><button class="btn-volver">Volver a inicio</button></a>
</body>

</html>

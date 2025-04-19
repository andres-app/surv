<?php
require_once '../includes/db.php';

$encuesta_id = 1;
$stmt = $conn->prepare("SELECT * FROM preguntas WHERE encuesta_id = ?");
$stmt->execute([$encuesta_id]);
$preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta - BAS FOOD</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      width: 100%;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #fff;
    }

    .header {
      background: url('/surv/assets/img/banner.png') no-repeat center center;
      background-size: cover;
      background-position: center;
      color: white;
      min-height: 310px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      padding: 40px 20px 40px;
    }




    .header-content {
      text-align: center;
    }

    .header h1 {
      font-size: 48px;
      margin: 0;
      font-weight: bold;
      text-shadow: 2px 2px 3px #000;
    }

    .header p {
      font-size: 24px;
      font-style: italic;
      margin: 10px 0 20px;
      text-shadow: 1px 1px 2px #000;
    }

    .btn-title {
      background: #00aaff;
      color: white;
      font-weight: bold;
      border: none;
      padding: 14px 30px;
      border-radius: 10px;
      font-size: 20px;
      margin-top: 15px;
      cursor: default;
    }

    form {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    .bloque-pregunta {
      margin: 40px 0;
    }

    .titulo-pregunta {
      background: #333;
      color: white;
      padding: 14px;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
      border-radius: 6px;
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
    }

    .opciones {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 25px;
      padding: 10px;
    }

    .opcion {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100px;
    }

    .opcion input[type="radio"] {
      display: none;
    }

    .opcion label img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      border-radius: 10px;
      background-color: white;
      padding: 6px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.2s;
    }

    .opcion label img:hover {
      transform: scale(1.15);
    }

    .opcion span {
      margin-top: 8px;
      font-size: 16px;
      font-weight: bold;
      background: #eee;
      color: #333;
      padding: 6px 12px;
      border-radius: 8px;
    }

    .email-box {
      margin-top: 50px;
    }

    input[type="email"] {
      width: 85%;
      padding: 16px;
      border: none;
      border-radius: 8px;
      background: #333;
      color: white;
      font-size: 18px;
      text-align: center; /* ✅ centra el texto dentro del input */
    }

    button[type="submit"] {
      margin-top: 25px;
      background: #00aaff;
      color: white;
      border: none;
      padding: 16px 40px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
    }

    .linea-azul {
      height: 10px;
      background-color: #00aaff;
      width: 100%;
    }

    .boton-terminamos {
      text-align: center;
      background-color: #fff;
    }

    .opcion img {
      filter: none;
      opacity: 1;
      transition: filter 0.3s, opacity 0.3s;
    }

    .opcion.gris img {
      filter: grayscale(100%);
      opacity: 0.5;
    }

    .pantalla-inicial {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100dvh;
      /* usa 100dvh para altura visible real */
      z-index: 9999;
      overflow: hidden;
    }

    .banner-fondo {
      width: 100%;
      height: 100%;
      background: url('/surv/assets/img/banner_inicial.png') no-repeat center center;
      background-size: cover;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: center;
      padding-bottom: 40px;
    }

    #btn-empezar {
      background: #00aaff;
      color: white;
      border: none;
      padding: 20px 60px;
      font-size: 24px;
      font-weight: bold;
      border-radius: 14px;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      transition: transform 0.2s ease;
    }

    #btn-empezar:hover {
      transform: scale(1.05);
    }


    @media (max-width: 600px) {
      .opciones {
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
      }

      .opcion {
        width: 90px;
      }

      .opcion label img {
        width: 80px;
        height: 80px;
      }

      .opcion span {
        font-size: 14px;
      }

      input[type="email"],
      button[type="submit"] {
        width: 90%;
        font-size: 16px;
      }

      .btn-title {
        width: 90%;
        max-width: 300px;
        font-size: 16px;
      }

      .header h1 {
        font-size: 32px;
      }

      .header p {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <div id="intro" class="pantalla-inicial">
    <div class="banner-fondo">
      <button id="btn-empezar">¡EMPEZAR!</button>
    </div>
  </div>

  <div id="encuesta-wrapper" style="display: none;">

    <div class="header">
      <div class="header-content">
        <h1>BAS FOOD</h1>
        <p>Comer es Amar</p>
      </div>
    </div>

    <div class="linea-azul"></div>

    <div class="boton-terminamos">
      <button class="btn-title">¡EMPECEMOS!</button>
    </div>


    <form action="gracias.php" method="POST">
      <?php foreach ($preguntas as $pregunta): ?>
        <div class="bloque-pregunta">
          <div class="titulo-pregunta"><?= htmlspecialchars($pregunta['pregunta']) ?></div>
          <div class="opciones">
            <?php
            $respuestas = [
              ['muy_bueno.png', 'Muy Bueno', 'muy-bueno'],
              ['bueno.png', 'Bueno', 'bueno'],
              ['regular.png', 'Regular', 'regular'],
              ['malo.png', 'Malo', 'malo'],
              ['muy_malo.png', 'Muy Malo', 'muy-malo']
            ];
            foreach ($respuestas as [$emoji, $text, $class]):
            ?>
              <div class="opcion <?= $class ?>">
                <input type="radio" id="q<?= $pregunta['id'] ?>_<?= $text ?>" name="respuesta_<?= $pregunta['id'] ?>" value="<?= $text ?>" required>
                <label for="q<?= $pregunta['id'] ?>_<?= $text ?>">
                  <img src="/surv/assets/img/<?= htmlspecialchars($emoji) ?>" alt="<?= htmlspecialchars($text) ?>">
                </label>
                <span><?= $text ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="email-box">
        <input type="email" name="email_cliente" placeholder="Ingrese su e-mail" required>
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>

  <script>
    document.querySelectorAll('.bloque-pregunta').forEach(pregunta => {
      const radios = pregunta.querySelectorAll('input[type="radio"]');
      radios.forEach(radio => {
        radio.addEventListener('change', () => {
          // Al cambiar, primero quitar clase "gris" a todas
          pregunta.querySelectorAll('.opcion').forEach(opcion => {
            opcion.classList.add('gris');
          });

          // Luego quitarle la clase gris solo a la seleccionada
          const seleccionado = radio.closest('.opcion');
          if (seleccionado) {
            seleccionado.classList.remove('gris');
          }
        });
      });
    });

    document.getElementById('btn-empezar').addEventListener('click', function () {
  document.getElementById('intro').style.display = 'none';
  document.getElementById('encuesta-wrapper').style.display = 'block';
});

  </script>

</body>

</html>
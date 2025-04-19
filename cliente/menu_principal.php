<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Menú Principal - BAS FOOD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: #fff;
        }

        .top-bar {
            background: url('/surv/assets/img/wallpaper.png') no-repeat center center;
            background-size: cover;
            height: 40vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .perfil-icono {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: url('/surv/assets/img/perfil_blanco.png') no-repeat center center;
            background-size: cover;
        }

        .logo {
            max-width: 360px;
            width: 100%;
        }

        .linea-azul {
            height: 10px;
            background-color: #00aaff;
            width: 100%;
        }

        .titulo-hoy {
            background: #00aaff;
            color: white;
            font-size: 24px;
            font-style: italic;
            text-align: center;
            padding: 10px 20px;
            margin: 0 auto;
            margin-top: -10px;
            margin-bottom: 40px;
            width: fit-content;
            border-radius: 6px;
            position: relative;
            z-index: 2;
        }

        .menu-opciones {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px 60px; /* más espacio horizontal como en el prototipo */
            padding: 60px 30px;
            max-width: 800px;
            margin: 0 auto;
        }


        .opcion {
            text-align: center;
        }

        .opcion img {
            width: 120px;
            height: 120px;
            margin-bottom: 8px; /* antes tenías 15px */
        }


        .btn-opcion {
            background-color: #333;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 16px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            max-width: 220px;
        }


        @media (max-width: 600px) {
            .logo {
                max-width: 240px;
            }

            .titulo-hoy {
                font-size: 18px;
            }

            .btn-opcion {
                font-size: 18px;
                padding: 14px 24px;
            }

            .opcion img {
                width: 80px;
                height: 80px;
            }

            .menu-opciones {
                grid-template-columns: 1fr;
                padding: 40px 20px;
                gap: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <div class="perfil-icono"></div>
        <img src="/surv/assets/img/bas_food.png" alt="BAS FOOD" class="logo">
    </div>

    <div class="linea-azul"></div>

    <div class="titulo-hoy">¿Qué haremos hoy?</div>

    <div class="menu-opciones">
        <div class="opcion">
            <img src="/surv/assets/img/encuestas.png" alt="Encuestas">
            <button class="btn-opcion">Encuestas</button>
        </div>
        <div class="opcion">
            <img src="/surv/assets/img/sugerencias.png" alt="Sugerencias">
            <button class="btn-opcion">Sugerencias</button>
        </div>
        <div class="opcion">
            <img src="/surv/assets/img/reclamos.png" alt="Reclamos">
            <button class="btn-opcion">Reclamos</button>
        </div>
        <div class="opcion">
            <img src="/surv/assets/img/premios.png" alt="Premios">
            <button class="btn-opcion">Premios</button>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Seleccionar Sucursal - BAS FOOD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-color: #fff;
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.top-bar {
  background: url('/surv/assets/img/wallpaper.png') no-repeat center center;
  background-size: cover;
  text-align: center;
  position: relative;
  width: 100%;
  height: 40vh; /* 🔵 altura del 40% del viewport */
  display: flex;
  justify-content: center;
  align-items: center;
}


.logo {
  max-width: 500px;
  width: 100%;
  height: auto;
}


.linea-azul {
  height: 10px;
  background-color: #00aaff;
  width: 100%;
}

.contenedor {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 60px 20px;
  width: 100%;
  max-width: 700px;
  text-align: center;
}

h2 {
  font-size: 36px;
  font-style: italic;
  color: #333;
  margin-bottom: 15px;
}

p {
  font-size: 22px;
  color: #555;
  margin-bottom: 40px;
}

form {
  width: 100%;
}

select {
  padding: 16px 20px;
  font-size: 20px;
  border: none;
  border-radius: 8px;
  background-color: #333;
  color: white;
  width: 100%;
  max-width: 400px;
  appearance: none;
  background-image: url('data:image/svg+xml;utf8,<svg fill="white" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
  background-repeat: no-repeat;
  background-position: right 16px center;
  background-size: 20px;
  padding-right: 50px;
  cursor: pointer;
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


@media (max-width: 600px) {
  h2 {
    font-size: 28px;
  }

  p {
    font-size: 18px;
  }

  select {
    font-size: 16px;
  }

  .logo {
    max-width: 220px;
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

  <div class="contenedor">
    <h2>¡Bienvenido!</h2>
    <p>Elegir sucursal para continuar...</p>
    <form action="encuesta.php" method="GET">
      <select name="sucursal" required onchange="this.form.submit()">
        <option value="">Seleccionar una sucursal</option>
        <option value="risso">Risso - Lince - Lima - Perú</option>
        <option value="sanborja">San Borja - Lima - Perú</option>
        <option value="miraflores">Miraflores - Lima - Perú</option>
        <!-- Agrega más opciones si es necesario -->
      </select>
    </form>
  </div>

</body>

</html>

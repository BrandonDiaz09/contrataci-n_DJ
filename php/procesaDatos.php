<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.:: Confirmación ::.</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kqIez27REHgP8aY6PLeiJieJx1sJGt7bOnSeaaC1qUWZh58EJtXWgmJUyvt3mAmP" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../icono/form.png">
  <link rel="stylesheet" type="text/css" href="../styles/styles_form.css">
  <script src="./JavaScript/form.js"></script>
</head>

<body>
  <header class="p-3" style="background-color: rgba(0, 0, 0, 0.7); font-family: var(--bs-body-font-family);">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
      -->
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="./index.html" class="nav-link px-2 text-secondary">Inicio</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Productos</a></li>
          <li><a href="./form.html" class="nav-link px-2 text-white">Contrataciones</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Acerca</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Iniciar sesión</button>
          <button type="button" class="btn btn-warning">Registrarse</button>
        </div>
      </div>
    </div>
  </header>
  <?php
    function generarFolio() {
        $prefijo = "FOL";
        $longitud = 6;
        
        $numeroFolio = mt_rand(0, pow(10, $longitud) - 1);
        
        $folio = $prefijo.str_pad($numeroFolio, $longitud, '0', STR_PAD_LEFT);
        
        return $folio;
    }

    $nombre = $_POST["nombre"];
    $patern = $_POST["paterno"];
    $matern = $_POST["materno"];
    $telefono = $_POST["telefono"];
    $mail = $_POST["correo"];
    $entidad = $_POST["entidad"];
    $alcaldia = $_POST["alcaldia"];
    $nacimiento = $_POST["fechaNacimiento"];
    $rfc = $_POST["rfc"];
    $tipo = $_POST["tipo"];
    $numeroPersonas = $_POST["numPersonas"];
    $fecha = $_POST["fechaEvento"];
    $hora = $_POST["horaEvento"];
    $folio = generarFolio();
    $botonConfirmacion = '<button type="submit">Generar PDF</button>';
    $botonModificar = '<button type="submit" onclick="window.history.back()">Modificar dato</button>';
?>

<style>
   #pdf, #modificar{
        margin: 1%;
        width: 47%;
    }

    h1 {
        font-size: 24px;
        margin-top: 24px;
    }

    .contenedor {
        margin-top:20px;
        max-width: 600px;
        margin: 0 auto;
    }

    .button {
        background-color: #663399;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 20px;
    }

    .button:hover {
        background-color: #4b0082;
    }
</style>

    <div class="contenedor">
        <h1>Bienvenido Sr(a). <?php echo $nombre." ".$patern." ".$matern; ?></h1>
        <p>Por favor, confirme los datos ingresados. Si requieres modificar haz clic en el botón correspondiente:</p>
        <p>Folio generado: <?php echo $folio; ?></p>
        <p>Tus datos son:</p>
        <ul>
            <li>Nombre: <?php echo $nombre; ?></li>
            <li>Apellido Paterno: <?php echo $patern; ?></li>
            <li>Apellido Materno: <?php echo $matern; ?></li>
            <li>Teléfono: <?php echo $telefono; ?></li>
            <li>Correo electrónico: <?php echo $mail; ?></li>
            <li>Entidad Federativa: <?php echo $entidad; ?></li>
            <li>Alcaldía: <?php echo $alcaldia; ?></li>
            <li>Fecha de nacimiento: <?php echo $nacimiento; ?></li>
            <li>Registro Federal de Contribuyente (RFC): <?php echo $rfc; ?></li>
            <li>Tipo de evento: <?php echo $tipo; ?></li>
            <li>Número de asistentes: <?php echo $numeroPersonas; ?></li>
            <li>Fecha en la que se celebrará el evento: <?php echo $fecha; ?></li>
            <li>Hora en la que se celebrará el evento: <?php echo $hora; ?></li>
        </ul>
        <button type="submit" class="btn btn-outline-light" id="pdf" style="font-weight: bold;">Generar PDF</button>
        <button type="submit" class="btn btn-outline-warning" id="modificar" style="font-weight: bold;" onclick="window.history.back()">Modificar datos</button>
    </div>
    <br><br>

<footer>
  <div class="row">
    <div class="col-12">
      <p>&copy; 2023 - Todos los derechos reservados</p>
    </div>
  </div>
</footer>
</body>
</html>

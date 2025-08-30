<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('img/fondillo.jpg');
            background-size: cover;
            background-position: center center; /* Ajustado para mejor responsividad */
            background-repeat: no-repeat;
            background-attachment: fixed; /* Para que el fondo no se mueva al hacer scroll */
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 100;
        }
        .header img {
            width: 150px;
            height: auto;
        }
        .menu-container {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 30px;
            border-radius: 10px;
            max-width: 90%;
            margin-top: 150px; /* Mueve los botones hacia abajo para no chocar con el logo */
        }
        /* Estilos para los botones, usando clases de Bootstrap */
        .menu-button {
            width: 100%; /* Para que los botones ocupen todo el ancho de su columna */
            white-space: normal; /* Permite que el texto se ajuste en varias líneas */
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="img/logo1.png" alt="Logo">
    </div>

    <div class="container menu-container">
        <div class="row g-3 justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="ingenieria_multidisciplinar.php" class="btn btn-primary menu-button">INGENIERÍA MULTIDISCIPLINAR</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="pesaje_en_barcos.php" class="btn btn-primary menu-button">PESAJE EN BARCOS</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="pesaje_industrial.php" class="btn btn-primary menu-button">PESAJE INDUSTRIAL</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="fabricacion_de_maquinaria_especial.php" class="btn btn-primary menu-button">FABRICACION DE MAQUINARIA ESPECIAL</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="investigacion_e_invencion_multidisciplinar.php" class="btn btn-primary menu-button">INVESTIGACION E INVENCION MULTIDISCIPLINAR</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="sector_de_la_pesca.php" class="btn btn-primary menu-button">SECTOR DE LA PESCA</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="puertos.php" class="btn btn-primary menu-button">PUERTOS</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="sector_frigorificos.php" class="btn btn-primary menu-button">SECTOR FRIGORIFICOS</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="sala_de_procesado.php" class="btn btn-primary menu-button">SALA DE PROCESADO</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="sector_conservero.php" class="btn btn-primary menu-button">SECTOR CONSERVERO</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="acuicultura_en_el_mar.php" class="btn btn-primary menu-button">ACUICULTURA EN EL MAR</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="biotecnologia_aplicada_al_sector_medio_ambiente.php" class="btn btn-primary menu-button">BIOTECNOLOGIA APLICADA AL SECTOR MEDIO AMBIENTE</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="biotecnologia_aplicada_al_sector_medico.php" class="btn btn-primary menu-button">BIOTECNOLOGIA APLICADA AL SECTOR MEDICO</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="enegyxul_industrial.php" class="btn btn-primary menu-button">ENEGYXUL INDUSTRIAL</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="formacion.php" class="btn btn-primary menu-button">FORMACION</a>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS (opcional, si necesitas funcionalidades JS de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
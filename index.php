<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a tu CSS personalizado -->
    <link href="styles/index.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img src="img/logo1.png" alt="Logo">
    </div>

    <div class="container menu-container">
        <!-- Botón principal para mostrar/ocultar servicios -->
        <button class="btn btn-primary menu-button" type="button" data-bs-toggle="collapse" data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
            SERVICIOS
        </button>

        <!-- Contenedor colapsable para los demás botones -->
        <div class="collapse" id="servicesCollapse">
            <div class="row g-3 justify-content-center mt-3">
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
    </div>

    <!-- Enlace a Bootstrap JS (opcional, si necesitas funcionalidades JS de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
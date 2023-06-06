<?php
session_start();
if ($_SESSION['sistema'] != "9q274t9q3y4598978AQY4") {
    header("Location: login.php");
}

require_once 'Models/nuevo_no.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Oficios Municipal - Inicio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">

        <?php if (!$_POST) : ?>
            <br>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="oficios_enviados.php">Oficios</a></li>
                    <li class="breadcrumb-item"><a href="oficios_enviados.php">Enviados</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nuevo numero</li>
                </ol>
            </nav>

            <br>

            <h3>Crea un nuevo numero de oficio</h3>
            <br>
            <form class="row g-3" id="miFormulario" action="" method="post">
                <h4>1. Selecciona el o los destinos</h4>
                <?php $dependencias = traedependencias($con); ?>
                <br>
                <div class="form-check mt-5 mb-5">
                    <input class="form-check-input" type="checkbox" id="select-all" onclick="toggleCheckboxes(this)">
                    <label class="form-check-label" for="select-all">
                        Seleccionar todos
                    </label>
                </div>
                <br>
                <?php foreach ($dependencias as $dependencia) : ?>

                    <div class="form-check">
                        <input class="form-check-input" name="destino[]" type="checkbox" value="<?= $dependencia['id_dependencia'] ?>" id="flexCheckDefault<?= $dependencia['id_dependencia'] ?>">
                        <label class="form-check-label" for="flexCheckDefault<?= $dependencia['id_dependencia'] ?>">
                            <?= $dependencia['nombre_dependencia'] ?>
                        </label>
                    </div>
                <?php endforeach ?>

                <div class="col-12" id="contenedorCampos">
                    <label for="otro" class="form-label">Otro</label>
                    <input type="text" class="form-control mb-3" id="otro" name="destino[]" placeholder="Nombre destino">
                </div>
                <div class="col-12 mb-5" id="contenedorCampos">
                    <button type="button" onclick="agregarCampo()" class="btn btn-info">Agregar otro campo</button>
                </div>

                <div class="col-12 mb-5">
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
            </form>
        <?php endif ?>
        <?php if (isset($_POST['destino'])) : ?>
            <?php
            $array = $_POST['destino'];
            
            $array = array_filter($array, function ($value) {
                return $value !== "";
            }); ?>
            <br>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="oficios_enviados.php">Oficios</a></li>
                    <li class="breadcrumb-item"><a href="oficios_enviados.php">Enviados</a></li>
                    <li class="breadcrumb-item"><a href="nuevo_no.php">Nuevo numero</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Revisión</li>
                </ol>
            </nav>
            <br>
            <h4>2. Sube tu oficio para revision</h4>
<br>
            <form action="models/nuevo_no.php" method="post">
                <input type="hidden" name="dependencias" value="">
                <div class="mb-3">
                    <label for="enlace_documento" class="form-label">Enlace documento</label>
                    <input type="text" class="form-control" name="enlace_documento" id="enlace_documento">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <button type="submit" name="nuevo" class="mt-4 btn btn-primary">Solicitar</button>

            </form>
        <?php endif ?>





    </div>
    <script>
        function agregarCampo() {
            var contenedor = document.getElementById("contenedorCampos");
            var nuevoCampo = document.createElement("input");
            nuevoCampo.type = "text";
            nuevoCampo.className = "form-control mb-3";
            nuevoCampo.name = "destino[]";
            nuevoCampo.placeholder = "Nombre destino";
            contenedor.appendChild(nuevoCampo);
        }

        function toggleCheckboxes(checkbox) {
            var checkboxes = document.getElementsByName('destino[]');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = checkbox.checked;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
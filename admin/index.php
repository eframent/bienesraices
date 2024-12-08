<?php

    $resultado = $_GET['resultado'] ?? null;


    require '../includes/funciones.php';
   
    incluyetemplate('header');
?>
<main class="contenedor seccion">

    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($resultado == 1)): ?>

        <p class="alerta exito">Anuncio creado exitosamente</p>
    <?php endif; ?>
    <a href="propiedades/crear.php" class="boton boton-verde">Crear Nueva Propiedad</a>
</main>

<?php
        incluyetemplate('footer');

 ?>
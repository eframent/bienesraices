
<?php
if (!isset($inicio)) {
    $inicio = false;
}
$base_url = '/bienesraices/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ' '; ?>">
        <div class="contenedor contenido-header">

            <div class="barra">
                <a href="/bienesraices/index.php">
                <img src="<?php echo $base_url; ?>build/img/logo.svg" alt="Logo Bienes Raices">
                    
                </a>  
                
                <div class="mobile-menu">
               
                    <img src="<?php echo $base_url; ?>build/img/barras.svg" alt="icono menu reponsive">
                    
                </div>

                <div class="derecha">
                    
                    <img src="<?php echo $base_url; ?>build/img/dark-mode.svg" alt="" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!-- cierre de barra -->

            <?php if($inicio){ ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>

               <?php } ?>
            
        </div>
    </header>
<?php

// Base de datos

    require '../../includes/config/database.php';
   $db = conectarDB();

   //sql para obtener vendedores

   $consulta =  "SELECT * from vendedores";
   $resultado = mysqli_query($db, $consulta);

   //verificacion de errores

   $errores= [];

   $titulo =         '';
   $precio =          '';
   $descripcion =    '';
   $habitaciones =    '';
   $wc =              '';
   $estacionamiento = '';
   $id_vendedor=      '';

// envia el formulario para registrarlo en la base de datos
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //     echo "<pre>";
    //     var_dump($_POST);
    //     echo "</pre>";

        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

    //    exit;
        

        $titulo =          mysqli_real_escape_string($db, $_POST['titulo']);
        $precio =          mysqli_real_escape_string($db,$_POST['precio']);
        $descripcion =     mysqli_real_escape_string($db,$_POST['descripcion']);
        $habitaciones =    mysqli_real_escape_string($db,$_POST['habitaciones']);
        $wc =              mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db,$_POST['estacionamiento']);
        $id_vendedor=      mysqli_real_escape_string($db,$_POST['vendedor']);
        $creado = date('Y/m/d');

        $imagen = $_FILES['imagen'];

        if(!$titulo){ $errores[] = "Debes colocar un titulo";  }
        if(!$precio){ $errores[] = "Debes colocar un precio";  }
        if(strlen($descripcion) < 50){ $errores[] = "Descripcion debe tener mas de 50 caracteres";  }
        if(!$habitaciones){ $errores[] = "Debe colocar al menos una habitacion";  }
        if(!$wc){ $errores[] = "Debe colocar al menos un baño";  }
        if(!$estacionamiento){ $errores[] = "Debes colocar al menos 1 estacionamiento";  }
        if(!$id_vendedor){ $errores[] = "Debes elegir  un vendedor";  }
        if(!$imagen['name']){ $errores[] = "La imagen es obligatoria"; }

        // valida el tamaño (1000kb maximo)
        $medida = 1000 * 1000;

        if($imagen['size'] > $medida){ $errores[] = "Imagen muy grande";}

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        if(empty($errores)){

            /**  SUBIDA DE ARCHIVOS  */
            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if (!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            // genera nombre para la imagen a guardar
            $nombreImagen  =  md5( uniqid(rand(), true)) . ".jpg";

            // subimos la imagen 

            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
             
             // enviar a la base de datos

            $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, id_vendedor)
            VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$id_vendedor');";


            //echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado){
                // redireccionar al completar el registro

                header('Location:../?resultado=1');
            }
        }

       

   }



    require '../../includes/funciones.php';
    incluyetemplate('header');

?>
<main class="contenedor seccion">

    <h1>Crear Propiedad</h1>

    <a href="../" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
    <?php endforeach ?>

    <form action="crear.php" class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" placeholder="Titulo Propiedad" id="titulo" name="titulo" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" placeholder="Precio Propiedad" id="precio" name="precio" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" accept="image/jpeg, image/png" id="imagen" name="imagen" >

            <label for="descripcion">Descripcion:</label>
            <textarea  id="descripcion" name="descripcion" ><?php echo $descripcion; ?></textarea>
        </fieldset>


        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" placeholder="Ej: 3" id="habitaciones" name="habitaciones" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" placeholder="Ej: 3" id="wc" name="wc" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" placeholder="Ej: 3" id="estacionamiento" name="estacionamiento" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="vendedor" >
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado) ): ?>
                    <option <?php echo $id_vendedor === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] ." ". $vendedor['apellido']; ?> </option>

                <?php endwhile; ?>
           
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>


<?php
        incluyetemplate('footer');

 ?>
<?php

    require 'includes/funciones.php';
   
    incluyetemplate('header');
?>
    
    <main class="contenedor seccion ">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen contacto" loading="lazy">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario" action="">
            <fieldset>
                <legend> Información Personal</legend>
               
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" >

                <label for="email">E-mail</label>
                <input type="text" placeholder="Tu Email" id="email" >

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Numero de Telefono" id="telefono" >
           
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <label for="opciones">vende o compra</label>
                <select  id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="">Compra</option>
                    <option value="">Vende</option>
                </select>

                <label for="precio">Precio o Presupuesto</label>
                <input type="number" id="precio" placeholder="Tu Precio o Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <p>Como desea ser contactado:</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label> 
                    <input name="contacto" type="radio" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">Email</label> 
                    <input name="contacto" type="radio" id="contactar-email" value="email">
                </div>

                <p>Si eligio telefono elija fecha y hora</p>

                <label for="fecha" >Fecha:</label>
                <input type="date" id="fecha" >

                <label for="hora" >Time:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

    <?php
        incluyetemplate('footer');

    ?>
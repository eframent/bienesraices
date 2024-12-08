<?php
require 'app.php';

//incluye un archivo definido en la ubicacion establecida por la variable TEMPLATES_URL

function incluyetemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}


//genera ruta relativa de los archivos requeridos 
function base_url($path = '') {
    return '/build/' . ltrim($path, '/');
}
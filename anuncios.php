<?php 
    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2>Casas y Departamentos en Venta</h2>

            <?php 
                $limite = 10;
                include 'includes/templates/anuncios.php';
            ?>
    </main>

<?php 
    incluirTemplate('footer');  
?>
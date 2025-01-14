<?php 
    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <pictore>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen destacada de la propiedad">
        </pictore>
        
        <p class="informacion-meta">Escrito el:<span>05/01/2025</span>por: <span>Admin</span></p>
        
        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iusto alias, commodi amet neque doloribus, sunt reprehenderit accusamus inventore ratione nesciunt doloremque sed veniam fuga possimus atque porro ut expedita?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores repellat cupiditate nulla tempore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore laboriosam esse delectus officia doloribus, saepe mollitia ipsam blanditiis enim officiis deleniti. Repudiandae laudantium ullam architecto voluptates, cum iusto ratione illum?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam amet nisi sint saepe magni iste id, blanditiis incidunt illo accusamus! Animi, soluta! Recusandae architecto corrupti laudantium quos, praesentium ipsam repellat.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');  
?>
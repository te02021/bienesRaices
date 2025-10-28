<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton-verde" href="/admin">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion General</legend>
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" placeholder="Ingresa el titulo de la propiedad"></input>
            </fielset>
        </form>    

    </main>



<?php
    incluirTemplate('footer');
?>
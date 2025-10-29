<?php
    require '../../includes/config/database.php';
    require '../../includes/funciones.php';
    conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton-verde" href="/admin">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ingresa el titulo de la propiedad"></input>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Ingrese el precio de la propiedad"></input>

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png"></input>

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>
                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min=1 max=10></input>

                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="Ej: 2" min=1 max=10></input>

                <label for="estacionamientos">Estacionamientos</label>
                <input type="number" id="estacionamientos" placeholder="Ej: 4" min=1 max=10></input>
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select>
                    <option value="1">Mateo</option>
                    <option value="2">Melody</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton-verde"/>
        </form>    

    </main>



<?php
    incluirTemplate('footer');
?>
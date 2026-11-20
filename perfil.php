<?php include __DIR__ . "/includes/cabecera.php"; ?>

    <h2>Perfil</h2>

    <!--si el usuario ya tiene datos, rellenar el formulario con ellos -->
    
    <?php
    $errores = "";
    $mensaje = "";

    if (isset($_POST["guardar"])) {
        // Recogemos los datos del formulario
        $username = $_POST["username"];
        $password = $_POST["password"];
        $nombre   = $_POST["nombre"];
        $pais     = $_POST["pais"];
        $telefono = $_POST["telefono"];
        $correo   = $_POST["correo"];

        // Comprobamos los campos obligatorios
        if ($username == "") {
            $errores .= "Falta el usuario.<br>";
        }
        if ($password == "") {
            $errores .= "Falta la contraseña.<br>";
        }
        if ($nombre == "") {
            $errores .= "Falta el nombre.<br>";
        }

        // Comprobamos que el télefono tenga 9 cifras. 
        $cifras = 0;
        while (isset($telefono[$cifras])) {
            $cifras++;
        }
        if ($cifras != 9) {
            $errores .= "El teléfono debe tener 9 cifras.<br>";
        }

        // Teléfono: el primer número tiene que ser 6, 7 o 9
        if ($telefono == "" || ($telefono[0] != "6" && $telefono[0] != "7" && $telefono[0] != "9")) {
            $errores .= "El teléfono debe empezar por 6, 7 o 9.<br>";
        }

        // Comprobar que el correo tiene una @
        $arroba = false;
        $i = 0;
        while (isset($correo[$i])) {
            if ($correo[$i] == "@") {
                $arroba = true;
            }
            $i++;
        }
        if ($arroba == false) {
            $errores .= "El correo debe tener una @.<br>";
        }

        // Si no hay errores, los datos son válidos
        if (empty($errores)) {
            $mensaje = "Datos correctos.";

            // Aquí irá código de PHP para guardar los datos en usuarios.json
        }
    }

    // Mostramos los errores o el mensaje
    if ($errores != "") {
        echo "<p>$errores</p>";
    }
    if ($mensaje != "") {
        echo "<p>$mensaje</p>";
    }
    ?>

    <form action="perfil.php" method="post" enctype="multipart/form-data">

        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username">
        <!-- Si el usuario ya existe, el username no se podrá cambiar -->

        <label for="password">Contraseña:</label>
        <input type="text" name="password" id="password">

        <label for="nombre">Nombre completo:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="pais">País:</label>
        <select name="pais" id="pais">
            <option value="España">España</option>
        </select>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono">

        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo">

        <p>Avatar:</p>
        <label><input type="radio" name="avatar" value="default.png" checked> Por defecto</label>

        <label for="avatar_propio">O sube el tuyo:</label>
        <input type="file" name="avatar_propio" id="avatar_propio">

        <button type="submit" name="guardar">Guardar datos</button>
    </form>

<?php include __DIR__ . "/includes/pie.php"; ?>
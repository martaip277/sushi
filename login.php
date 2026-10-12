<?php include __DIR__ . "/includes/cabecera.php"; ?>

    <h2>Iniciar sesión</h2>

    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave">

        <button type="submit">Entrar</button>
    </form>

    <?php
        // Lista de usuarios: cada uno es un array con su username y password
        $usuarios = [
            ["username" => "admin", "password" => "1234"],
            ["username" => "marta", "password" => "abcd"],
            ["username" => "pepe",  "password" => "0000"]
        ];

        if (isset($_POST["usuario"])) {
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];
            $encontrado = false;

            // Revisamos los usuarios uno a uno
            foreach ($usuarios as $u) {
                if ($u["username"] == $usuario && $u["password"] == $clave) {
                    $encontrado = true;
                }
            }

            if ($encontrado) {
                echo "<p>Acceso correcto. Bienvenido, " . htmlspecialchars($usuario) . ".</p>";
            } else {
                echo "<p>Usuario o contraseña incorrectos.</p>";
            }
        }
    ?>

<?php include __DIR__ . "/includes/pie.php"; ?>
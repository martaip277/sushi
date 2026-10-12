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
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
        if (isset($_POST["usuario"])) {
            $usuario = htmlspecialchars($_POST["usuario"]);
            echo "<p>Hola, $usuario</p>";
        }
    ?>

<?php include __DIR__ . "/includes/pie.php"; ?>
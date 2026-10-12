<?php
    $restaurante = "Sushi Zen";
    $anio = 2026;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $restaurante ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1><?= $restaurante ?></h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="perfil.php">Perfil</a>
            <a href="pedido.php">Generar pedido</a>
            <a href="carta.php">Gestión de carta</a>
            <a href="clientes.php">Mejores clientes</a>
        </nav> 
        <form action="index.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
            
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave">
            
            <button type="submit">Entrar</button>
        </form>
    </header>
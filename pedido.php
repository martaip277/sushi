<?php include __DIR__ . "/includes/cabecera.php"; ?>

    <h2>Generar pedido</h2>

    <form action="pedido.php" method="post">
        <!-- Aquí irá código de PHP-->
        <h3>Nigiri</h3>
        

        <h3>Maki</h3>
       

        <h3>Temaki</h3>
      

        <h3>Sashimi</h3>
        

        <h3>Otros platos</h3>
       

        <h3>Bebidas</h3>
        

        <button type="submit" name="accion" value="comprobar">Comprobar ofertas</button>
        <button type="submit" name="accion" value="finalizar">Finalizar pedido</button>
    </form>

<?php include __DIR__ . "/includes/pie.php"; ?>
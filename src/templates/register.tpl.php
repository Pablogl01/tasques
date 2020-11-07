<?php
    include 'src/templates/header.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $username; ?></h1>

    </main>
    <div class="container">
  <h2>Registro:</h2>
                                        
  <form action="?url=regaction" method="post">
    <p>Nombre: <?php echo $_COOKIE["nombre"] ?></p>
    <p>Contraseña: <input type="password" name="password"></p>
    <p>Repetir contraseña: <input type="password" name="password2"></p>
    <p>Email: <input type="text" name="email"></p>
    <br>
    <button type="submit" value="Enviar" >Ejecutar</button>
  </form>
</div>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
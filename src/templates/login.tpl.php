<?php
    include 'src/templates/header.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $username; ?></h1>

    </main>
    <div class="container">
  <h2>Login:</h2>
                                        
  <form action="?url=logaction" method="post">
    <p>Nombre: <input type="text" name="nombre"></p>
    <p>Contraseña: <input type="password" name="password"></p>
    <br>
    <p><input type="checkbox" name="reg" >Registrarme</p>
    <button type="submit" value="Enviar" >Ejecutar</button>
  </form>
</div>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
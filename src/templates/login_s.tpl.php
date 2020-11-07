<?php
    include 'src/templates/header.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $username; ?></h1>

    </main>
    <div class="container">
  <h2>Login correcto:</h2>
                                        
  <form action="?url=task" method="post">
    <button type="submit" value="Enviar">Abrir listas</button>
  </form>
</div>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
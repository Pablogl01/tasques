<?php
    include 'src/templates/header.tpl.php';
    include APP.'/controllers/schema.php';
    include APP.'/config.php'
    ?>
    <main><h1 class="text-success">Usuario <?= $username; ?></h1>

    </main>
    <div class="container">
        <h2>El contenido de la lista seleccionada es:</h2>                              
        <?php
            $db=connectMysql($dsn, $dbuser, $dbpass);
            echo verItems($db,$_SESSION['idIt']);
        ?><br><br><br>

        <h3>Añadir Item</h3>

        <form action="?url=insertItems" method="post">
            <p>Nombre: <input type="text" name="itemName"></p>
            <button type="submit" value="crear" >Añadir item</button>
        </form>
    </div>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
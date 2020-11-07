<?php
    include 'src/templates/header.tpl.php';
    include APP.'/controllers/schema.php';
    include APP.'/config.php'
    ?>
    <main><h1 class="text-success">Usuario <?= $username; ?></h1>

    </main>
    <div class="container">
        <h2>Aqui puedes ver tus listas:</h2>                              
        <?php
            $db=connectMysql($dsn, $dbuser, $dbpass);
            echo selectLista($db,$_SESSION['id']);
        ?><br><br><br>

        <h3>Añadir lista</h3>

        <form action="?url=createlist" method="post">
            <p>Nombre: <input type="text" name="tableName"></p>
            <p>Fecha limite: <input type="date" name="list-start"></p>
            <button type="submit" value="crear" >Crear lista</button>
        </form>
    </div>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
<body>
    <header>
        <h1><a href="?url=home">Home</h1>
    </header>   
    <button><?php   
                if(isset($_SESSION['u/////////////////////////////////////////////////////////////name'])){
                    echo '<a href="?url=logout">Logout</a></button>';
                }
                else{
                    echo '<a href="?url=login">Login</a></button>';
                }
        ?>
        <button><a href="?url=register">Register</a></button>

    </nav>
</body>
</html>
<?php $username = $_SESSION['uname']; ?>
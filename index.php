<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>
    <header>

    <?php

        if(isset($_SESSION["login"])){
            echo "OI";
            echo $_SESSION["login"];
        } else{
            // header("Location: login.php");
            // exit;
            echo "Sai";
        }
    ?>
        <nav>
            <img src="imagens/facebook-icon.png" alt="logo">
        </nav>
    </header>
</body>
</html>
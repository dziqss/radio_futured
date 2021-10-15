<?php
include '../funkcje/obsluga.php';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" Strona radia internetowego">
    <meta name="author" content="Sławomir Radzikowski | Medius.pro">
    <meta name="keywords" content=" pozdrowienia">
    <title>RRRRRAAAADIO INTERNETOWE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="container">

        <header>
            <img src="../img/radiologo.png" alt="analog radio - logo" />
        </header>

        <nav>
            <a class="menu" href="../index.php">RADIO</a>
            <a class="menu" href="../podstrony/ramowka.php">RAMÓWKA</a>
            <a class="menu actual" href="#">POZDRO :-)</a>
            <a class="menu" href="../podstrony/kontakt.php">KONTAKT</a>
            <a class="menu" href="../podstrony/prezenter.php">PANEL PREZENTERA</a>

        </nav>

        <section>
            <article>
                <h1>Twoja muzyka w jednym miejscu</h1>
                <p>WPISZ POZDROWIENIA</p>

            </article>


            <!--zapis pozdrowien do pliku-->

            <center>
                <form action="../funkcje/obsluga.php" method="post" target="_top">
                    NICK: <br>
                    <input type="text" name="nick" /><br>
                    Pozdrowienia:<br>
                    <textarea type="text" name="pozdrowienia" maxlength="40" cols="25" rows="12" placeholder="tylko 40 znaków"></textarea><br>
                    <input type="submit" value="Wyślij pozdro !" />
                </form>

                <?php

dodaj();

?>
            </center>


        </section>


        <footer>
            <center>Radio internetowe</center>

        </footer>
    </div>

</body>

</html>

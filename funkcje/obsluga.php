
<?php

function dodaj()
{
    (string) $nick = isset($_POST['nick']);
    (string) $pozdro = isset($_POST['pozdrowienia']);
    $data = date("Y-m-d");
    $czas = date("H:i");

    if (empty($nick || $pozdro)) {
        return "błąd pozdrowień, wpisz nick i treść";
    }

    $wczesniejsze_pozdro = file_get_contents('../pozdro/pozdr.txt', $data . " " . $czas);

    $aktualne_pozdr = $wczesniejsze_pozdro . $nick . " " . $data . " " . $czas . PHP_EOL . $pozdro . PHP_EOL;

    return file_put_contents('../pozdro/pozdr.txt', $aktualne_pozdr) . '<center><h1>Dodano pozdrowienia</h1></center>';

}

function czysc()
{

    $nazwaPliku = '../pozdro/pozdr.txt';
    $chwytak = fopen($nazwaPliku, 'w');
    fclose($chwytak);

    echo 'Pozdrowienia wyczyszczone!';

}

function odczytaj()
{

    $nazwaPliku = '../pozdro/pozdr.txt';
    $rozmiar = filesize($nazwaPliku);

    if ($rozmiar == 0) {
        echo 'Brak nowych pozdrowień';
        echo '<form action="../funkcje/odczytaj.php" method="post" target="_top">
        <button>Sprawdź nowe !</button>
    </form>';

    } else {
        $plik = fopen($nazwaPliku, 'r');
        $dane = fread($plik, filesize($nazwaPliku));
        fclose($plik);

        echo '<center><h3><font color="green">' . (nl2br($dane)) . '</font></h3></center>';

        echo '<form action="../funkcje/czysc.php" method="post"><button>WYCZYŚĆ POZDROWIENIA</button>
        </form>' . '<form action="../funkcje/odczytaj.php" method="post" target="_top">
        <button>Sprawdź nowe !</button></form>';
    }
}

?>

<!--
<br>
<html>
<head>
<title>obsługa</title></head>
<body>
<center><a href="../podstrony/pozdro.php">
<button>Wróc do pozdrowień</button></a></center>

</body>
</html>

-->


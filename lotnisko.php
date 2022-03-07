<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="baner">
        <div id="first">
            <img src="zad5.png" alt="logo lotnisko">
        </div>
        <div id="Second">
            <h1>Przyloty</h1>
        </div>
        <div id="first">
            <h3>Przydatne linki</h3>
            <a href="kwerendy.txt">Pobierz...</a>
        </div>
    </div>
    <div id="general">
        <table>
            <tr>
                <th>Czas</th>
                <th>Kierunek</th>
                <th>Numer rejsu</th>
                <th>Status</th>
            <tr>
            <tr>
                <?php
                require_once("script1.php");
                ?>
            </tr>
        </table>
    </div>
    <div>
        <div id="stop1">
            <?php
            require_once("script2.php");
            ?>
        </div>
        <div id="stop2">
            Autor: 00000000000
        </div>
    </div>
</body>

</html>
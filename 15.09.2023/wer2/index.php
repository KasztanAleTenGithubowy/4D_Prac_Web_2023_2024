<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'sklep');

    mysqli_close($conn)
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </div>

    <div id="lewy">
        <h2>Taniej o 30%</h2>
        <ol>
            <li>
                płasz
            </li><!--skrypt-->
        </ol>
    </div>

    <div id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form action="" method="post">
            <select name="towary" id="">
                <option value="gumka">Gumka do mazania</option>
                <option value="cienkopis">Cienkopis</option>
                <option value="pisaki60">Pisaki 60 szt.</option>
                <option value="markery4">Markery 4 szt.</option>
            </select>  
            <input type="submit">

            <label for="scripy2">scriptus spiritus</label>
        </form>
    </div>

    <div id="prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>

    <footer>
        <h4>Autor strony: PESEL</h4>
    </footer>
</body>
</html>
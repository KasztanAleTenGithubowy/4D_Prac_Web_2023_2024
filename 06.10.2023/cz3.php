<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj liczbę: <input type="text" name="liczba">
        <input type="submit" value="sprawdź">
    </form>

    <?php 
    if (is_numeric($liczba)){
        if ($liczba >= 100 && $liczba < 150) {
            echo "Podana liczba znajduje sie w zakresie";
        } else {
            echo "Podana liczba nie znajduje sie w zakresie";
        }
    } else {
        echo "podana dana nie jest liczbą";
    }
    ?>
    </body>
</html>
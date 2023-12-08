<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj liczbę: <input type="text" name = "liczba">
        <input type="submit" value="sprawdź">
    </form>

    <?php 
        $liczba = $_POST["liczba"];
        if (is_numeric($liczba)) {
            if ($liczba % 2 == 0) {
                echo "Liczba jest parzysta.";
            } else {
                echo "liczba jest nieparzysta.";
            }

        } else {
            echo "to nie jest liczba";
        }
    ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj liczbę: <input type="number" name="liczba">
        <input type="submit" value="Sprawdź">
    </form>

    <?php 
        $liczba = $_POST["liczba"];
        if ($liczba < 0) {
            echo "Podana liczba jest mniejsza od 0";
        } 
        elseif ($liczba == 0)
        {
            echo "Podana liczba jest równa 0";
        }
        else
        {
            echo "Podana liczba jest wieksza od 0";
        } 
    ?>
    </body>
</html>
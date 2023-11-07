<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj pierwsza liczbe: <input type="number" name="liczba1">
        Podaj druga liczbe: <input type="number" name="liczba2">
        Podaj trzecia liczbe: <input type="number" name="liczba3">

        <input type="submit" value="Sprawdź">
    </form>

    <?php 
        $rok = $_POST["liczba1"];
        $rok = $_POST["liczba2"];
        $rok = $_POST["liczba3"];

        $liczbanajmniejsza = min($liczba1, $liczba2, $liczba3);
        echo "najmniejsza liczba to: $liczbanajmniejsza";
    ?>
    </body>
</html>
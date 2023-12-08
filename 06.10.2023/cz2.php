<!DOCTYPE html>
<html>
    <body>
    <form method="post">
         Pierwsza liczba: <input type="text" name="liczba1">
         Druga liczba: <input type="text" name="liczba2">
         <input type="submit" value="Sprawdź">
    </form>

    <?php 
       if (is_numeric($liczba1) && is_numeric($liczba2)) {
        if ($liczba2 != 0) {
            if ($liczba1 % $liczba2 == 0) {
                echo "Pierwsza liczba jest podzielna przez drugą aby nie została reszta";
            } else {
                echo "Pierwsza liczba jest podzielna przez drugą aby nie została reszta";
            }
        }
       }
    ?>
    </body>
</html>
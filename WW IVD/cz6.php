<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj rok: <input type="number" name="rok">
        <input type="submit" value="Sprawdź">
    </form>

    <?php 
        $rok = $_POST["rok"];
        if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
            echo "Rok jest przestepny";
        } 
        else
        {
            echo "Rok nie jest przestępny";
        }
    ?>
    </body>
</html>
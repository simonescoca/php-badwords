<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
    Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
    Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
    stampare a schermo il paragrafo e la sua lunghezza
    stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $paragrafo = $_POST["paragrafo"];
            $parolaDaCensurare = $_POST["censura"];
        ?>

        <p class="paragrafo">
            paragrafo:
            <?php
                echo $paragrafo;
            ?>
            ; lunghezza paragrafo: 
            <?php
                echo strlen($paragrafo);
            ?>
        </p>
        <p>
            censura:
            <?php
                echo $parolaDaCensurare;
            ?>
        </p>

        <p>
            risultato:
            <?php
                $paragrafoCensurato = str_replace(
                    $parolaDaCensurare,
                    "***",
                    $paragrafo,
                );

                echo $paragrafoCensurato;
            ?>

            ; lunghezza paragrafo censurato: 
            <?php
                echo strlen($paragrafoCensurato);
            ?>
        </p>
    </body>
</html>
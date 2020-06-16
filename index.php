<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Primo Esercizio PHP</h1>
            <p>

                <?php

                // Si tratta di un censuratore rudimentale:
                // predisponete una variabile contenente un breve testo,
                // poi tramite le funzioni sulle stringhe di php censurate una "badword" che *viene passata in GET con *** (3 simboli di asterico).
                // Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso.
                //creo la variabile testo
                $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                // echo $testo;


                //recupero la badword dal parametro GET (ho scelto la parola 'ut')
                $parola_da_censurare = $_GET['badword'];

                //creo la variabile della censura
                $censura = '***';

                //è una variabile che non fa return, ma è usata come riferimento. La funzione modifica questa variabile inizializzata a 0.
                $numero_sostituzioni = 0;

                // controllo che nella stringa ci sia la badword
                $risultato = str_replace($parola_da_censurare, $censura, $testo, $numero_sostituzioni);
                echo $risultato;

                ?>

            </p>
            <p>
                <strong>
                    Questo paragrafo è lungo:
                    <?php
                    //stampo la lunghezza del testo
                    $lunghezza = strlen($testo);
                    echo $lunghezza;
                    ?>
                    caratteri.
                </strong>
            </p>
            <p>
                Ho sostituito la parola
                    <?php
                    echo $parola_da_censurare;
                    ?>
                    <?php
                    echo $numero_sostituzioni;
                    ?>
                volte.

            </p>
        </div>
    </body>
</html>

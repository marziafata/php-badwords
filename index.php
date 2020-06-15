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

                // controllo che nella stringa ci sia la badword
                $risultato = str_replace($parola_da_censurare, $censura, $testo);
                echo $risultato;

                ?>

            </p>
            <!-- <p>

                //<?php
                    // $testo2 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                    //
                    // $testo_esploso = explode(' ', $testo2);
                    //
                    // for ($i=0; $i < $testo_esploso ; $i++) {
                    //     $parola_corrente = $testo_esploso[$i];
                    //     echo $parola corrente;
                    // }

                // ?>
            </p> -->
        </div>
    </body>
</html>

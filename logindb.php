<?php
    /*
    $host = 'localhost';
    $port = '5432';
    $db = 'lezione_14';
    $username = 'www';
    $password = 'tsw2023';
    //$stringa = " host=localhost port=5432...."

    $connection_string = "host=$host port=$port dbname=$db user=$username password=$password";
    //echo $connection_string;

    //Se questa funzione va a buon fine creo connessione tra script e database
    //nel caso non funziona interrompi l'esecuzione e stampa il messaggio
    $db = pg_connect($connection_string) or die('Impossibile connettersi al database'.pg_last_error());
    echo "Connessione al database riuscita<br>";
    */
    
    $host = 'localhost';
    $port = '5432';
    $db = 'gruppo21';
    $username = 'www';
    $password = 'tw2024';
    //$stringa = " host=localhost port=5432...."

    $connection_string = "host=$host port=$port dbname=$db user=$username password=$password";
    //echo $connection_string;

    //Se questa funzione va a buon fine creo connessione tra script e database
    //nel caso non funziona interrompi l'esecuzione e stampa il messaggio
    $db = pg_connect($connection_string) or die('Impossibile connettersi al database'.pg_last_error());
    //echo "Connessione al database riuscita<br>";
?>


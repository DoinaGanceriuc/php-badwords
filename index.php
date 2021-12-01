<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php

// variabili
$speech = "Dunque, miei concittadini americani, non chiedete cosa il vostro paese può fare per voi, chiedete cosa potete fare voi per il vostro paese. Concittadini del mondo, non chiedete cosa l'America può fare per voi, ma cosa possiamo fare, insieme, per la libertà dell'uomo.";

/* trasform speech to lower case */
$lowerSpeech = strtolower($speech);

$lengthSpeech = strlen($speech);

// var_dump($_GET);
$censuredWord = $_GET["censuredWord"];
/* trasform censured word to lower case */
$lowerCensuredWord = strtolower($censuredWord);
// echo $censuredWord;

$newWord = "***";
$replacedWord = str_replace($lowerCensuredWord, $newWord, $lowerSpeech);
$lengthReplacedSpeech = strlen($replacedWord);
// echo $replacedWord;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <div>
        <h2>Paragrafo originale</h2>
         <p> <?php echo $speech;?> </p>
        <span> La lunghezza del paragrafo è: <?php echo $lengthSpeech; ?> </span>
    </div>
    <div style="padding-top:2rem;">
        
        <form method="get">
       <span>Digita una parola del testo da nascondere</span> <input type="text" name="censuredWord">
        <input type="submit" value="invia">
   </form>
    </div>
    <div>
        <h2>Paragrafo con parole censurate</h2>
         <p> <?php echo $replacedWord;?> </p>
        <span> La lunghezza del paragrafo è: <?php echo $lengthReplacedSpeech; ?> </span>
    </div>
</body>
</html>
<?php
//Frase principale
$fraseScelta='Non rimandare a domani quello che può essere fatto dopo domani altrettanto bene';
//Caratteri per censurare
$censura='***';
//Parola scelta dall'utente
$parolaCen= $_GET['parola'];
//Frase censurata
$parCensurata=str_replace($parolaCen,$censura,$fraseScelta);
?>
<!-- Stampa delle frasi e delle loro lunghezze -->
<!-- Frase non censurata -->
<h1> <?php echo $fraseScelta?></h1>
<p>La lunghezza della stringa è di <?php echo strlen($fraseScelta)?> carattere/i</p>
<!-- Frase censurata -->
<h1><?php echo $parCensurata?></h1>
<p>La lunghezza della stringa censurata è di <?php echo strlen($parCensurata)?> carattere/i</p>
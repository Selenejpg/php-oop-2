<!-- 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->

<!-- Integrare l'esercizio precedente con trait ed eccezioni -->

<?php

require __DIR__ . '/classes/Prodotto.php';
require __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/traits/Sconto.php';

//istanziamo classe prodotto
$gioco = new Prodotto ('nomeProdotto', 'descrizioneProdotto', 25);

echo $gioco -> getName() . '<br>';
echo $gioco -> getDescription() . '<br>';
echo $gioco -> getPrice() . '<br>';

//istanziamo classe toys
$palla = new Toys ('palla', 'palla per cani', 25, 10);

var_dump($palla);

echo $palla -> setChangeColor($palla -> name);

var_dump($palla);

//Try and catch
//trovi errori e li salvi sempre in tabella errori php. Richiami funzione da ontrollare e controlli se ci sono errori in quella funzione restituendoti un errore quando le condizioni non sono verificate

try {
    setChangeColor($palla -> name);
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

//trait richiamo funzione sconto
echo $palla -> getSconto($palla -> colore);
?>
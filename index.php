<?php

require __DIR__ . '/classes/Prodotto.php';

//istanziamo il prodotto
$pippo = new Prodotto ('Pippo');
echo $pippo -> getName();

?>
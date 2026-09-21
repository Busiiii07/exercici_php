<?php
// Declaramos una constante IVA (no cambia de valor)
const IVA = 0.21;

$producte = 'Teclat';
$base = 79.90;
$estoc = 4;

// función predefinida para redondear 2 decimales round
$total = round($base * (1 + IVA), 2);

// Dades personals
$nom = 'Marc';
$cognom = 'Busquets';
$direccio = 'Plini el vell 30';
?>

<h2><?php echo $producte ?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p>Disponibilitat: <?= $estoc ?></p>

<h2>Dades Personals</h2>

<p>Nom: <?= $nom; ?></p>
<p>Cognom: <?= $cognom; ?></p>
<p>Direccio: <?=  $direccio ?></p>

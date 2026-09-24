<?php
/**********************************************************
 *  Aquest fitxer te 6 errors: 3 de sintaxis (PHP no arrenca)
 *  i 3 de logica (funciona, pero el resultat
 *  no es el correcte).
 * 
 *  Arregla'ls d'un en un, comprovant la pagina despres 
 *  cada canvi.
 *  Anota a error-trobats.md quin era, com te n'has adonat
 *  i com l'has resolt.
 ***********************************************************/

//nom= 'Aina';    falta la $ --> Error de sintaxis
$nom= 'Aina';
//$assignatura = 'Desenvolupament web'  "Falta punt i coma --> Error de sintaxis
$assignatura = 'Desenvolupament web';


$nota1 = 7;
$nota2 = 9;
//$mitjana = $nota1 + $nota2 / 2; --> Error de tancament de calcul
$mitjana = ($nota1 + $nota2) / 2;

echo '<h1>Bulleti de notes</h1>';
//echo '<p>Alumna: $nom</p>'; --> Esta malamen concatenat perque falta la ' . $nom . ' 
echo '<p>Alumna: ' . $nom . '</p>';
//echo '<p>Assignatura: ' + $assignatura + '</p>'; --> Per concatenar es amb . no +
echo '<p>Assignatura: ' . $assignatura . '</p>';

// echo "<p>Mitjana: $mitjana</p>; --> Error de sintaxis "
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' .date('d/m/Y') . '</p>';
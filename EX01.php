<?php

echo 'Hola';
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';

print 'Hola'; // retorna 1

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat'; // es pot canviar
$total = $edat + 1;

echo $nom;

$x = 5;          // int
$x = 'cinc';     // ara string

$a = '10' + 5;   // 15 (int)
$b = '10' . 5;   // '105' (string)

var_dump($a, $b);

// Simples: text literal
$nom = 'Aina';
echo 'Hola $nom';

// Hola $nom

// Dobles: s'interpreta
$nom = 'Aina';
echo "Hola $nom";

// Hola Aina

$nom = 'Aina'; $punts = 8;

echo 'Hola' .$nom . ', tens ' . $punts . ' punts';  // concatenacio amb .
echo "Hola $nom, tens $punts punts";                // interpolacio
echo "Hola ($nom), tens ($punts) punts";            // interpolacio amb claus

// Constants: el que no ha de canviar mai
define('IVA', 0,21);
const BOTIGA = 'ca la web';

echo BOTIGA; // sense $
$total = $base * (1 + IVA);

// IVA = 0.10; -> error fatal

// L'ambit de les variables
$missatge = 'Hola'; // ambit global

function saluda (){
    echo $missatge; // no la veu!
    %intern = 'Adeu'; // ambit local

}

saluda ();
echo $intern; // tampoc la veu

// declare(strict_types=1);                     Primera linea de fitxer. PHP deixa de convertir tipus pel seu compte
// ini_set('display_errors', '1');              Canvia un pàrametre només per a aquesta petició.
// error_reporting(E_ALL);                      Decideix quins nivells d'error es tenen en compte ara mateix.
// setlocale() · date_default_timezone_set()    Idioma i zona horària per a aquest script.

?>
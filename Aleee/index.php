<?php

const NOM_JOC = 'Llegendes dAstralia';
const VIDA_MAXIMA = 120;
const EXPERIENCIA_NIVELL = 1000;
const FORCA_MAXIMA = 80;

$nom = 'Kael';
$classe = 'Guerrer';
$nivell = 7;
$vidaActual = 32;
$forcaActual = 65;
$experiencia = 720;
$atacBase = 18;

$percentatgeVida = round(($vidaActual / VIDA_MAXIMA) * 100, 1);
$percentatgeForca = round(($forcaActual / FORCA_MAXIMA) * 100, 1);
$experienciaFalta = EXPERIENCIA_NIVELL - $experiencia;
$poderAtac = $atacBase + ($nivell * 3);
$estat = 'Ferit';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Fitxa de personatge</title>
</head>

<body>

<h1>Fitxa de <?= $nom ?></h1>
<p>Joc: <?= NOM_JOC ?></p>

<div class="dades">

    <p><strong>Classe:</strong> <?= $classe ?></p>

    <p><strong>Nivell:</strong> <?= $nivell ?></p>

    <p><strong>Experiència:</strong> <?= $experiencia ?> / <?= EXPERIENCIA_NIVELL ?></p>

    <p><strong>Experiència que falta:</strong> <?= $experienciaFalta ?></p>

    <p><strong>Atac base:</strong> <?= $atacBase ?></p>

    <p><strong>Poder d'atac:</strong> <?= $poderAtac ?></p>

    <p><strong>Vida:</strong> <?= $vidaActual ?> / <?= VIDA_MAXIMA ?> (<?= $percentatgeVida ?>%)</p>

    <div class="barra">
        <span class="vida" style="width: <?= $percentatgeVida ?>%"></span>
    </div>

    <p><strong>Força:</strong> <?= $forcaActual ?> / <?= FORCA_MAXIMA ?> (<?= $percentatgeForca ?>%)</p>

    <div class="barra">
        <span class="forca" style="width: <?= $percentatgeForca ?>%"></span>
    </div>

    <p><strong>Estat:</strong> <span class="estat"><?= $estat ?></span></p>

</div>

</body>
</html>

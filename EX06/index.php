
<?php
/*
$preu = 99.00;
const IVA = 0.21;

$total = round($preu * (1+IVA), 2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda online</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tienda online GUAY</h1>
    <p>Esto es una tienda online guay</p>
  </header>
  <main>
    <article>
      <p class="descripcion">Camiseta chupi chupi guay</p>
      <p class="preu">Preu sense IVA: <?= $preu;?>.00</p>
      <p class="preu">IVA (21%): MUCHO</p>
      <p class="total">TOTAL: <?= $total;?> EUR</p>
      <p class="estoc">Unitats disponibles: 5</p>
      <p class="ref">CAM-1425376</p>
    </article>
  </main>

  <footer>
      <p>footer de la chienda cupi guat S.L</p>
  </footer>
</body>
</html>
*/

// Dades de la botiga
$descripcio = "Camiseta chupi chupi guay";
$preu = 99.00;
$estoc = 5;
$referencia = "CAM-1425376";

// Constants
const IVA = 0.21;
const BOTIGA = "Tienda online GUAY";
const MONEDA = "EUR";
const DESCOMPTE_SOCI = 0.10;

// Càlcul de l'IVA i del total
$importIVA = round($preu * IVA, 2);
$total = round($preu + $importIVA, 2);

?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= BOTIGA ?></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <h1><?= BOTIGA ?></h1>
    <p>Esto es una tienda online guay</p>
  </header>

  <main>
    <article>
      <p class="descripcion">
        <?= $descripcio ?>
      </p>

      <p class="preu">
        Preu sense IVA: <?= number_format($preu, 2, ',', '.') ?> <?= MONEDA ?>
      </p>

      <p class="preu">
        IVA (<?= IVA * 100 ?>%):
        <?= number_format($importIVA, 2, ',', '.') ?> <?= MONEDA ?>
      </p>

      <p class="total">
        TOTAL: <?= number_format($total, 2, ',', '.') ?> <?= MONEDA ?>
      </p>

      <p class="estoc">
        Unitats disponibles: <?= $estoc ?>
      </p>

      <p class="ref">
        <?= $referencia ?>
      </p>
    </article>
  </main>

  <footer>
    <p><?= BOTIGA ?> S.L</p>
  </footer>

</body>
</html>



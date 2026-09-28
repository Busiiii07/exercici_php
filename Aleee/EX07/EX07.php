<?php
$nota = 7.5;

if ($nota >= 9){
    $qualif = 'Excel·lent';
} elseif ($nota >= 7){
    $qualif = 'Notable';
} elseif ($nota >= 5){
    $qualif = 'Aprovat';
} else {
    $qualif = 'Suspès';
}
?>

// Amb claus: es perd el fil
<?php if ($estoc > 0){ ?>
    <p>En estoc</p>
<?php } else { ?>
    <p>Esgotat</p> 
<?php } ?>

// Amb dos punts: es llegeix sol
<?php if ($estoc > 0): ?>
    <p>En estoc</p>
<?php else: ?>
    <p>Esgotat</p>
<?php endif; ?>

// if (...): endif,             foreach (...): ... endforeach;
// for (...): ... endfor        while (...): ... endwhile;


// switch - clàssic

switch ($zona) {
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}

// match - PHP 8
$enviament = match ($zona){
    'local' => 0,
    'peninsula' => 4.95,
    default => 9.95,
};

// for
for ($i = 1; $i <= 10; $i++){
    echo $i;
}

// while
while ($saldo < $objectiu){
    $saldo *= 1.03;
    $anys++;
}

// do
do {
    $n = rand(1, 6);
} while ($n !== 6);

<table>
    <?php for($i = 1; $i <= 10; $i++): ?>
<tr>
    <td><?= $i ?> x 7</td>
    <td><?= $i * 7 ?></td>
</tr>
<?php endfor; ?>
</table>


// Arrays indexats

$color = ['vermell', 'verd', 'blau'];

echo $colors[0];    //vermell
echo count($colors); //3

$colors[] = 'groc'; //afegeix al final

print_r($colors);

// Arrays associatius

$producte = [
        'nom' => 'Teclat mecanic',
        'preu' => 79.90,
        'estoc' => 4,
];

echo $producte['nom'];
$producte['preu'] = 69.90;

//foreach: recórrer un array
foreach ($colors as $color){
    echo "<li>$color</li>";
}

foreach ($producte as $clau => $valor){
    echo "<dt>$clau</dt>";
    echo "<dd>$valor</dd>";
}

//un cataleg: arrays dins d'arrays
<?php
$productes = [
        ['nom' => 'Teclat', 'preu' => 79.9],
        ['nom' => 'Ratoli', 'preu' => 24.5],
        ['nom' => 'Monitor', 'preu' => 189],
];
?>
<table>

<?php foreach ($productes as $p) : ?>
    <tr>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['preu'] ?>EUR</td>
    </tr>
</table>
<?php endforeach; ?>

// Funcions d'arreays que t'estalvien bucles

Funcions                                    Fa
count($a)                                   Quants elements té

in_array($x, $a, true)                      Si un valor hi és(el true fa la comparació estricta)

array_key_exists('k', $a)                   Si una clau existeix

sort / rsort / ksort                        Ordena per valor o per clau

array_sum / max / min                       Suma, màxim i mínim

array_column ($a, 'preu')                   Treu una columna d'un array d'arrays

implode (',', $a) / explode                 Array a text i text a array
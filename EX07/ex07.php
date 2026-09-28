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
<?php 
} ?>

// Amb dos punts: es llegeix sol
<?php if ($estoc > 0): ?>
    <p>En estoc</p>
<?php else: ?>
    <p>Esgotat</p>
<?php endif; ?>

// if (...): endif,             foreach (...): ... endforeach;
// for (...): ... endfor        while (...): ... endwhile;


// swhitch - clàssic

switch ($zona) {
    case 'local':
        $enviament = 0;
        beak;
    case 'peninsula':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}

// march - PHP 8
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

// do{
    $n = rand(1, 6);
} while ($n !==6);

<table>
    <?php for($i = 1; $i <= 10; $i++): ?>
<tr>
    <td><?= $i ?> x 7</td>
    <td><?= $i * 7 ?></td>
</tr>
<?php endfor; ?>
</table>




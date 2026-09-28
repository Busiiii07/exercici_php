/*Crear array asociativo con:
    - nombre
    - curso
    -edat
    -nota_media

    10 alumnos

    Mostrar Tabla en html
*/

<table>

    <tr>
        <th>Nom</th>
        <th>Curs</th>
        <th>Edat</th>
        <th>Nota mitjana</th>
    </tr>

<?php

$alumnes = [
    [
        'nombre' => 'Marc',
        'curso' => '3r ESO',
        'edat' => 14,
        'nota_media' => 7.5
    ],
    [
        'nombre' => 'Ariel',
        'curso' => '4r ESO',
        'edat' => 16,
        'nota_media' => 8
    ],
    [
        'nombre' => 'Gerard',
        'curso' => '1r ESO',
        'edat' => 12,
        'nota_media' => 7
    ],
    [
        'nombre' => 'Marta',
        'curso' => '1r ESO',
        'edat' => 13,
        'nota_media' => 5
    ],
    [
        'nombre' => 'Messi',
        'curso' => '3r ESO',
        'edat' => 15,
        'nota_media' => 9
    ],
    [
        'nombre' => 'Mireia',
        'curso' => '4r ESO',
        'edat' => 16,
        'nota_media' => 5
    ],
    [
        'nombre' => 'Marti',
        'curso' => '1r ESO',
        'edat' => 12,
        'nota_media' => 7
    ],
    [
        'nombre' => 'Moha',
        'curso' => '2r ESO',
        'edat' => 13,
        'nota_media' => 2
    ],
    [
        'nombre' => 'Luis',
        'curso' => '2r ESO',
        'edat' => 13,
        'nota_media' => 4
    ],
    [
        'nombre' => 'Marcos',
        'curso' => '1r ESO',
        'edat' => 11,
        'nota_media' => 1
    ]
];

foreach ($alumnes as $alumne):
?>

    <tr>
        <td><b><?= $alumne['nombre'] ?></b></td>
        <td><b><?= $alumne['curso'] ?></b></td>
        <td><b><?= $alumne['edat'] ?></b></td>
        <td><b><?= $alumne['nota_media'] ?></b></td>
    </tr>

<?php endforeach; ?>

</table>

<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

$arrayPartite = [
    [
        'squadraCasa' => 'milan',
        'squadraOspite' => 'Inter',
        'puntiFatti' => 100,
        'puntiSubiti' => 70,


    ],
    [
        'squadraCasa' => 'cantu',
        'squadraOspite' => 'bari',
        'puntiFatti' => 120,
        'puntiSubiti' => 60,


    ],
];

for ($i = 0; $i < count($arrayPartite); $i++) {
    echo $arrayPartite[$i]['squadraCasa'] . 'vs' . $arrayPartite[$i]['squadraOspite'] . '|' . $arrayPartite[$i]['puntiFatti'];
}
?>
<?php
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


$arrChiavi = array_keys($db);



//     for ($k = 0; $k < count($db[$arrChiavi[$i]]); $k++) {
//         echo ('<div class= "verde">');
//         echo $db[$arrChiavi[$i]][$k]['name'];
//         echo ('</div>');
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php for ($i = 0; $i < count($arrChiavi); $i++) { ?>

    <?php if ($arrChiavi[$i] == 'teachers') { ?>

    <div class="verde">

        <?php for ($k = 0; $k < count($db[$arrChiavi[$i]]); $k++) {

                echo $db[$arrChiavi[$i]][$k]['name'];


            } ?>

    </div>

    <?php } ?>

    <?php } ?>

</body>

</html>
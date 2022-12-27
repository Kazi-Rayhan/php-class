<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$colors = [
    'Red' => "#ff2d00",
    'Green' => "#09ff00",
    'Blue' => "#004dff",
    'Yellow' => "#f4ff00",
    'Black' => "#000000",

];

$colorsBangla = [
    'lal' => "#ff2d00",
    'sobuj' => "#09ff00",
    'nil' => "#004dff",
    'holud' => "#f4ff00",
    'kalo' => "#000000"
];

$phonebook = [
    'Rayhan' => [
        '01795560431',
        '01711115465',
    ],
    'Khalid' => [
        '01706014104',
        '01873388493'
    ],
    'Mahfuz' => [
        '01302854516'
    ],
    'Emran' => [
        '01400126698'
    ],
    'Safayet' => [
        '01746719318',
        '01746719318',
    ]
];



?>

<body>
    <ul>
        <?php

        foreach ($phonebook as $name => $numbers) {
            echo "<li>";
            echo $name;
            echo "<ul>";
            foreach ($numbers as $number) {
                echo "<li>";
                echo $number;
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        }

        ?>
    </ul>


</body>

</html>
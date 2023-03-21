<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessGame</title>
    <style>
        table,
        caption,
        th,
        td {

            border: 3px solid black;
            border-collapse: collapse;
            margin: auto;

        }

        caption,
        th,
        td {

            width: 75px;
            height: 75px;

        }
    </style>
</head>

<body>


    <?php

    // Créer un tableau vide de 8x8
    $tableau = array();
    for ($lign = 8; $lign >= 1; $lign--) {
        $tableau[$lign] = array();
        for ($col = 1; $col <= 8; $col++) {
            $tableau[$lign][$col] = "$lign+$col";
        }
    }

    // Afficher le tableau
    echo '<table>';
    for ($lign = 8; $lign >= 1; $lign--) {
        echo '<tr>';
        for ($col = 1; $col <= 8; $col++) {
            $somme = $lign + $col;
            $rest = $somme % 2;
            $compteur = "";
            if ($rest == 0) {
                echo "<td style=\"background-color:black\">$lign$col</td>";
            } else {
                echo "<td style=\"background-color:white\">$lign$col</td>";
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>

</body>

</html>
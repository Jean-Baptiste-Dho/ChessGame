<?php
require_once 'classes/PieceEchec.php';
require_once 'classes/King.php';
require_once 'classes/Queen.php';
require_once 'classes/Bishop.php';
require_once 'classes/Knight.php';
require_once 'classes/Rook.php';
require_once 'classes/Pawn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessGame</title>
    <style>
        .container {
            display: flex;
            justify-content: space-evenly;
        }

        table,
        caption,
        th,
        td {

            border: 3px solid black;
            border-collapse: collapse;
            text-align: center;
            margin: auto;
            color: darkblue;
        }

        caption,
        th,
        td,
        tr {

            width: 70px;
            height: 70px;

        }
    </style>
</head>

<body>

    <div class="container">

        <form action="chess.php" method="get">
            <label for="piece">Selectionner votre pièce :</label>
            <select name="piece">
                <option value="wKing">White king</option>
                <option value="bKing">Black king</option>
                <option value="wQueen">White queen</option>
                <option value="bQueen">Black queen</option>
                <option value="wKnight1">White knight</option>
                <option value="bKnight1">Black knight</option>
                <option value="wBishop1">White bishop</option>
                <option value="bBishop1">Black bishop</option>
                <option value="wRook1">White Rook</option>
                <option value="bRook1">Black Rook</option>
                <option value="wPawn4">White pawn</option>
                <option value="bPawn4">Black pawn</option>
            </select>
            <p>teleport en X <br><input type="text" name="Xwarp" /></p>
            <p>teleport en Y <br><input type="text" name="Ywarp" /></p>
            <p>Déplacement X <br>Déplacer la pièce à droite (+1), à gauche (-1): <input type="text" name="positionX" /></p>
            <p>Déplacement Y <br>Déplacer la pièce vers le haut (+1), vers le bas (-1): <input type="text" name="positionY" /></p>
            <p><input type="submit" value="Valider"></p>
        </form>
        <div>

            <?php



            $pawnPositions = array(
                $bKing = new King(5, 8, 2, "./assets/bking.png"),
                $wKing = new King(5, 1, 1, "./assets/wking.png"),
                $bQueen = new Queen(4, 8, 2, "./assets/bQueen.png"),
                $wQueen = new Queen(4, 1, 1, "./assets/wQueen.png"),
                $bBishop1 = new Bishop(3, 8, 2, "./assets/bBishop.png"),
                $bBishop2 = new Bishop(6, 8, 2, "./assets/bBishop.png"),
                $wBishop1 = new Bishop(3, 1, 1, "./assets/wBishop.png"),
                $wBishop2 = new Bishop(6, 1, 1, "./assets/wBishop.png"),
                $bKnight1 = new Knight(2, 8, 2, "./assets/bKnight.png"),
                $bKnight2 = new Knight(7, 8, 2, "./assets/bKnight.png"),
                $wKnight1 = new Knight(2, 1, 1, "./assets/wKnight.png"),
                $wKnight2 = new Knight(7, 1, 1, "./assets/wKnight.png"),
                $bRook1 = new Rook(1, 8, 2, "./assets/bRook.png"),
                $bRook2 = new Rook(8, 8, 2, "./assets/bRook.png"),
                $wRook1 = new Rook(1, 1, 1, "./assets/wRook.png"),
                $wRook2 = new Rook(8, 1, 1, "./assets/wRook.png"),
                $bPawn1 = new Pawn(1, 7, 2, "./assets/bPawn.png"),
                $bPawn2 = new Pawn(2, 7, 2, "./assets/bPawn.png"),
                $bPawn3 = new Pawn(3, 7, 2, "./assets/bPawn.png"),
                $bPawn4 = new Pawn(4, 7, 2, "./assets/bPawn.png"),
                $bPawn5 = new Pawn(5, 7, 2, "./assets/bPawn.png"),
                $bPawn6 = new Pawn(6, 7, 2, "./assets/bPawn.png"),
                $bPawn7 = new Pawn(7, 7, 2, "./assets/bPawn.png"),
                $bPawn8 = new Pawn(8, 7, 2, "./assets/bPawn.png"),
                $wPawn1 = new Pawn(1, 2, 1, "./assets/wPawn.png"),
                $wPawn2 = new Pawn(2, 2, 1, "./assets/wPawn.png"),
                $wPawn3 = new Pawn(3, 2, 1, "./assets/wPawn.png"),
                $wPawn4 = new Pawn(4, 2, 1, "./assets/wPawn.png"),
                $wPawn5 = new Pawn(5, 2, 1, "./assets/wPawn.png"),
                $wPawn6 = new Pawn(6, 2, 1, "./assets/wPawn.png"),
                $wPawn7 = new Pawn(7, 2, 1, "./assets/wPawn.png"),
                $wPawn8 = new Pawn(8, 2, 1, "./assets/wPawn.png"),

            );

            /* Test mouvement roi */
            $bKing->setPosition(5, 5);
            $bKing->canGo(1, 1);
            $bKing->canGo(1, 0);
            $bKing->canGo(1, -1);
            $bKing->canGo(0, 1);
            $bKing->canGo(0, -1);
            $bKing->canGo(-1, 0);
            $bKing->canGo(-1, -1);
            $bKing->canGo(-1, 1);
            // $bKing->canGo(2, 1);

            $bBishop1->setPosition(5, 5);
            $bBishop1->canGo(3, 3);
            $bBishop1->canGo(-4, -4);
            $bBishop1->canGo(-1, 1);
            //$bBishop1->canGo(-1, 5);



            //$bBishop1->canGo(-1, 5);
            $bKnight1->canGo(2, -1);
            $bKnight1->canGo(2, 1);
            $bKnight1->canGo(-2, 1);
            $bKnight1->canGo(-2, 1);
            $bKnight1->canGo(-2, -1);
            //$bKnight1->canGo(-5, -5);

            $wRook1->canGo(0, 4);
            $wRook1->canGo(1, 0);
            // $wRook1->canGo(-2, 2);
            $wRook1->canGo(-1, 0);
            $wRook1->canGo(3, 0);

            //$wKing->setPosition(5, 1);
            //$bQueen->setPosition(4, 5);

            // $wKing->canGo(0, 1);
            // $wKing->canGo(0, 1);
            // $wKing->canGo(0, 1);
            // $wKing->canGo(0, 1);
            // $wKing->canGo(0, 1);

            // $wPawn4->setPosition(4, 6);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);



            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);
            // $wPawn4->canGo(0, 1);


            // if (isset($_GET['piece']) && isset($_GET['Xwarp']) && isset($_GET['Ywarp'])) {
            //     $pieceName = $_GET['piece'];
            //     $X = intval($_GET['Xwarp']);
            //     $Y = intval($_GET['Ywarp']);

            //     // Utilisation du nom de la variable pour sélectionner l'objet à mettre à jour
            //     if (isset($$pieceName)) {
            //         $$pieceName->setPosition($X, $Y);
            //     }
            // } else
            // if (isset($_GET['piece']) && isset($_GET['positionX']) && isset($_GET['positionY'])) {
            //     $pieceName = $_GET['piece'];
            //     $X = intval($_GET['positionX']);
            //     $Y = intval($_GET['positionY']);

            //     // Utilisation du nom de la variable pour sélectionner l'objet à mettre à jour
            //     if (isset($$pieceName)) {
            //         $$pieceName->canGo($X, $Y);
            //     }
            // }




            // Afficher le plateau
            echo '<table>';
            for ($lign = 8; $lign >= 0; $lign--) {
                echo '<tr>';
                for ($col = 0; $col <= 8; $col++) {
                    $somme = $lign + $col;
                    $rest = $somme % 2;



                    // Trouver la pièce correspondant à cette case
                    $pawnPosition = null;
                    foreach ($pawnPositions as $position) {
                        if ($position->getPositionY() == $lign && $position->getpositionX() == $col) {
                            $pawnPosition = $position;
                            break;
                        }
                    }



                    // Afficher la case avec la pièce correspondante si elle existe
                    if ($lign == 0 && $col == 0) {
                        echo "<td style=\"background-color:white\">0</td>";
                    } else if ($col == 0) {
                        echo "<td style=\"background-color:white\">Y$lign</td>";
                    } else if ($lign == 0) {
                        echo "<td style=\"background-color:white\">X$col</td>";
                    } else {
                        if ($pawnPosition && $rest == 0) {
                            echo "<td style=\"background-color:#6C3827\"><img src=\"{$pawnPosition->getImage()}\" style=\"height:65px \"></td>";
                        } else if ($pawnPosition) {
                            echo "<td style=\"background-color:#D0B178\"><img src=\"{$pawnPosition->getImage()}\" style=\"height:65px\"></td>";
                        } else if ($rest == 0) {
                            echo "<td style=\"background-color:#6C3827\"></td>";
                        } else {
                            echo "<td style=\"background-color:#D0B178\"></td>";
                        };
                    }
                }

                echo '</tr>';
            }
            echo '</table>';

            ?>
        </div>
    </div>
</body>

</html>
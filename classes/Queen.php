<?php


/**
 *
 * défini la class Roi (hérite de PieceEchec)
 *
 */

class Queen extends PieceEchec
{

    private $path;

    public function __construct(int $coordX, int $coordY, int $couleur, string $chemin)
    {
        parent::__construct($coordX, $coordY, $couleur);
        $this->path = $chemin;
    }

    public function getImage()
    {
        return $this->path;
    }

    public function canGo($X, $Y)
    {
        if ((abs($X) !== 1 &&  abs($Y) !== 2) || (abs($X) !== 2 &&  abs($Y) !== 1)) {
            return parent::setPosition($X, $Y);
        } else {
            echo ("Vous ne pouvez pas aller à cette position");
        }
    }
}

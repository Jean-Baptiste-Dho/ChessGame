<?php


/**
 *
 * défini la class Roi (hérite de PieceEchec)
 *
 */

class King extends PieceEchec
{
    /**
     * chemin de l'image
     *
     * @var string
     */
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
        parent::horsPlateau($X, $Y);

        if ((abs($X) === 1 || $X === 0) && (abs($Y) === 1 || $Y === 0)) {
            return parent::setPosition($this->coordX + $X, $this->coordY + $Y);
        } else {
            echo ("Vous ne pouvez pas aller à cette position");
        }
    }
}

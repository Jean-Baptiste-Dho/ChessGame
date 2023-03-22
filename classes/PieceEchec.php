<?php


/**
 *
 * classe pièce du jeu d'échec. défini la position et la couleur de la pièce
 *
 */

/*abstract permet de ne plus instancier la class PieceEchec sauf par héritage*/
abstract class PieceEchec
{
    /**
     * Coordonnée X
     *
     * @var int
     */
    protected $coordX;

    /**
     * Coordonnée Y
     *
     * @var int
     */
    protected $coordY;

    /**
     * Couleur de la pièce (1= blanc, 2= noir)
     *
     * @var int
     */
    protected $couleur;




    /**
     * initialisation de la couleur et de la position de la pièce
     *
     * @param int $coordX de la pièce
     * @param int $coordY de la pièce
     * @param int $couleur de la pièce
     */
    public function __construct($coordX, $coordY, $couleur)
    {
        $this->coordX = $coordX;
        $this->coordY = $coordY;
        $this->couleur = $couleur;
    }

    public function horsPlateau($X, $Y)
    {
        if (($this->coordX + $X > 8 || $this->coordX + $X < 1) || ($this->coordY + $Y > 8 || $this->coordY + $Y < 1)) {
            $this->setPosition($this->coordX, $this->coordY);
            echo "Vous allez hors du plateau !";
        }
    }

    public function getpositionX()
    {
        return $this->coordX;
    }

    public function getPositionY()
    {
        return $this->coordY;
    }

    public function setPosition(int $X, int $Y)
    {
        $this->coordX = $X;
        $this->coordY = $Y;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function isAvailable($X, $Y)
    {
    }

    public function getCouleurCase(): int
    {
        if (($this->coordX + $this->coordY) % 2 == 0) {
            return 1;
        } else {
            return 2;
        };
    }
}

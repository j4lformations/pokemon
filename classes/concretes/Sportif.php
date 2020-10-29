<?php

/**
 * Class Sportif
 * @author Joachim Zadi
 */
class Sportif extends PokemonTerrestre
{
    /**
     * @var float
     */
    private $freqCardiaque;

    public function __construct(string $nom, float $poids, int $nbPatte, float $taille, float $freqCardiaque)
    {
        parent::__construct($nom, $poids, $nbPatte, $taille);
        $this->freqCardiaque = $freqCardiaque;
    }

    public function getFreqCardiaque(): float
    {
        return $this->freqCardiaque;
    }

    public function __toString(): string
    {
        $affichage = "<br>Ma frequence cardiaque est $this->freqCardiaque pulsation/min";
        return "<h4>" . parent::__toString() . $affichage . "</h4>";
    }
}
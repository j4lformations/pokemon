<?php

/**
 * Class PokemonTerrestre
 * @author Joachim Zadi
 */
abstract class PokemonTerrestre extends Pokemon
{
    private $nbPatte;
    private $taille;

    protected function __construct(string $nom, float $poids, int $nbPatte, float $taille)
    {
        parent::__construct($nom, $poids);
        $this->nbPatte = $nbPatte;
        $this->taille = $taille;
    }

    public function getNbPatte(): int
    {
        return $this->nbPatte;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): void
    {
        $this->taille = $taille;
    }

    public function getVitesse(): float
    {
        return 3 * $this->nbPatte * $this->taille;
    }

    public function __toString():string
    {
        $affichage = "<br>J'ai $this->nbPatte pattes" . "<br>Ma taille est $this->taille m";
        return parent::__toString() . $affichage;
    }
}
<?php

/**
 * Class Mer
 * @author Joachim Zadi
 */
class Mer extends PokemonMarin
{
    public function __construct(int $nbNageoire, string $nom, float $poids)
    {
        parent::__construct($nom, $poids, $nbNageoire);
    }

    public function getVitesse(): float
    {
        return $this->getPoids() / 25.0 * $this->getNbNageoire();
    }
}
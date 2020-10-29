<?php

/**
 * Class Croisiere
 * @author Joachim Zadi
 */
class Croisiere extends PokemonMarin
{
    public function __construct(int $nbNageoire, string $nom, float $poids)
    {
        parent::__construct($nom, $poids, $nbNageoire);
    }

    public function getVitesse(): float
    {
        return ($this->getPoids() / 25.0 * $this->getNbNageoire()) / 2.0;
    }
}
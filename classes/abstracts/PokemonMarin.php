<?php

/**
 * Class PokemonMarin
 * @author Joachim Zadi
 */
abstract class PokemonMarin extends Pokemon
{
    private $nbNageoire;

    protected function __construct(string $nom, float $poids, int $nbNageoire)
    {
        parent::__construct($nom, $poids);
        $this->nbNageoire = $nbNageoire;
    }

    public function getNbNageoire(): int
    {
        return $this->nbNageoire;
    }

    public function __toString(): string
    {
        $affichage = "<br>J'ai {$this->nbNageoire} nageoires";
        return "<h4>".parent::__toString() . $affichage."</h4>";
    }
}
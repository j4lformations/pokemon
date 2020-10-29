<?php

/**
 * Class Casanier
 * @author Joachim Zadi
 */
class Casanier extends PokemonTerrestre
{
    /**
     * Le nombre d'heures pendant les quelles le pokemon regarde la television
     */
    private $nbHeure;

    public function __construct(int $nbHeure, int $nbPatte, float $taille, string $nom, float $poids)
    {
        parent::__construct($nom, $poids, $nbPatte, $taille);
        $this->nbHeure = $nbHeure;
    }

    public function getNbHeure(): int
    {
        return $this->nbHeure;
    }

    public function setNbHeure(int $nbHeure): void
    {
        $this->nbHeure = $nbHeure;
    }

    public function __toString(): string
    {
        $description = "<br>Je regarde la télé " . $this->nbHeure . "h par jour.<br>";
        return "<h4>".parent::__toString() . $description."</h4>";
    }
}
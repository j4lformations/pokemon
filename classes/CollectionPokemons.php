<?php

class CollectionPokemons
{
    /**
     * La collection de pokemons
     * @var array
     */
    private $pokemons;

    public function __construct()
    {
        $this->pokemons = array();
    }

    public function getPokemons(): array
    {
        return $this->pokemons;
    }

    /**
     * Permet d'inserer un Pokemon
     * @param Pokemon $pokemon
     */
    public function insertPokemon(Pokemon $pokemon): void
    {
        $this->pokemons[] = $pokemon;
    }

    public function getVitesseMoyenne(): float
    {
        $vitesseMoyenne = 0;
        foreach ($this->getPokemons() as $pokemon) {
            $vitesseMoyenne += $pokemon->getVitesse();
        }
        $vitesseMoyenne /= count($this->pokemons);
        return $vitesseMoyenne;
    }

    public function getVitesseMoyenneSportif(): float
    {
        $vitesseMoyenneSportif = 0;
        $nbPokemonSportif = 0;
        foreach ($this->getPokemons() as $p) {
            if ($p instanceof Sportif) {
                $vitesseMoyenneSportif += $p->getVitesse();
                $nbPokemonSportif++;
            }
        }
        $vitesseMoyenneSportif /= $nbPokemonSportif;
        return $vitesseMoyenneSportif;
    }

    public function __toString(): string
    {
        $affiche = "";
        foreach ($this->pokemons as $pokemon) {
            $affiche .= $pokemon->__toString();
        }
        return $affiche;
    }
}
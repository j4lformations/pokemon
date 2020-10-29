<?php
//ON TEST NOTRE CODE ICI
require_once 'classes/abstracts/Pokemon.php';
require_once 'classes/abstracts/PokemonMarin.php';
require_once 'classes/abstracts/PokemonTerrestre.php';
require_once 'classes/concretes/Mer.php';
require_once 'classes/concretes/Casanier.php';
require_once 'classes/concretes/Croisiere.php';
require_once 'classes/concretes/Sportif.php';
require_once 'classes/CollectionPokemons.php';

$pokemons = new CollectionPokemons();

$sportif_1 = new Sportif('Sportif_1', 5.2, 4, 1.89, 25.5);
$pokemons->insertPokemon($sportif_1);

$sportif_2 = new Sportif('Sportif_2', 6.8, 4, 1.23, 21.5);
$pokemons->insertPokemon($sportif_2);

$casanier = new Casanier(8, 6, 1.56, "Casanier", 10.2);
$pokemons->insertPokemon($casanier);

$croisiere = new Croisiere(9, "Croisiere", 45);
$pokemons->insertPokemon($croisiere);

$mer = new Mer(2, "Mer", 11.5);
$pokemons->insertPokemon($mer);

echo $pokemons;

echo "<h4>Vitesse moyenne = {$pokemons->getVitesseMoyenne()}</h4>";
echo "<h4>Vitesse moyenne Sportif= {$pokemons->getVitesseMoyenneSportif()}</h4>";
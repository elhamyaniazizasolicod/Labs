<?php

declare(strict_types=1);

function calculerTotalIncorrect(float $prixUnitaire, int $quantite): float
{
    return $prixUnitaire + $quantite;
}

function calculerTotal(float $prixUnitaire, int $quantite): float
{
    return $prixUnitaire * $quantite;
}

$prixUnitaire = 15.0;
$quantite = 3;
$totalAttendu = 45.0;
$totalIncorrect = calculerTotalIncorrect($prixUnitaire, $quantite);

echo "=== Diagnostic du calcul ===" . PHP_EOL;
echo "Valeurs reçues :" . PHP_EOL;
var_dump($prixUnitaire, $quantite);

echo "Total obtenu : ";
var_dump($totalIncorrect);
echo "Total attendu : ";
var_dump($totalAttendu);

if ($totalIncorrect !== $totalAttendu) {
    echo "Bug détecté : le prix et la quantité ont été additionnés." . PHP_EOL;
}

$totalCorrige = calculerTotal($prixUnitaire, $quantite);
echo "Après correction (prix × quantité) : ";
var_dump($totalCorrige);

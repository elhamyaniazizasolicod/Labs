# Tutoriel — Déboguer un calcul PHP

## Objectif

Suivre une démarche de débogage sur un exemple autonome : observer les données, comparer le résultat obtenu au résultat attendu, localiser l'erreur puis vérifier la correction.

## Fichier concerné

- `debugage/exemple.php`

Le scénario est simulé pour l'apprentissage. Il ne représente pas un problème réellement rencontré dans un projet.

## Parcours du code

1. `declare(strict_types=1);` active la vérification stricte des types scalaires aux appels de fonctions.
2. `calculerTotalIncorrect()` contient volontairement un bug de logique : elle additionne le prix unitaire et la quantité.
3. Les variables `$prixUnitaire`, `$quantite` et `$totalAttendu` définissent des données de test explicites : 15, 3 et 45.
4. `var_dump()` affiche le type et la valeur des données. Cela permet de vérifier que la fonction reçoit bien un prix de `15.0` et une quantité de `3`.
5. La comparaison entre `$totalIncorrect` et `$totalAttendu` révèle l'écart : le code donne `18.0`, alors que trois articles à `15.0` doivent coûter `45.0`.
6. La cause est dans l'opération `+`. `calculerTotal()` applique la règle attendue en multipliant le prix par la quantité.
7. Le dernier `var_dump()` confirme que la correction donne `45.0`.

## Exécution

Depuis le dossier `lab-debug-php` :

```bash
php debugage/exemple.php
```

Pour contrôler la syntaxe :

```bash
php -l debugage/exemple.php
```

## Résultat attendu

```text
=== Diagnostic du calcul ===
Valeurs reçues :
float(15)
int(3)
Total obtenu : float(18)
Total attendu : float(45)
Bug détecté : le prix et la quantité ont été additionnés.
Après correction (prix × quantité) : float(45)
```

## Démarche à retenir

- Reproduire le problème avec une entrée connue.
- Inspecter les valeurs au point où elles sont utilisées.
- Comparer le résultat à une valeur attendue.
- Corriger la cause plutôt que masquer le symptôme.
- Relancer le même exemple pour vérifier le résultat.

Dans un éditeur, un débogueur tel que Xdebug permet aussi de placer un point d'arrêt, d'exécuter le programme pas à pas et d'inspecter les variables. Cet exemple n'en dépend pas : `var_dump()` et PHP CLI suffisent.

## Lien avec un projet

La même méthode peut aider à examiner un calcul dans une application PHP. Il faut remplacer les données simulées par un cas de test représentatif du projet concerné; aucun calcul métier particulier n'est supposé ici.

## Limite et exercice

L'exemple couvre une erreur de logique simple, pas une erreur de syntaxe, une exception ou un problème d'environnement.

**Exercice :** modifiez le prix et la quantité, puis calculez le résultat attendu avant l'exécution. Ajoutez un cas où la quantité vaut `0` et vérifiez si le comportement correspond à la règle métier souhaitée.

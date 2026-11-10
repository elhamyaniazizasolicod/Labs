# Gestion des erreurs et des exceptions

## Objectif

Détecter un identifiant invalide ou une catégorie absente, puis traiter ces situations sans interrompre le script par une exception non gérée. Le cas représente la recherche d’une catégorie dans un petit catalogue de cours; les données sont simulées et l’exemple est autonome.

## Fichier et exécution

Fichier : `gestion-erreurs/exemple.php`

Depuis le dossier `lab-php` :

```powershell
php gestion-erreurs/exemple.php
```

## Parcours du code

1. `CategoryNotFoundException` spécialise `RuntimeException`. Elle donne un nom précis à une situation métier : l’identifiant est valide, mais aucune catégorie ne lui correspond.
2. `findCategoryById()` reçoit une liste et un identifiant. Le bloc `if` rejette un identifiant inférieur ou égal à zéro en lançant `InvalidArgumentException`.
3. La boucle `foreach` recherche la catégorie correspondante et la retourne dès qu’elle la trouve.
4. Si la boucle se termine sans résultat, `throw` lance `CategoryNotFoundException`. `throw` interrompt le parcours normal et transmet l’exception à l’appelant.
5. Le bloc `try` appelle la fonction avec l’identifiant `8`, absent des données de démonstration.
6. Le `catch` multi-types intercepte les deux situations prévues et affiche leur message. Pour voir le chemin de réussite, remplacer `8` par `1`.

## Résultat attendu

```text
Impossible d’afficher la catégorie : La catégorie 8 n’existe pas.
```

## Lien avec le projet technique

Dans un projet qui affiche des catégories ou des cours, une recherche peut ne renvoyer aucun résultat. Cette démonstration montre comment signaler puis traiter ce cas. Elle utilise des données en mémoire et ne lit pas une base de données; elle n’est pas intégrée au projet technique.

## Limite et exercice

PHP distingue notamment les exceptions, qui représentent des situations que le code peut lancer et intercepter, et les erreurs d’exécution, qui implémentent aussi l’interface `Throwable`. Ici, les entrées invalides et la catégorie absente sont représentées par des exceptions prévues; l’exemple ne remplace ni la journalisation ni un gestionnaire global d’erreurs. Exercice : passer l’identifiant depuis `$argv`, puis tester un identifiant valide, `0` et un identifiant absent.

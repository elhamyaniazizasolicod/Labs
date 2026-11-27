# LSP — Liskov Substitution Principle

## Objectif

Le principe de substitution de Liskov (LSP) exige qu’un objet d’une sous-classe puisse remplacer un objet de sa classe parent sans rendre faux le contrat attendu par le code appelant.

## Fichier et exécution

Fichier : `lsp/exemple.php`

Depuis le dossier `lab-code-solid` :

```powershell
php .\lsp\exemple.php
```

## Parcours de l’exemple

1. `Category::title()` promet de fournir un titre non vide.
2. `FeaturedCategory` est une catégorie particulière. Elle redéfinit `title()` pour ajouter une indication, tout en retournant toujours une chaîne non vide sans demander de précondition supplémentaire.
3. `displayCategoryTitles()` accepte des éléments de type `Category`, vérifie le contrat utile à l’affichage puis affiche le titre.
4. La liste mélange une `Category` et une `FeaturedCategory`. Le même code les traite sans branche spéciale selon la classe concrète.

Une sous-classe qui renverrait un titre vide ou qui exigerait un état spécial pour être affichée casserait le contrat et ne respecterait pas LSP.

## Résultat attendu

```text
PHP
À la une : Laravel
```

## Lien avec le projet technique

La vue du projet technique affiche le nom de chaque catégorie. Une sous-classe peut adapter la représentation d’une catégorie, par exemple pour mettre en avant un contenu, si elle reste utilisable partout où le contrat commun de catégorie est attendu. Les classes de cet exemple sont autonomes.

## Limite ou exercice

L’exemple n’emploie qu’une propriété de catégorie et un contrat de titre. Exercice : ajouter une sous-classe qui ajoute une description sans imposer de comportement incompatible à la fonction d’affichage.

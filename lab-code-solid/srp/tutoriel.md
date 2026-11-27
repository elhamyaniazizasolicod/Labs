# SRP — Single Responsibility Principle

## Objectif

Le principe de responsabilité unique (SRP) recommande qu’une classe ait une responsabilité principale et une raison principale de changer.

## Fichier et exécution

Fichier : `srp/exemple.php`

Depuis le dossier `lab-code-solid` :

```powershell
php .\srp\exemple.php
```

## Parcours de l’exemple

1. `Category` porte uniquement les données d’une catégorie : son nom et sa description. Les propriétés `readonly` empêchent leur modification après construction.
2. `CategoryRepository::all()` est responsable de fournir la liste de démonstration. Dans cet exemple autonome, les données sont en mémoire.
3. `CategoryListFormatter::format()` transforme les objets en lignes de texte. Il ne récupère pas les données.
4. Les deux dernières lignes demandent les données au dépôt, puis délèguent la présentation au formateur.

Chaque classe a ainsi un rôle identifiable. Ajouter une autre façon d’afficher les catégories ne nécessite pas de changer le dépôt.

## Résultat attendu

```text
- PHP: Apprendre les bases du langage PHP.
- Laravel: Créer des applications avec Laravel.
```

## Lien avec le projet technique

La route Laravel `/categories` récupère les données avec `Category::all()` et les transmet à une vue Blade qui affiche nom et description. L’exemple sépare de la même façon l’accès aux données et leur présentation, mais ses classes et ses données sont pédagogiques et ne sont pas intégrées à l’application.

## Limite ou exercice

Le dépôt est codé en dur. Exercice : remplacer les données en mémoire par une source configurable sans ajouter le formatage à la classe de dépôt.

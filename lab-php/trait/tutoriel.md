# Trait

## Objectif

Partager une petite méthode de présentation entre des classes différentes. L’exemple formate les libellés d’une catégorie et d’un cours d’un catalogue pédagogique fictif, en lien avec le type de contenu qu’un projet technique peut afficher.

## Fichier et exécution

Fichier : `trait/exemple.php`

Depuis le dossier `lab-php` :

```powershell
php trait/exemple.php
```

## Parcours du code

1. `trait HasDisplayLabel` déclare `displayLabel()`, une méthode réutilisable qui lit les propriétés `$type` et `$name` de la classe qui l’emploie.
2. `Category` et `Course` utilisent le trait avec `use HasDisplayLabel`. Chacune fournit ses propres propriétés et son constructeur.
3. `$type` donne à la méthode le contexte d’affichage de l’objet : « Catégorie » ou « Cours ».
4. Le code instancie les deux classes et appelle la même méthode. Le formatage est partagé, tandis que le résultat varie selon l’objet.

## Résultat attendu

```text
Catégorie : Développement Web
Cours : Gestion des exceptions
```

## Lien avec le projet technique

Un trait peut convenir à un comportement court et commun à plusieurs classes, comme le formatage de libellés pour des catégories et des cours. Cette démonstration reste isolée et ne prétend pas que ces classes existent déjà dans le projet technique.

## Limite et exercice

Un trait n’est ni une classe à instancier, ni un mécanisme d’héritage; il peut aussi rendre les dépendances d’une classe moins visibles s’il est utilisé abusivement. Exercice : adapter la méthode pour retourner uniquement le nom et faire produire à chaque classe une phrase de présentation différente.

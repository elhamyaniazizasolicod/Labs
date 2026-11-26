# lab-debug-php — Déboguer un programme PHP

Ce lab présente une démarche simple pour repérer, comprendre et corriger un bug PHP. L'exemple est autonome et simulé : il ne décrit pas un incident réellement observé dans un projet.

## Quick Start

Prérequis : PHP en ligne de commande. Le lab a été préparé avec PHP 8.5.10 et n'utilise aucune dépendance externe.

Depuis le dossier `lab-debug-php` :

```bash
php -v
php hello-world.php
php debugage/exemple.php
```

Pour vérifier la syntaxe des exemples :

```bash
php -l hello-world.php
php -l debugage/exemple.php
```

## Contenu

| Notion | Exemple | Tutoriel |
|:--|:--|:--|
| Débogage d'une erreur de logique dans un calcul | [debugage/exemple.php](debugage/exemple.php) | [debugage/tutoriel.md](debugage/tutoriel.md) |

La présentation du lab est disponible dans [presentation.md](presentation.md).

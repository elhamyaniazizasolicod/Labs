# Namespace

## Objectif

Organiser les classes et permettre à deux classes de porter le même nom court sans conflit. Les deux catégories de cet exemple représentent deux espaces d’un catalogue pédagogique; elles sont fictives et autonomes.

## Fichier et exécution

Fichier : `namespace/exemple.php`

Depuis le dossier `lab-php` :

```powershell
php namespace/exemple.php
```

## Parcours du code

1. `namespace App\Domain` place la première classe `Category` dans l’espace de noms `App\Domain`.
2. `namespace App\Admin` déclare une autre classe `Category`, cette fois dans `App\Admin`. Les deux noms courts coexistent car leurs noms complets diffèrent.
3. Dans l’espace global, le préfixe `\` des noms `\App\Domain\Category` et `\App\Admin\Category` indique explicitement les classes à instancier.
4. Chaque objet conserve son nom dans une propriété privée et le renvoie par `name()`.
5. Les deux appels `echo` montrent que PHP distingue les classes et que chacune fournit sa propre valeur.

## Résultat attendu

```text
Catalogue public : Développement Web
Espace admin : Développement Web
```

## Lien avec le projet technique

Dans un projet technique, les namespaces peuvent refléter l’organisation du code, par exemple en séparant le catalogue public et l’administration. Cet exemple rassemble volontairement ses classes dans un seul fichier pour être directement exécutable; il montre les noms de classes, mais pas un système d’autoload ni une organisation de dossiers réellement utilisée par le projet.

## Limite et exercice

Un namespace organise les noms, mais ne charge pas à lui seul les fichiers. Exercice : créer une classe `Course` dans un namespace distinct, puis importer une classe avec `use ... as ...` et remplacer un nom entièrement qualifié par son alias.

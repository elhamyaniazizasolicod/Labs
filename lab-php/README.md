# lab-php — erreurs, namespaces et traits

Ce lab permet de découvrir et de pratiquer trois notions PHP qui ne sont pas encore étudiées en cours : la gestion des erreurs et des exceptions, les namespaces et les traits.

## Environnement

Les exemples utilisent PHP en ligne de commande et ne nécessitent aucun framework ni dépendance externe. Ils illustrent un scénario pédagogique de gestion et d’affichage de catégories et de cours; les données et classes sont fictives et ne sont pas présentées comme des éléments déjà intégrés au projet technique.

## Démarrage rapide

Depuis le dossier `lab-php` :

```powershell
php -v
php hello-world.php
```

Le premier appel affiche la version de PHP disponible. Le second doit afficher :

```text
Bonjour, PHP !
```

## Notions et exemples

| Notion | Exemple exécutable | Tutoriel |
|:--|:--|:--|
| Gestion des erreurs et exceptions | [gestion-erreurs/exemple.php](./gestion-erreurs/exemple.php) | [gestion-erreurs/tutoriel.md](./gestion-erreurs/tutoriel.md) |
| Namespace | [namespace/exemple.php](./namespace/exemple.php) | [namespace/tutoriel.md](./namespace/tutoriel.md) |
| Trait | [trait/exemple.php](./trait/exemple.php) | [trait/tutoriel.md](./trait/tutoriel.md) |

Exécuter chaque démonstration depuis ce dossier :

```powershell
php gestion-erreurs/exemple.php
php namespace/exemple.php
php trait/exemple.php
```

Chaque tutoriel décrit le rôle de la notion, les blocs importants du code, la commande, le résultat observable, le lien avec le projet et une limite ou un exercice.

Le plan de présentation est disponible dans [presentation.md](./presentation.md).

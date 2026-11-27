# OCP — Open/Closed Principle

## Objectif

Le principe ouvert/fermé (OCP) propose de pouvoir étendre un comportement sans modifier le code stable qui l’utilise.

## Fichier et exécution

Fichier : `ocp/exemple.php`

Depuis le dossier `lab-code-solid` :

```powershell
php .\ocp\exemple.php
```

## Parcours de l’exemple

1. `CategoryFilter` fixe le contrat d’un filtre : répondre si une catégorie correspond.
2. `PublishedCategoryFilter` applique le critère de publication. `CategoryNameFilter` ajoute un autre critère en recherchant un texte dans le nom.
3. `CategoryCatalog` reçoit les catégories et exécute le filtre fourni. Sa méthode `filter()` ne connaît pas les critères concrets.
4. Le programme appelle le même catalogue avec deux filtres différents. Pour un nouveau critère, on ajoute une nouvelle classe qui implémente `CategoryFilter` au lieu de modifier `CategoryCatalog`.

## Résultat attendu

```text
Catégories publiées : PHP, Laravel
Résultat du nouveau filtre : PHP
```

## Lien avec le projet technique

La page Laravel `/categories` affiche une collection de catégories. Des critères comme « publiées » ou une recherche par nom pourraient être ajoutés autour de cette consultation. Ici, les critères et les catégories sont simulés en mémoire; aucun filtre n’est ajouté au projet Laravel.

## Limite ou exercice

Le catalogue reçoit toute sa collection avant de filtrer. Exercice : ajouter un `CategoryNameFilter` insensible à la casse (ou un filtre par niveau) sans modifier le code de `CategoryCatalog`.

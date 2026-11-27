# DIP — Dependency Inversion Principle

## Objectif

Le principe d’inversion des dépendances (DIP) demande au code métier de dépendre d’abstractions. Les détails techniques dépendent ensuite de ces mêmes abstractions, au lieu de dicter directement le fonctionnement du code métier.

## Fichier et exécution

Fichier : `dip/exemple.php`

Depuis le dossier `lab-code-solid` :

```powershell
php .\dip\exemple.php
```

## Parcours de l’exemple

1. `CategoryProvider` définit le contrat dont le service a besoin : fournir des noms de catégories.
2. `InMemoryCategoryProvider` est un détail de démonstration qui satisfait ce contrat avec un tableau en mémoire.
3. `CategoryListService` reçoit `CategoryProvider` dans son constructeur. Il ne crée pas lui-même le fournisseur et ne dépend pas de sa classe concrète.
4. Le programme assemble les objets en injectant le fournisseur en mémoire, puis le service formate les noms.

Pour brancher une autre source, on peut fournir une nouvelle implémentation de `CategoryProvider` sans réécrire le service.

## Résultat attendu

```text
- PHP
- Laravel
```

## Lien avec le projet technique

Dans le projet technique, `Category::all()` lit les données via Eloquent. Un service métier qui dépend d’un contrat de lecture peut être testé sans base de données et recevoir une implémentation Eloquent au moment de l’assemblage. Le présent exemple utilise exclusivement un fournisseur mémoire et ne change pas l’application.

## Limite ou exercice

L’exemple ne contient pas d’adaptateur Laravel. Exercice : concevoir un `EloquentCategoryProvider` qui implémente le contrat, puis le tester dans le contexte Laravel sans rendre le script autonome dépendant du framework.

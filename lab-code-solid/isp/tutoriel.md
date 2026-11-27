# ISP — Interface Segregation Principle

## Objectif

Le principe de ségrégation des interfaces (ISP) conseille de préférer plusieurs interfaces ciblées à une interface générale qui oblige ses clients à dépendre de méthodes inutiles.

## Fichier et exécution

Fichier : `isp/exemple.php`

Depuis le dossier `lab-code-solid` :

```powershell
php .\isp\exemple.php
```

## Parcours de l’exemple

1. `CategoryReader` expose uniquement `all()`, l’opération nécessaire pour lire la liste.
2. `CategoryCreator` expose uniquement `add()`, l’opération nécessaire pour ajouter une catégorie.
3. `InMemoryCategoryStore` implémente les deux contrats, car ce composant de démonstration sait lire et écrire.
4. `CategoryPage` dépend uniquement de `CategoryReader`. Elle peut afficher la liste sans connaître l’opération d’ajout.
5. Le programme ajoute une catégorie au magasin puis passe celui-ci à la page, qui ne voit que l’interface de lecture.

## Résultat attendu

```text
PHP — Langage utilisé côté serveur.
```

## Lien avec le projet technique

La route et la vue du projet technique ont besoin de lire et afficher des catégories. Une séparation lecture/écriture peut éviter de donner à un composant d’affichage des opérations d’administration dont il n’a pas besoin. Le magasin en mémoire présenté ici n’est pas celui de l’application.

## Limite ou exercice

Le même magasin implémente encore les deux interfaces. Exercice : créer un composant de lecture seule et vérifier que `CategoryPage` peut l’utiliser sans implémenter `add()`.

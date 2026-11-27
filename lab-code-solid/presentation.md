---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #f8fafc;
    color: #1e293b;
    font-family: Arial, sans-serif;
    padding: 48px 64px;
    font-size: 22px;
  }
  h1 { color: #1e3a5f; font-size: 40px; }
  h2 {
    color: #2563eb;
    border-bottom: 3px solid #38bdf8;
    padding-bottom: 8px;
  }
  strong { color: #2563eb; }
  section.title {
    background: linear-gradient(135deg, #0f172a, #1e40af);
    color: white;
    text-align: center;
    justify-content: center;
  }
  section.title h1 { color: white; font-size: 48px; }
---

<!-- _class: title -->

# Découvrir les principes SOLID

## Cinq principes pour concevoir du code orienté objet

**Réalisé par :** Aziza Elhamyani  
**Encadrant :** ES-SARRAJ Fouad  
**Formation :** Développement Web

---

# Plan de la présentation

1. Introduction & Stack Technique
2. Définitions des principes SOLID
3. Problème constaté dans la conception initiale
4. Application des principes au projet
5. Démonstrations & vérification
6. Conclusion

---

# 1 — Introduction & Stack Technique

## Objectif du lab

Découvrir les cinq principes SOLID et les mettre en pratique dans des exemples PHP autour de la gestion des catégories.

## Stack technique

| Élément | Technologie | Utilisation |
|:--|:--|:--|
| Langage | PHP 8.3 | Classes, interfaces et typage |
| Framework | Laravel 13.17 | Application observée |
| Accès aux données | Eloquent | Modèle `Category` |
| Affichage | Blade | Nom et description |

La route `/categories` récupère les données avec `Category::all()`. Les scripts du lab restent autonomes en PHP natif avec des données en mémoire.

---

# 2 — Définitions des principes SOLID

| Sigle | Principe | Règle essentielle |
|:--|:--|:--|
| **S** | Responsabilité unique | Une classe possède un seul rôle principal. |
| **O** | Ouvert/fermé | Ajouter un comportement sans modifier le code stable. |
| **L** | Substitution de Liskov | Une sous-classe respecte le contrat de sa classe parent. |
| **I** | Ségrégation des interfaces | Fournir uniquement les méthodes utiles au client. |
| **D** | Inversion des dépendances | Le métier dépend d’abstractions, pas d’implémentations. |

**SOLID améliore la compréhension, le test, la maintenance et l’évolution du code.**

---

# SRP — Une responsabilité principale

## Application dans le lab

- `Category` représente les données.
- `CategoryRepository` fournit les catégories.
- `CategoryListFormatter` transforme les données en texte.

```php
$categories = $repository->all();
echo $formatter->format($categories);
```

Le changement d’une source de données ne doit pas obliger à modifier le formatage.

**Exemple :** `srp/exemple.php`

---

# OCP — Ajouter sans modifier

## Filtrer les catégories par composition

- `CategoryFilter` définit le contrat commun.
- `PublishedCategoryFilter` filtre les catégories publiées.
- `CategoryNameFilter` ajoute une recherche par nom.
- `CategoryCatalog` utilise le contrat sans connaître les filtres internes.

```php
$catalog->filter(new PublishedCategoryFilter());
$catalog->filter(new CategoryNameFilter('php'));
```

Chaque nouveau filtre est une nouvelle implémentation : le catalogue n’est pas modifié.

**Exemple :** `ocp/exemple.php`

---

# LSP — Le sous-type respecte le parent

## Cas `FeaturedCategory`

- `Category` fournit une méthode `title()`.
- `FeaturedCategory` conserve ce contrat.
- Elle ajoute simplement un préfixe au titre.
- La fonction appelante peut recevoir les deux types indifféremment.

```php
displayCategoryTitles([
    new Category('PHP'),
    new FeaturedCategory('Laravel'),
]);
```

**Exemple :** `lsp/exemple.php`

---

# ISP — Interfaces spécialisées

## Séparer lecture et création

- `CategoryReader` fournit `all()`.
- `CategoryCreator` fournit `add()`.
- `CategoryPage` dépend uniquement de `CategoryReader`.

```php
final class CategoryPage
{
    public function __construct(
        private readonly CategoryReader $categories
    ) {}
}
```

Une page d’affichage n’est pas forcée de connaître les opérations d’administration.

**Exemple :** `isp/exemple.php`

---

# DIP — Dépendre d’un contrat

## Injecter une source de données

- `CategoryProvider` abstrait l’accès aux noms.
- `CategoryListService` ne dépend pas de la mémoire ou d’une base.
- `InMemoryCategoryProvider` fournit une implémentation remplacable.

```php
$service = new CategoryListService(
    new InMemoryCategoryProvider(['PHP', 'Laravel'])
);
```

**Exemple :** `dip/exemple.php`

---

# 3 — Problème constaté dans la conception initiale

## Conception trop rigide ou trop générale

Dans le scénario initial, l’ajout de comportements peut provoquer :

- le mélange de plusieurs responsabilités dans une même classe ;
- la modification du catalogue à chaque nouveau filtre ;
- des sous-types qui ne respectent pas les attentes du parent ;
- des clients dépendants de méthodes inutiles ;
- un service lié directement à une source de données concrète.

Ce problème est pédagogique : il décrit les fragilités que les cinq principes permettent d’éviter.

---

# 4 — Application des principes au projet

## Découplage avec des contrats explicites

| Besoin | Principe | Mise en œuvre |
|:--|:--|:--|
| Séparer affichage, données et accès | SRP | Trois classes ciblées |
| Ajouter un filtre | OCP | Interface `CategoryFilter` |
| Remplacer une catégorie | LSP | Sous-type compatible avec `Category` |
| Limiter les opérations | ISP | Interfaces `Reader` et `Creator` |
| Remplacer la source | DIP | Injection de `CategoryProvider` |

Les scripts restent indépendants de Laravel afin d’isoler chaque principe et rendre la démonstration simple à lancer.

---

# 5 — Démonstrations & vérification

## Quick Start

Depuis le dossier `lab-code-solid` :

```powershell
php -r "echo 'Hello, SOLID !';"
php .\srp\exemple.php
php .\ocp\exemple.php
php .\lsp\exemple.php
php .\isp\exemple.php
php .\dip\exemple.php
```
---
## Résultats attendus
| Démonstration | Résultat attendu |
|:--|:--|
| SRP | `PHP : Apprendre les bases…` puis `Laravel : Créer des applications…` |
| OCP | `PHP, Laravel` puis `PHP` |
| LSP | `PHP`, puis `À la une : Laravel` |
| ISP | `PHP — Langage utilisé côté serveur.` |
| DIP | `- PHP`, puis `- Laravel` |

---

# 5 — Vérification pratique

## Contrôles effectués

- Vérifier la syntaxe de chaque fichier avec `php -l`.
- Exécuter les cinq exemples.
- Comparer chaque sortie à celle indiquée dans le tableau.
- Observer qu’un nouveau filtre ou fournisseur peut être ajouté sans modifier le catalogue ou le service principal.

```powershell
php -l .\srp\exemple.php
php -l .\ocp\exemple.php
php -l .\lsp\exemple.php
php -l .\isp\exemple.php
php -l .\dip\exemple.php
```

**Critère de réussite :** aucune erreur PHP et une sortie cohérente pour chaque principe.

---

# 6 — Conclusion

## Ce que SOLID apporte

- Des responsabilités plus faciles à identifier.
- Des extensions sans modification des classes stables.
- Des sous-types réellement substituables.
- Des interfaces adaptées aux besoins des clients.
- Des modules métier indépendants des détails techniques.

SOLID n’est pas cinq règles supplémentaires à appliquer partout : c’est une grille de conception qui guide les évolutions futures.

### Livrables

- Présentation : `presentation.md`
- Exemples PHP : `srp/`, `ocp/`, `lsp/`, `isp/`, `dip/`
- Tutoriels : un fichier `.md` par principe

---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #f5f7fc;
    color: #172033;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 48px 64px;
    font-size: 22px;
    line-height: 1.4;
  }

  h1 {
    color: #312e81;
    font-size: 1.65em;
    font-weight: 800;
    margin-bottom: 0.55em;
  }

  h2 {
    color: #5146a5;
    font-size: 1.15em;
  }

  h3 {
    color: #6d5bd0;
  }

  strong {
    color: #5b4acb;
  }

  li {
    margin-bottom: 0.45em;
  }

  a {
    color: #5146a5;
  }

  table {
    font-size: 0.88em;
  }

  th {
    background: #312e81;
    color: #ffffff;
  }

  tr:nth-child(even) {
    background: #e9eaf7;
  }

  code {
    color: #4338a3;
    font-family: "Cascadia Code", Consolas, monospace;
  }

  pre {
    border: 1px solid #d8dcf0;
    border-radius: 12px;
    padding: 0.8em 1em;
    background: #111827;
    box-shadow: 0 8px 20px #20284a1a;
  }

  pre code {
    color: #f1f5f9;
    font-size: 0.8em;
  }

  section::after {
    color: #7c83a5;
    font-size: 13px;
  }

  section.cover {
    background: linear-gradient(135deg, #17143f 0%, #312e81 58%, #7656c8 100%);
    color: #f8fafc;
    text-align: center;
    justify-content: center;
  }

  section.cover h1 {
    color: #ffffff;
    font-size: 2.6em;
    letter-spacing: 0.04em;
  }

  section.cover h2 {
    color: #dcd8ff;
    border: 0;
    font-size: 1.25em;
  }

  section.cover h3,
  section.cover p {
    color: #e0e7ff;
  }

  section.cover strong {
    color: #f6f3f3;
  }

  section.dark {
    background: #171a35;
    color: #edf0ff;
  }

  section.dark h1 {
    color: #c4b5fd;
  }

  section.dark h2,
  section.dark h3 {
    color: #ddd6fe;
  }

  section.dark strong,
  section.dark a {
    color: #c4b5fd;
  }

  section.dark code {
    color: #ddd6fe;
  }

  section.dark pre {
    border-color: #44476d;
    background: #0c1022;
  }

  section.dark table {
    color: #edf0ff;
  }

  section.dark th {
    background: #5146a5;
  }

  section.dark tr:nth-child(even) {
    background: #252847;
  }

  section.dark::after {
    color: #a5acd0;
  }
---

<!-- _class: cover -->
![width:120 OFPPT](images/ofppt.png)
![width:120 Solicode](images/solicode.png)
# lab-php

## Gestion des erreurs, namespaces et traits

### Trois notions PHP, expliquées et mises en pratique

**Réalisé par :** Aziza Elhamyani 
**Encadré par :** ES-SARRAJ Fouad

---

# Plan de la présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème rencontré dans le projet
4. Solution proposée et démonstrations

---

# Introduction & Stack Technique

Ce lab permet de découvrir et de tester trois notions PHP complémentaires à celles étudiées en cours.

| Technologie | Rôle dans le lab |
|:--|:--|
| PHP | Langage utilisé pour écrire les exemples |
| PHP CLI | Exécution des démonstrations dans un terminal |

Les exemples ne nécessitent aucun framework ni dépendance. Ils utilisent des catégories et des cours fictifs pour illustrer des cas possibles dans un projet technique; ils ne sont pas intégrés à l’application.

---

<!-- _class: dark -->

# Quick Start

Depuis le dossier `lab-php` :

```powershell
php -v
php hello-world.php
```

Le premier appel affiche la version de PHP installée. Le second exécute le fichier Hello World.

Résultat attendu :

```text
Bonjour, PHP !
```

---

# Définitions — erreurs et exceptions

Une exception représente une situation qui empêche le déroulement normal d’une opération.

- `throw` déclenche une exception.
- `try` contient le code susceptible de provoquer une exception.
- `catch` intercepte l’exception pour traiter le problème.

Le traitement doit être adapté à la situation : par exemple, signaler qu’une catégorie demandée n’existe pas.

---

# Définitions — namespace et trait

## Namespace

Un namespace organise les classes et permet à plusieurs classes portant le même nom court de coexister sous des noms complets différents.

## Trait

Un trait partage des méthodes entre plusieurs classes sans établir de relation d’héritage entre elles.

---

<!-- _class: dark -->

# Problème

Durant l’apprentissage de PHP, certaines notions ne sont pas encore étudiées en cours. Il est donc nécessaire de les découvrir, de les comprendre et de les pratiquer pour mieux les utiliser dans un projet technique.

Les notions concernées sont la gestion des erreurs et des exceptions, les namespaces et les traits.

---

# Solution proposée

Réaliser des exemples pratiques pour comprendre le rôle de chaque notion et apprendre à l’utiliser dans des situations inspirées d’un projet technique.

Le lab propose un scénario pédagogique de catalogue de cours et de catégories. Les données et les classes sont fictives; les exemples restent autonomes et ne prétendent pas être intégrés au projet.

Les exemples qui suivent illustrent les notions; ils ne constituent pas une solution déjà intégrée au projet.

---

# Démonstration — gestion des erreurs et des exceptions

Le script simule la recherche d’une catégorie absente dans un catalogue.

```powershell
php gestion-erreurs/exemple.php
```

La fonction rejette un identifiant non positif ou déclenche `CategoryNotFoundException` si aucune catégorie ne correspond. Le bloc `catch` intercepte ces deux cas.

Résultat attendu :

```text
Impossible d’afficher la catégorie : La catégorie 8 n’existe pas.
```

---

<!-- _class: dark -->

# Démonstration — namespaces

Deux classes `Category` peuvent exister dans des namespaces différents :

- `App\Domain\Category`
- `App\Admin\Category`

```powershell
php namespace/exemple.php
```

Résultat attendu :

```text
Catalogue public : Développement Web
Espace admin : Développement Web
```

Cet exemple met volontairement les classes dans un seul fichier pour rester directement exécutable; il montre les namespaces sans autoload externe.

---

# Démonstration — traits

Les classes `Category` et `Course` utilisent le trait `HasDisplayLabel` pour partager la méthode `displayLabel()`, qui formate les libellés de leurs objets.

```powershell
php trait/exemple.php
```

Résultat attendu :

```text
Catégorie : Développement Web
Cours : Gestion des exceptions
```

Le trait partage ici un petit comportement de présentation; il ne remplace ni l’héritage ni la composition dans tous les cas.

---

<!-- _class: dark -->

# Livrables et références

- Un fichier Hello World et un exemple PHP exécutable par notion.
- Un tutoriel associé à chaque notion dans `gestion-erreurs/`, `namespace/` et `trait/`.
- Documentation : [Exceptions PHP](https://www.php.net/manual/fr/language.exceptions.php) · [Namespaces PHP](https://www.php.net/manual/fr/language.namespaces.php) · [Traits PHP](https://www.php.net/manual/fr/language.oop5.traits.php)

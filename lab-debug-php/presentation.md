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
    padding: 48px;
    font-size: 22px;
  }
  h1 { color: #1e3a5f; }
  h2 { color: #2563eb; border-bottom: 3px solid #38bdf8; padding-bottom: 8px; }
  strong { color: #2563eb; }
  section.cover {
    background: linear-gradient(135deg, #0f172a, #1e40af);
    color: white;
    text-align: center;
    justify-content: center;
  }
  section.cover h1 { color: white; font-size: 2.2em; }
  section.cover h2 { color: #bfdbfe; border: 0; }
  section.dark { background: #111827; color: #f8fafc; }
  section.dark h1, section.dark h2 { color: #93c5fd; }
---

<!-- _class: cover -->

# lab-debug-php

## Déboguer un programme PHP

**Réalisé par :** Aziza Elhamyani  
**Encadré par :** ES-Saraj Fouad  
**Centre :** Solicode Tanger 
**Institution :** OFPPT

---

# Plan de présentation

1. Le débogage
2. Les outils PHP
3. L'exemple du lab
4. Les étapes de correction

---

# 01 — Le débogage

## Pourquoi déboguer ?

Le débogage consiste à reproduire, localiser et corriger un défaut dans un programme.

Un programme peut s'exécuter sans erreur de syntaxe tout en donnant un résultat incorrect : c'est une erreur de logique.

Une démarche de débogage aide à reproduire le comportement, observer les données, trouver la cause et vérifier la correction.

---

# Définitions utiles

| Terme | Définition |
|:--|:--|
| Bug | Défaut dans le code qui produit un comportement incorrect. |
| Débogage | Démarche pour reproduire, localiser et corriger un bug. |
| Erreur de syntaxe | Le code ne respecte pas la grammaire PHP; PHP ne peut pas l'analyser. |
| Erreur de logique | Le code s'exécute, mais le résultat ne respecte pas le résultat attendu. |
| Point d'arrêt | Repère d'un débogueur où l'exécution s'interrompt pour inspecter l'état du programme. |

---

# 02 — Les outils PHP

## Environnement du lab

**Stack :** PHP CLI, sans framework ni dépendance externe.

Depuis le dossier `lab-debug-php` :

```bash
php -v
php hello-world.php
php debugage/exemple.php
```

Le Hello World vérifie que PHP CLI fonctionne. L'exemple est autonome et n'a pas besoin de Xdebug.

---

# Inspecter les valeurs avec PHP

`var_dump()` affiche la valeur et le type d'une variable.

```php
$prixUnitaire = 15.0;
$quantite = 3;

var_dump($prixUnitaire, $quantite);
```

Sortie utile au diagnostic :

```text
float(15)
int(3)
```

---

# Un débogueur : Xdebug

Xdebug est une extension PHP qui permet notamment d'examiner un programme pas à pas.

- Un **point d'arrêt** suspend l'exécution à un endroit choisi.
- On peut inspecter les variables et suivre le chemin du code.
- Un éditeur compatible peut se connecter au débogueur.

Xdebug est un outil complémentaire; il n'est pas nécessaire pour lancer les exemples de ce lab.

---

<!-- _class: dark -->

# 03 — L'exemple du lab

## Situation décrite

Le besoin communiqué est général : **« des problèmes en PHP en exécution »**. Le problème concret n'a pas été détaillé.

Pour illustrer le débogage, le lab utilise donc un exemple pédagogique : calculer le total de trois articles à `15.0` chacun.

Le total attendu est `45`, mais le code retourne `18`.

---

# Reproduire le bug

Le cas simulé calcule le prix de trois articles à `15.0` chacun.

```php
function calculerTotalIncorrect(float $prixUnitaire, int $quantite): float
{
    return $prixUnitaire + $quantite;
}

echo calculerTotalIncorrect(15.0, 3); // 18
```

Le programme s'exécute, mais le total obtenu (`18`) diffère du total attendu (`45`).

---

# 04 — Les étapes de correction

## 1. Observer et comparer

Dans [debugage/exemple.php](debugage/exemple.php), `var_dump()` affiche les paramètres et les résultats. Comparer le total obtenu à la valeur attendue permet de confirmer l'écart.

```php
var_dump($prixUnitaire, $quantite);
var_dump($totalIncorrect);
var_dump($totalAttendu);
```

---

# 2. Corriger la cause

L'opérateur `+` doit être remplacé par `*`, car le total correspond au prix unitaire multiplié par le nombre d'articles.

```php
return $prixUnitaire * $quantite;
```

---

# 3. Relancer et vérifier

Depuis le dossier `lab-debug-php` :

```bash
php debugage/exemple.php
```

Sortie finale attendue :

```text
Bug détecté : le prix et la quantité ont été additionnés.
Après correction (prix × quantité) : float(45)
```

La correction est vérifiée lorsque le même scénario donne le résultat attendu. Pour un problème réel, refaire ce contrôle avec ses propres étapes de reproduction et ses données.

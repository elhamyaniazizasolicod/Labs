# Découvrir les principes SOLID

Ce lab présente les cinq principes SOLID avec des exemples PHP exécutables inspirés de la consultation des catégories du projet technique.

## Contexte technique

Le projet technique observé est une application Laravel qui expose `/categories`. La route récupère les catégories avec `Category::all()` puis les transmet à une vue Blade qui affiche leur nom et leur description. Le projet utilise PHP `^8.3` et Laravel `^13.17`.

Les scripts de ce lab sont des démonstrations autonomes en PHP natif. Ils utilisent des catégories fictives en mémoire : ils ne modifient pas l’application Laravel et ne sont pas présentés comme une intégration existante.

## Objectifs
À la fin de ce lab, vous pouvez :
Expliquer les cinq principes SOLID.
Lire un exemple PHP pour chaque principe.
Lancer les exemples et vérifier les résultats

## Quick Start

Prérequis : PHP 8.3 ou une version compatible avec les scripts.

Depuis le dossier `lab-code-solid`, exécuter :

```powershell
php .\srp\exemple.php
php .\ocp\exemple.php
php .\lsp\exemple.php
php .\isp\exemple.php
php .\dip\exemple.php
```

Le premier script confirme que PHP exécute un fichier du lab. Les cinq suivants affichent chacun un résultat autour d’une liste de catégories.

## Parcours des principes

| Principe | Objectif | Exemple | Tutoriel |
|:--|:--|:--|:--|
| SRP | Une classe a une responsabilité principale. | [srp/exemple.php](./srp/exemple.php) | [srp/tutoriel.md](./srp/tutoriel.md) |
| OCP | Étendre les comportements sans modifier le code stable. | [ocp/exemple.php](./ocp/exemple.php) | [ocp/tutoriel.md](./ocp/tutoriel.md) |
| LSP | Un sous-type peut remplacer son type parent sans casser le contrat. | [lsp/exemple.php](./lsp/exemple.php) | [lsp/tutoriel.md](./lsp/tutoriel.md) |
| ISP | Un client ne dépend que des opérations dont il a besoin. | [isp/exemple.php](./isp/exemple.php) | [isp/tutoriel.md](./isp/tutoriel.md) |
| DIP | Le code métier dépend d’abstractions plutôt que de détails techniques. | [dip/exemple.php](./dip/exemple.php) | [dip/tutoriel.md](./dip/tutoriel.md) |

## Résultats des tests

Les six scripts ont été exécutés avec `php -d xdebug.mode=off` et chaque sortie a été comparée au résultat attendu. Le mode Xdebug a été désactivé pour éviter un avertissement de connexion à un débogueur absent; les scripts s’exécutent également avec `php` seul.

| Vérification | Résultat |
|:--|:--|
| Syntaxe PHP (`php -l`) pour le Hello World et les cinq exemples | Réussie — aucune erreur de syntaxe |
| Exécution et comparaison des sorties attendues | Réussie — 6 scripts sur 6 |
| Export PDF de `presentation.md` | Réussi |

Sorties vérifiées :

| Script | Sortie |
|:--|:--|
| `hello-world.php` | `Hello, SOLID !` |
| `srp/exemple.php` | Les catégories `PHP` et `Laravel` avec leur description |
| `ocp/exemple.php` | Catégories publiées `PHP, Laravel`; nouveau filtre `PHP` |
| `lsp/exemple.php` | `PHP`; `À la une : Laravel` |
| `isp/exemple.php` | `PHP — Langage utilisé côté serveur.` |
| `dip/exemple.php` | `PHP`; `Laravel` |

Les résultats complets attendus et le lien pédagogique avec le projet sont précisés dans chaque tutoriel.

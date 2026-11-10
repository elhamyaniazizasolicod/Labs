# lab-php — erreurs, namespaces et traits

## 1. Besoin du projet technique

Pendant l’apprentissage de PHP, certaines notions utiles au développement d’un projet technique ne sont pas encore étudiées en cours. Ce lab répond à ce besoin en proposant de les découvrir, de les comprendre et de les tester à travers des exemples pratiques.

Les notions abordées peuvent aider à :

- traiter explicitement les situations anormales, comme une catégorie introuvable;
- organiser les classes et éviter les conflits de noms;
- partager un comportement commun entre plusieurs classes lorsque cela est pertinent.

Le lab apporte une première mise en pratique réutilisable comme base de compréhension. Les exemples autour des catégories et des cours sont pédagogiques et autonomes : ils ne décrivent pas des fonctionnalités déjà intégrées au projet technique.

## 2. Notions et techniques à apprendre

Le lab doit expliquer les notions de base, les concepts et les techniques suivants :

| Notion | Concepts et techniques à apprendre |
|:--|:--|
| Gestion des erreurs et des exceptions | Différencier une situation anormale, déclencher une exception avec `throw`, et traiter les cas attendus avec `try` et `catch`. |
| Namespace | Organiser les classes, comprendre leur nom complet et permettre à des classes de même nom court de coexister. Distinguer les namespaces du chargement automatique des fichiers. |
| Trait | Partager une méthode entre plusieurs classes avec `use`, comprendre les exigences du trait envers les classes qui l’utilisent et connaître ses limites. |

Les exemples doivent pouvoir être exécutés avec PHP en ligne de commande, sans framework ni dépendance externe.

## 3. Réalisation attendue

Créer un mini-lab PHP pratique, clair et directement exécutable. Utiliser un scénario illustratif de catégories et de cours, sans prétendre que les classes ou données de démonstration existent dans le projet technique.

Le livrable doit inclure :

- un fichier `hello-world.php` et un Quick Start depuis le dossier `lab-php`;
- un sous-dossier par notion, contenant un `exemple.php` exécutable et un `tutoriel.md` associé;
- un exemple d’exception qui traite un identifiant invalide ou une catégorie absente;
- un exemple de namespace qui montre comment distinguer des classes portant le même nom court;
- un exemple de trait qui partage un comportement pertinent entre des classes, par exemple le formatage de libellés de catégories et de cours;
- dans chaque tutoriel, l’objectif, les étapes importantes du code, la commande d’exécution, le résultat attendu, le lien avec le projet technique et une limite ou un exercice complémentaire;
- des commandes et résultats cohérents avec les scripts fournis.

L’IA peut proposer des améliorations pertinentes au périmètre du lab — par exemple un test ou un exercice supplémentaire — à condition qu’elles restent simples, compatibles avec PHP natif et clairement présentées comme des propositions. Ne pas ajouter de framework, inventer une fonctionnalité du projet ni présenter les exemples comme une intégration existante.

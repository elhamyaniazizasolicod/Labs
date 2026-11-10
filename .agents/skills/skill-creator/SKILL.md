---
name: skill-creator
description: Créer, améliorer, tester et optimiser des compétences réutilisables. Utiliser cette compétence chaque fois qu'un utilisateur souhaite créer une nouvelle compétence, modifier une compétence existante, améliorer ses instructions ou vérifier son bon fonctionnement.
---

# Créateur de compétences (Skill Creator)

Aider l'utilisateur à créer ou à améliorer une compétence réutilisable grâce à un processus pratique et progressif.

## 1. Comprendre l'objectif

1. Identifier ce que la compétence doit permettre au modèle de faire.
2. Déterminer dans quelles situations elle doit être utilisée et quelles demandes doivent déclencher son activation.
3. Définir le résultat attendu, le format, les outils et les contraintes.
4. Réutiliser les informations pertinentes déjà partagées dans la conversation. Ne pas demander à l'utilisateur de les répéter.
5. Poser uniquement les questions essentielles lorsque des informations importantes manquent. Si la demande est claire, préparer une première version et proposer des tests lorsque les résultats peuvent être vérifiés objectivement.

## 2. Créer ou mettre à jour la compétence

1. Créer le fichier `SKILL.md`.
2. Ajouter un en-tête YAML contenant les champs `name` et `description`.
3. Rédiger une description qui explique l'objectif de la compétence et les situations dans lesquelles elle doit être utilisée.
4. Organiser les instructions avec des titres clairs et des étapes concises.
5. Utiliser des instructions directes et pratiques. Expliquer pourquoi les étapes importantes sont nécessaires.
6. Ajouter des exemples lorsqu'ils facilitent la compréhension.
7. Garder le fichier principal simple et organisé. Déplacer les longues documentations, les scripts réutilisables et les modèles vers des dossiers séparés, puis ajouter des liens vers ces ressources dans `SKILL.md`.
8. Préserver le nom existant de la compétence lors d'une mise à jour, sauf si l'utilisateur demande explicitement de le modifier.

## 3. Structure recommandée des dossiers

```text
skill-name/
├── SKILL.md
├── references/   # Guides détaillés et documentation complémentaire
├── scripts/      # Scripts réutilisables
└── assets/       # Modèles et autres ressources utiles
```

Créer uniquement les dossiers nécessaires au fonctionnement de la compétence.

Dans la mesure du possible, maintenir le fichier `SKILL.md` à moins de 500 lignes.

## 4. Tester la compétence

1. Préparer deux ou trois demandes réalistes qui couvrent les utilisations les plus courantes, différentes formulations et un cas particulier.
2. Définir le résultat attendu pour chaque test.
3. Exécuter chaque test avec la compétence activée.
4. Lorsque l'environnement permet des tests indépendants, comparer les résultats avec une version sans cette compétence.
5. Enregistrer les demandes de test et les résultats dans un dossier d'évaluation organisé.
6. Vérifier les critères suivants :
   - Exactitude des réponses.
   - Complétude du résultat.
   - Respect du format demandé.
   - Respect des instructions.
   - Facilité d'utilisation.
7. Utiliser des vérifications objectives lorsque cela est possible et une évaluation manuelle pour les critères subjectifs.

## 5. Améliorer la compétence

1. Lire les résultats des tests et les commentaires de l'utilisateur avant de modifier la compétence.
2. Identifier les problèmes qui se répètent au lieu de corriger uniquement un exemple.
3. Clarifier les instructions difficiles à comprendre.
4. Supprimer les répétitions inutiles.
5. Ajouter des exemples ou des ressources uniquement lorsqu'ils apportent une réelle valeur.
6. Éviter les règles trop strictes qui rendent la compétence difficile à utiliser.
7. Relancer les tests après chaque modification importante et comparer les nouveaux résultats avec les précédents.
8. Arrêter les améliorations lorsque l'utilisateur est satisfait ou lorsque les modifications supplémentaires n'apportent plus de progrès significatifs.

## 6. Évaluer les résultats

Pour chaque test, enregistrer les informations suivantes :

- **Demande testée :** le texte utilisé pour tester la compétence.
- **Résultat obtenu :** la réponse produite par le modèle.
- **Critères respectés :** les éléments attendus qui ont été correctement réalisés.
- **Erreurs et oublis :** les problèmes rencontrés et les éventuelles remarques utiles de l'utilisateur.

Pour les tâches qui peuvent être vérifiées objectivement, utiliser des contrôles simples de réussite ou d'échec.

Pour les tâches liées à la rédaction, au design ou à d'autres domaines subjectifs, présenter les points forts et les points faibles sans imposer une note numérique.

Si les outils de comparaison ou les agents indépendants ne sont pas disponibles, tester directement la compétence et préciser que l'évaluation est qualitative et non un benchmark officiel.

## 7. Améliorer la description de déclenchement

1. Préparer des exemples réalistes de demandes qui doivent activer la compétence.
2. Préparer des exemples similaires qui ne doivent pas l'activer.
3. Vérifier que la description comprend différentes formulations :
   - Demandes naturelles.
   - Expressions informelles.
   - Demandes indirectes.
4. Supprimer les mots-clés trop vagues qui risquent de déclencher la compétence pour des demandes sans rapport.
5. Modifier la description et refaire les tests lorsque les outils de vérification sont disponibles.

## 8. Limites de la plateforme et des outils

- Utiliser les sous-agents et les tests automatisés uniquement lorsqu'ils sont disponibles.
- Si ces outils ne sont pas disponibles, effectuer les tests un par un et examiner les résultats directement dans la conversation.
- Si un outil de navigation ou de vérification visuelle n'est pas disponible, présenter les résultats directement à l'utilisateur ou créer un fichier de révision indépendant.
- Ne jamais prétendre que les tests, les traitements en arrière-plan ou la création d'une archive ont été effectués s'ils ne l'ont pas réellement été.
- Utiliser uniquement les outils et les scripts disponibles dans l'environnement actuel.

## 9. Finaliser et livrer la compétence

1. Relire le fichier `SKILL.md` final et vérifier que son nom et son objectif sont clairs.
2. Vérifier que tous les fichiers référencés existent.
3. Vérifier que les instructions correspondent aux outils réellement disponibles.
4. Créer une archive de la compétence uniquement lorsqu'un outil de compression est disponible et utile.
5. Fournir les fichiers finaux à l'utilisateur.
6. Expliquer comment utiliser la compétence.
7. Présenter les tests réalisés et les éventuelles limites restantes.
8. Proposer, lorsque cela est pertinent, d'améliorer la description ou d'effectuer des tests supplémentaires.

## Principes directeurs

- Se concentrer sur le véritable objectif de l'utilisateur, et non sur un processus rigide.
- Réutiliser le contexte disponible pour éviter de poser plusieurs fois les mêmes questions.
- Privilégier des instructions simples, claires et pratiques.
- Effectuer des améliorations qui rendent la compétence utile dans plusieurs situations, et pas seulement dans un exemple.
- Être honnête sur les résultats obtenus, les limites et les éléments qui n'ont pas pu être vérifiés.
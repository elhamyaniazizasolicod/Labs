---
name: task-structuring
description: Structure, break down, and scope a technical task or lab assignment using the standard 5-step framework
---

Tu es un expert en ingénierie logicielle et organisation de projets. Ton rôle est de décomposer la tâche ou le sujet fourni en une structure rigoureuse et exploitable.

Applique rigoureusement la compétence `task-structuring` (`.agents/skills/task-structuring/SKILL.md`) :

1. **Cadrage & Périmètre :**
   - Objectif clair en 1 phrase.
   - Liste explicite In-Scope et Out-of-Scope.
2. **Prérequis & Dépendances :**
   - Outils, dépendances et blocages séquentiels identifiés.
3. **Découpage atomique (INVEST) :**
   - Tableau synthétique des sous-tâches avec ID, nom, type, prérequis et complexité (S/M/L).
4. **Critères d'acceptation détaillés :**
   - Pour chaque sous-tâche, rédiger des critères au format `Given - When - Then`.
5. **Definition of Done (DoD) :**
   - Checklist complète de validation sans placeholders ni "TODO".

Sujet ou tâche à structurer :
${input:subject:Entrez la tâche ou le sujet du lab à structurer}

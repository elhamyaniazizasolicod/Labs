---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap');

  :root {
    --bg-dark: #0f172a;
    --card-dark: #1e293b;
    --text-dark: #f8fafc;
    --text-muted: #94a3b8;
    --primary: #38bdf8;
    --accent: #818cf8;
    --success: #34d399;
    --warning: #fbbf24;
    --danger: #f87171;
  }

  section {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    background-color: var(--bg-dark);
    color: var(--text-dark);
    padding: 40px 60px;
    font-size: 20px;
    line-height: 1.5;
  }

  /* Slide Classes */
  section.lead {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: radial-gradient(circle at 50% 40%, #1e293b 0%, #0f172a 100%);
  }

  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0f172a;
  }
  section.light p, section.light li {
    color: #334155;
  }
  section.light .card {
    background-color: #ffffff;
    border: 1px solid #e2e8f0;
    color: #1e293b;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
  }
  section.light pre {
    background: #0f172a !important;
    color: #f8fafc !important;
  }
  section.light th {
    background: #e2e8f0;
    color: #0f172a;
  }
  section.light td {
    border-bottom: 1px solid #e2e8f0;
  }

  /* Typography */
  h1 {
    font-size: 2.4rem;
    font-weight: 800;
    color: #f8fafc;
    letter-spacing: -0.02em;
    margin-bottom: 0.5rem;
  }
  h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary);
    border-bottom: 2px solid rgba(56, 189, 248, 0.2);
    padding-bottom: 0.3rem;
    margin-bottom: 1rem;
  }
  h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 0.5rem;
  }

  /* UI Components */
  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    align-items: start;
  }
  .grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
  }
  .card {
    background-color: var(--card-dark);
    padding: 18px 22px;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.08);
  }
  .badge {
    display: inline-block;
    padding: 3px 10px;
    font-size: 0.75rem;
    font-weight: 700;
    border-radius: 9999px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  .badge-primary { background: rgba(56, 189, 248, 0.15); color: var(--primary); }
  .badge-success { background: rgba(52, 211, 153, 0.15); color: var(--success); }
  .badge-warning { background: rgba(251, 191, 36, 0.15); color: var(--warning); }
  .badge-danger { background: rgba(248, 113, 113, 0.15); color: var(--danger); }

  /* Code Blocks */
  pre {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.78rem;
    border-radius: 8px;
    background: #020617 !important;
    border: 1px solid rgba(255, 255, 255, 0.1);
    line-height: 1.45;
  }
  code {
    font-family: 'JetBrains Mono', monospace;
  }

  /* Tables */
  table {
    width: 100%;
    font-size: 0.85rem;
    border-collapse: collapse;
    margin-top: 10px;
  }
  th {
    background-color: #1e293b;
    color: var(--primary);
    padding: 10px 14px;
    text-align: left;
    font-weight: 600;
  }
  td {
    padding: 10px 14px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }

  footer {
    font-size: 0.7rem;
    color: var(--text-muted);
  }
---

<!-- _class: lead -->

# Rédiger un Prompt Clair et Précis pour une IA

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

Ce lab a pour vocation de maîtriser la formulation de requêtes performantes à destination des modèles d'intelligence artificielle générative et agents autonomes.

### Objectifs d'apprentissage
- **Comprendre la mécanique d'interprétation** des LLM et la nécessité d'une structure rigoureuse.
- **Appliquer la méthode structurée C-O-C-R** : Contexte, Objectif, Consignes et Résultat attendu.
- **Tester, évaluer et itérer** sur un prompt à l'aide d'un agent IA pour atteindre un niveau de qualité optimal.
- **Éliminer les ambiguïtés et hallucinations** par le paramétrage de contraintes précises.

### Outils & Concepts Clés
- Modèles de langage génératifs (LLM) & agents conversationnels.
- Techniques d'ingénierie de prompt : *Role prompting*, *Few-shot prompting*, *Chain-of-Thought*.

---

<!-- _class: light -->

## 2. Problems Encountered

Lors de la rédaction initiale de requêtes pour des tâches complexes, plusieurs obstacles majeurs surviennent fréquemment :

<div class="grid-2">
  <div class="card">
    <span class="badge badge-danger">Problème 1</span>
    <h3>Prompts vagues et sous-spécifiés</h3>
    <p>Une demande trop générique (ex: <i>"Rédige un article technique"</i>) génère des réponses superficielles, impersonnelles ou hors-sujet.</p>
  </div>
  <div class="card">
    <span class="badge badge-danger">Problème 2</span>
    <h3>Absence de format cible</h3>
    <p>Sans consigne stricte de sortie, l'IA produit des formats disparates (prose verbeuse au lieu de JSON, Markdown ou tableau exploitable).</p>
  </div>
</div>

<div class="grid-2" style="margin-top: 12px;">
  <div class="card">
    <span class="badge badge-danger">Problème 3</span>
    <h3>Hallucinations et dérives</h3>
    <p>Sans limites de périmètre ni consignes négatives explicites, le modèle invente des détails ou déborde du domaine visé.</p>
  </div>
  <div class="card">
    <span class="badge badge-danger">Problème 4</span>
    <h3>Manque de contexte métier</h3>
    <p>L'omission de la cible d'audience ou du rôle produit un ton inadapté (trop simpliste ou excessivement académique).</p>
  </div>
</div>

---

## 3. Solutions Implemented

Pour pallier ces difficultés, une méthodologie systématique de conception et de validation a été mise en œuvre :

<div class="grid-2">
  <div class="card">
    <span class="badge badge-success">Solution 1</span>
    <h3>Adoption du Framework C-O-C-R</h3>
    <p>Normalisation de chaque prompt en 4 blocs obligatoires : <b>Contexte</b>, <b>Objectif</b>, <b>Consignes</b>, <b>Résultat attendu</b>.</p>
  </div>
  <div class="card">
    <span class="badge badge-success">Solution 2</span>
    <h3>Contraintes négatives & bornes</h3>
    <p>Définition expresse des interdictions (<i>"Ne pas inventer de données"</i>, <i>"Exclure le jargon non vulgarisé"</i>) pour fiabiliser la réponse.</p>
  </div>
</div>

<div class="grid-2" style="margin-top: 12px;">
  <div class="card">
    <span class="badge badge-success">Solution 3</span>
    <h3>Spécification stricte du format</h3>
    <p>Exigence de structures délimitées : schéma JSON, tableau Markdown, ou blocs de code avec typage précis.</p>
  </div>
  <div class="card">
    <span class="badge badge-success">Solution 4</span>
    <h3>Cycle d'évaluation & raffinement IA</h3>
    <p>Test du prompt avec un agent, analyse des écarts et intégration de corrections ciblées par itération continue.</p>
  </div>
</div>

---

<!-- _class: light -->

## Le Framework C-O-C-R : Architecture d'un Prompt

La structure **C-O-C-R** garantit que le modèle possède tous les paramètres nécessaires pour exécuter la tâche sans ambiguïté :

<div class="grid-4">
  <div class="card">
    <span class="badge badge-primary">C</span>
    <h3>Contexte</h3>
    <p style="font-size: 0.85rem;">Qui parle ? Quel est l'environnement ? Qui est le public cible ? Définition du rôle et de la situation.</p>
  </div>
  <div class="card">
    <span class="badge badge-primary">O</span>
    <h3>Objectif</h3>
    <p style="font-size: 0.85rem;">Quelle est la mission exacte ? Quelle valeur doit être produite ? L'action principale formulée avec un verbe d'action.</p>
  </div>
  <div class="card">
    <span class="badge badge-primary">C</span>
    <h3>Consignes</h3>
    <p style="font-size: 0.85rem;">Quelles sont les règles, les contraintes stylistiques, les limites techniques et les choses à proscrire ?</p>
  </div>
  <div class="card">
    <span class="badge badge-primary">R</span>
    <h3>Résultat</h3>
    <p style="font-size: 0.85rem;">Sous quelle forme précise livrer la réponse ? (Markdown, tableau, JSON, longueur exacte, ton).</p>
  </div>
</div>

---

## Anatomie Détaillée des 4 Piliers

| Composante | Rôle & Utilité pour l'IA | Exemple concret |
| :--- | :--- | :--- |
| **Contexte** *(Role & Setting)* | Restreint l'espace probabiliste des tokens pour adopter le bon vocabulaire. | *"Tu es un Lead DevOps pour une fintech hébergeant sur Kubernetes."* |
| **Objectif** *(Core Task)* | Définit la cible unique sans dispersion. | *"Rédiger un plan de reprise d'activité (PRA) après incident critique."* |
| **Consignes** *(Constraints & Rules)* | Empêche les dérives et oriente la méthode de réflexion. | *"3 phases max, liste à puces, temps de récupération < 30 min, sans outils payants."* |
| **Résultat** *(Output Spec)* | Détermine la forme brute exploitable immédiatement. | *"Tableau Markdown 4 colonnes : Étape \| Action \| Rôle \| Délai."* |

---

<!-- _class: light -->

## Exemple Pratique : Comparatif Avant / Après

<div class="grid-2">
  <div class="card">
    <span class="badge badge-danger">Prompt Naïf (Faible Précision)</span>
    <p style="margin-top: 10px; font-style: italic; color: #475569;">
      "Explique-moi comment sécuriser une API web pour que personne ne la pirate."
    </p>
    <ul style="font-size: 0.85rem; margin-top: 12px; color: #dc2626;">
      <li>Pas de niveau technique spécifié</li>
      <li>Pas de technologie ou langage défini</li>
      <li>Réponse générique et interminable</li>
      <li>Format non standardisé</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-success">Prompt Structuré C-O-C-R</span>
    <pre><code class="language-markdown">**Contexte** : Tu es expert en cybersécurité applicative.
**Objectif** : Établir une checklist de sécurisation pour une API REST Node.js/Express.
**Consignes** :
- Cibler les 5 vulnérabilités OWASP Top 10 API les plus critiques.
- Fournir un exemple de middleware ou code pour chaque point.
- Proscrire les explications théoriques superflues.
**Résultat attendu** :
- Tableau Markdown récapitulatif.
- Blocs de code commentés en JavaScript.</code></pre>
  </div>
</div>

---

## Méthodologie d'Itération et Test avec l'Agent IA

L'optimisation d'un prompt est un processus itératif composé de 4 phases séquentielles :

```
   [1. Émission]              [2. Analyse de Réponse]
   Prompt C-O-C-R     ───▶    Évaluation du livrable IA
                                      │
                                      ▼
   [4. Re-Test]               [3. Détection des Écarts]
   Prompt révisé       ◀───    Ajustement des contraintes (Few-Shot / Guardrails)
```

1. **Test Initial** : Exécution du prompt sur un cas réel.
2. **Revue Critique** : Vérification de la complétude, du ton et du respect scrupuleux du format demandé.
3. **Calibrage des Garde-fous** : Ajout d'exemples types (*Few-Shot*) ou de contraintes d'exclusion si l'IA s'égare.
4. **Validation** : Re-test pour confirmer la reproductibilité et la stabilité du résultat.

---

<!-- _class: light -->

## Techniques Avancées pour Renforcer un Prompt

<div class="grid-2">
  <div class="card">
    <span class="badge badge-primary">Few-Shot Prompting</span>
    <h3>Fournir des Exemples Concrets</h3>
    <p>Inclure 1 ou 2 couples (Entrée ➔ Sortie type) au sein du prompt afin de conditionner la forme exacte attendue sans ambiguïté.</p>
  </div>

  <div class="card">
    <span class="badge badge-accent">Chain-of-Thought (CoT)</span>
    <h3>Décomposer le Raisonnement</h3>
    <p>Demander au modèle de détailler ses étapes de réflexion avant la conclusion : <i>"Décompose ta réflexion étape par étape avant de générer le code final."</i></p>
  </div>
</div>

<div class="grid-2" style="margin-top: 14px;">
  <div class="card">
    <span class="badge badge-warning">Guardrails Négatifs</span>
    <h3>Délimiter les Interdictions</h3>
    <p>Expliciter ce qui ne doit <b>jamais</b> figurer dans la réponse : <i>"N'utilise aucune bibliothèque tierce non native", "Ne donne pas d'introduction ni de conclusion."</i></p>
  </div>

  <div class="card">
    <span class="badge badge-success">Prompt d'Évaluation Méta</span>
    <h3>Faire Auto-Évaluer l'IA</h3>
    <p>Demander au modèle de noter sa propre conformité : <i>"Vérifie que ta réponse coche l'intégralité des 4 critères avant de la restituer."</i></p>
  </div>
</div>

---

## Checklist de Validation d'un Prompt Réussi

Avant d'exécuter un prompt complexe en environnement professionnel, validez les critères suivants :

- [x] **Rôle & Posture définis** : L'IA sait quel persona incarner et à qui elle s'adresse.
- [x] **Action univoque** : L'objectif utilise un verbe d'action précis (analyser, synthétiser, convertir, auditer).
- [x] **Contraintes positives & négatives** : Ce qui doit figurer et ce qui est expressément exclu.
- [x] **Format de sortie strict** : Type de structure (Markdown, JSON validé, table, liste numérotée).
- [x] **Exemple de référence (optionnel mais recommandé)** : Modèle cible illustrant la structure attendue.
- [x] **Reproductibilité** : Le prompt produit des résultats stables et exploitables directement sans retraitement manuel.
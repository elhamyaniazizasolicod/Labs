---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    font-family: "Aptos", "Segoe UI", sans-serif;
    background: #F7F9FC;
    color: #172033;
    padding: 48px 58px;
    font-size: 22px;
  }

  h1, h2 {
    color: #12304A;
  }

  h1 {
    font-size: 2.05em;
    border-bottom: 5px solid #16A6A1;
    padding-bottom: 12px;
    margin-bottom: 22px;
  }

  h2 {
    font-size: 1.35em;
    margin-bottom: 12px;
  }

  strong {
    color: #087E8B;
  }

  ul, ol {
    line-height: 1.5;
  }

  li {
    margin-bottom: 7px;
  }

  table {
    width: 100%;
    font-size: 0.88em;
    border-collapse: collapse;
  }

  th {
    background: #12304A;
    color: white;
  }

  td, th {
    border: 1px solid #D9E1EA;
    padding: 10px;
  }

  section.title {
    background: #12304A;
    color: #F7F9FC;
    text-align: center;
    justify-content: center;
  }

  section.title h1 {
    color: #FFFFFF;
    border-bottom: 5px solid #16A6A1;
  }

  section.title h2 {
    color: #C7D7E5;
    font-weight: normal;
  }

  section.title strong {
    color: #16A6A1;
  }

  section.title footer {
    color: #C7D7E5;
  }

  section.intro p {
    line-height: 1.55;
  }

  section.stack h2 {
    color: #087E8B;
    font-size: 1.1em;
    margin-bottom: 5px;
  }

  section.stack ul {
    font-size: 0.86em;
    line-height: 1.35;
    margin-top: 5px;
  }

  section.stack li {
    margin-bottom: 4px;
  }

  section.labs {
    padding: 35px 42px;
  }

  section.labs h1 {
    font-size: 1.8em;
    margin-bottom: 14px;
  }

  .phase-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .phase-card {
    background: #FFFFFF;
    border-left: 5px solid #16A6A1;
    border-radius: 8px;
    padding: 10px 14px;
  }

  .phase-card h2 {
    font-size: 0.91em;
    color: #087E8B;
    margin: 0 0 5px 0;
  }

  .phase-card ol {
    font-size: 0.67em;
    line-height: 1.22;
    margin: 0;
    padding-left: 22px;
  }

  .phase-card li {
    margin-bottom: 2px;
  }

  section.thanks {
    background: #12304A;
    color: #F7F9FC;
    text-align: center;
    justify-content: center;
  }

  section.thanks h1 {
    color: #FFFFFF;
    border-bottom: 5px solid #16A6A1;
  }

---

<!-- _class: title -->
<!-- _paginate: false -->

![width:120](images/ofppt.png)
![width:120](images/solicode.png)

# Labs et technologies

## Projet technique

**Plateforme de cours**

**Réalisé par :** Aziza ELhamyani

**Encadrant :** ES-Saraj Fouad

**Centre de formation :** Solicode Tanger

**Institution :** OFPPT

---

<!-- _class: intro -->

# Projet technique

## Introduction

Un projet technique permet de pratiquer ce que nous apprenons en formation.

Nous utilisons différentes technologies et différents outils pour créer une application web.

## Plateforme de cours

Notre projet est une plateforme web de cours en ligne.

Elle permet aux utilisateurs de consulter des cours et d'apprendre de nouvelles choses.

L'administrateur peut gérer :
- Les cours.
- Les catégories.
- Les contenus des cours.
- Les utilisateurs.
La plateforme permet de trouver les cours facilement et de bien organiser les informations..

---

<!-- _class: stack -->

# Les technologies utilisées

Notre projet utilise plusieurs technologies.

Chaque technologie a un rôle.

<div style="display:grid; grid-template-columns:1fr 1fr; gap:18px 35px;">

<div>

## Structure et design

- **HTML** — Crée la structure des pages.
- **CSS** — Ajoute le style.
- **Tailwind CSS** — Aide à créer le design.

## Langages de programmation

- **JavaScript** — Ajoute des actions dans les pages.
- **PHP** — Gère les informations côté serveur.

</div>

<div>

## Frameworks et bibliothèques

- **Laravel** — Framework PHP.
- **Alpine.js** — Ajoute des interactions dans les pages.

## Base de données et ORM

- **MySQL** — Stocke les informations.
- **Eloquent ORM** — Aide à utiliser la base de données avec Laravel.

</div>
</div>

---

# Comprendre les Labs

## Qu'est-ce qu'un Lab ?

Un Lab est un exercice pratique.

Il permet de découvrir une technologie ou un outil.

## Pourquoi faire des Labs ?

- Découvrir de nouvelles technologies.
- Tester des outils.
- Pratiquer le code.
- Apprendre à résoudre des problèmes.

## Le lien avec le projet technique

Les Labs nous aident à préparer notre projet.

Nous testons les technologies avant de les utiliser dans le projet final.

> Un Lab permet de passer de la théorie à la pratique.

---

<!-- _class: labs -->

# Liste des Labs

<div class="phase-grid">

<div class="phase-card">

## Phase 1 — Outils et technologies (1–10)

<ol>
<li>Qu'est-ce qu'un Lab ? — Découvrir les Labs</li>
<li>Markdown — Écrire des documents</li>
<li>GitHub Pages — Publier un site web</li>
<li>Antigravity — Gérer un projet Python</li>
<li>Marp — Créer des présentations</li>
<li>OpenCode — Environnement de développement</li>
<li>Pandoc — Convertir des documents</li>
<li>OmniRoute — Gérer le routage</li>
<li>Tailwind CSS — Créer le design</li>
<li>Preline — Utiliser des composants web</li>
</ol>

</div>

<div class="phase-card">

## Phase 2 — Méthodes et travail en équipe (11–15)

<ol start="11">
<li>2TUP — Méthode de développement</li>
<li>Design Thinking — Comprendre les besoins</li>
<li>GitHub Issues — Gérer les tâches</li>
<li>Scrum — Méthode de travail en équipe</li>
<li>GitHub Copilot — Aide à la programmation</li>
</ol>

</div>

<div class="phase-card">

## Phase 3 — Développement et langages (16–24)

<ol start="16">
<li>POO — Programmation orientée objet</li>
<li>PHP Native — PHP sans framework</li>
<li>Laravel — Framework PHP</li>
<li>Kotlin — Langage de programmation</li>
<li>ES7 JavaScript — JavaScript moderne</li>
<li>Erreurs JS — Comprendre les erreurs JavaScript</li>
<li>Prompt-Agent-Skill — Utiliser l'IA</li>
<li>Communication avec IA — Parler avec l'IA</li>
</ol>

</div>

<div class="phase-card">

## Phase 4 — Projet et production (25–30)

<ol start="25">
<li>Veille technologique — Suivre les nouveautés</li>
<li>Starter — Utiliser un modèle de projet</li>
<li>Planning — Organiser le travail</li>
<li>Git — Gérer les versions du code</li>
<li>Lab Stack — Découvrir les technologies</li>
<li>Agent — Automatiser des tâches avec l'IA</li>
</ol>

</div>
</div>

---

<!-- _class: thanks -->
<!-- _paginate: false -->

# Merci pour votre attention !

## Avez-vous des questions ?

**Labs et technologies**

Aziza ELhamyani — Solicode Tanger
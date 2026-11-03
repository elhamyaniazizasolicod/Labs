# Compétence d'adaptation de Lab — Structure standard de présentation Marp

## Objectif
Adapter et réaliser tout livrable de lab sous forme d'une présentation Marp moderne et cohérente, tout en respectant strictement le déroulement structurel et la précision technique exigés.

---

## Structure obligatoire des diapositives

Chaque présentation de lab **doit être au format Marp** (`marp: true`) et respecter la structure séquentielle suivante :

### Diapositive 1 : Titre (Nom du lab uniquement)
- **Contenu :** Le titre / nom du lab **uniquement**.
- **Règle :** Ne **jamais** inclure de noms d'auteurs ou de présentateurs, d'identifiants d'étudiants, de noms d'organisations ou de sous-titres superflus sur la Diapositive 1, sauf demande explicite.

### Diapositive 2 : Plan du lab
- **Contenu :** L'ordre du jour de la présentation, strictement formaté ainsi :
  ```markdown
  <!-- _class: light -->

  ## Plan du lab

  1. Introduction
  2. Problèmes rencontrés
  3. Solutions apportées
  ```

### Diapositive 3 : Introduction
- Expliquer brièvement l'objectif, le périmètre et les finalités du lab selon le sujet traité.
- Lister les concepts clés, les outils ou la syntaxe pratiqués au cours du lab.

### Diapositive 4 : Problèmes rencontrés
- Détailler les problèmes techniques concrets, les obstacles, les pièges de syntaxe ou les difficultés de configuration liés au lab.
- Si aucun incident n'est survenu, mentionner explicitement qu'aucun problème technique bloquant n'a été rencontré.

### Diapositive 5 : Solutions apportées
- Documenter les solutions concrètes, les correctifs et les bonnes pratiques appliqués pour résoudre chaque problème ou garantir la conformité.

### Diapositives suivantes : Exemples pratiques & Implémentation
- Inclure les blocs de code pratiques, commandes, démonstrations de syntaxe, diagrammes ou tableaux **directement à l'intérieur des diapositives de la présentation Marp**.
- **Règle :** Ne **pas** créer de fichiers `.md` d'exercices ou annexes séparés ; intégrer l'intégralité des livrables pratiques au sein de la présentation.

---

## Normes de présentation & conception Marp

1. **Toujours utiliser Marp :**
   - Chaque lab doit être formaté pour Marp avec un en-tête frontmatter YAML valide :
     ```yaml
     ---
     marp: true
     theme: default
     paginate: true
     size: 16:9
     style: |
       ...
     ---
     ```
2. **Séparateurs de diapositives :**
   - Utiliser `---` entre chaque diapositive.
3. **Rythme visuel alterné :**
   - Alterner entre les sections à fond sombre (standard) et les sections à fond clair (`<!-- _class: light -->`) afin de maintenir l'attention du public et garantir une lisibilité optimale.
4. **Typographie & Code :**
   - Titres clairs (`Anton`, `Impact`, ou sans-serif).
   - Corps de texte à fort contraste (`Inter`, system-ui).
   - Toujours spécifier le langage pour la coloration syntaxique des blocs de code (ex. : ```` ```html ````, ```` ```javascript ````, ```` ```bash ````, ```` ```php ````).
   - Formater correctement les tableaux Markdown avec un alignement explicite des colonnes (`:---`, `:---:`, `---:`).

---

## Directives opérationnelles

- **Aucun nom de présentateur :** Conserver la diapositive de couverture strictement dédiée au sujet du lab.
- **Fichier de livrable unique :** Conserver toute la documentation et les exemples à l'intérieur du fichier de lab désigné (ex. : `lab-<sujet>.md`).
- **Pas de requêtes Git superflues :** Valider et pousser proprement (commit/push) à la demande sans exécuter de boucles d'inspection redondantes.

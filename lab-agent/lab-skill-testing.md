---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
    letter-spacing: 0.5px;
  }
  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0284c7;
  }
  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }
  section.light pre, section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th {
    background-color: #0284c7;
    color: #ffffff;
    padding: 10px;
  }
  td {
    padding: 8px;
    border-bottom: 1px solid #334155;
  }
  section.light td {
    border-bottom: 1px solid #cbd5e1;
  }
---

# Testing & Validation of Agent Skills

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Purpose & Scope:**
  - Standardized testing and verification protocol for custom agent skills across dual runtime environments: **Google Antigravity** and **VS Code GitHub Copilot**.
  - Systematic validation of skill activation, prompt compliance, and strict output constraint enforcement.
- **Evaluated Skills:**
  - `task-structuring`: Automated task decomposition, INVEST slicing, and acceptance criteria formulation.
  - `marp-lab-presentation`: Standardized, single-file Marp presentation generator adhering to strict slide architectures.
- **Key Technologies:**
  - Progressive disclosure engine (`.agents/skills/`), custom prompt files (`.github/prompts/`), Marp Markdown presentation engine.

---
<!-- _class: light -->

## 2. Problems Encountered

- **Incident 1: Cross-Platform Execution Disparity**
  - Antigravity automatically detects skills via directory hierarchy (`.agents/skills/`), whereas VS Code GitHub Copilot required manual workspace context bridging (`#file:` prompts or `.github/copilot-instructions.md`).
- **Incident 2: Metadata Contamination on Title Slides**
  - Standard LLM behaviors persistently injected extraneous presenter metadata (author name, organization, dates) on Slide 1, violating lab anonymity guidelines.
- **Incident 3: Presentation Layout & CSS Inconsistency**
  - Dynamic alternations between dark and light theme slides caused color contrast degradation on embedded code blocks and table headers.

---

## 3. Solutions Implemented

- **Solution 1: Unified Multi-Platform Deployment Architecture**
  - Synchronized skills between native Antigravity definitions (`.agents/skills/`) and GitHub Copilot prompt references (`.github/prompts/*.prompt.md`).
- **Solution 2: Strict Negative Constraints & Zero-Tolerance Gates**
  - Embedded unambiguous prohibitions against slide 1 metadata within prompt frontmatter and evaluation checklists.
- **Solution 3: Scoped Dual-Theme CSS Design System**
  - Implemented explicit CSS rules for `section` (dark) and `section.light` (light) covering headings, code blocks, borders, and Markdown tables.

---
<!-- _class: light -->

## Practical Test: Antigravity Skill Execution

```markdown
# Antigravity Test Scenario: Task Structuring
User Prompt:
"Je dois concevoir un module de gestion des utilisateurs en Node.js avec validation 
 des entrées et hachage de mot de passe. Utilise le skill task-structuring."

Validation Criteria:
1. In-Scope vs Out-of-Scope boundaries established
2. Structured task breakdown table (T1, T2, ...) with INVEST properties
3. Acceptance criteria formatted in Given - When - Then syntax
4. Definition of Done (DoD) checklist with zero TBD / placeholder values
```

- **Result:** Antigravity seamlessly routed to `task-structuring/SKILL.md` and produced an actionable task breakdown.

---

## Practical Test: GitHub Copilot Prompt Integration

```markdown
# VS Code Copilot Chat Command:
@workspace Applique le prompt #file:marp-lab-presentation.prompt.md pour le sujet :
"Sécurisation des routes API et gestion des tokens JWT en Node.js"

Structural Rules Enforced:
- Slide 1: "Sécurisation des routes API et gestion des tokens JWT en Node.js" ONLY
- Slide 2: Strict 3-part Lab Plan (<!-- _class: light -->)
- Slide 3: Introduction & Core Objectives
- Slide 4: Concrete Technical Problems Encountered
- Slide 5: Solutions Implemented & Best Practices
- Subsequent: Practical code implementations with syntax-declared fences
```

- **Result:** Copilot strictly complied with the 5-slide baseline without injecting presenter names.

---
<!-- _class: light -->

## Practical Test: Dual-Theme Code Implementation

```javascript
// Example: Verified Token Verification Middleware
const jwt = require("jsonwebtoken");

function authenticateToken(req, res, next) {
  const authHeader = req.headers["authorization"];
  const token = authHeader && authHeader.split(" ")[1];

  if (!token) {
    return res.status(401).json({ error: "Access token required" });
  }

  jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, user) => {
    if (err) {
      return res.status(403).json({ error: "Invalid or expired token" });
    }
    req.user = user;
    next();
  });
}
```

---

## Summary & Compliance Matrix

| Validation Criteria | Target Specification | Antigravity Result | Copilot Result | Overall Status |
|:---|:---|:---:|:---:|:---:|
| **Slide 1 Isolation** | Lab title only; zero author/date metadata | Compliant | Compliant | ✅ Validated |
| **Strict 3-Part Plan** | 1. Intro, 2. Problems, 3. Solutions | Compliant | Compliant | ✅ Validated |
| **Theme Alternation** | Alternate dark and light slides cleanly | Compliant | Compliant | ✅ Validated |
| **Syntax Highlighting** | Declared languages on all code blocks | Compliant | Compliant | ✅ Validated |
| **Single-File Output** | Everything encapsulated in single `.md` | Compliant | Compliant | ✅ Validated |

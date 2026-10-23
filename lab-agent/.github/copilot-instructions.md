# Workspace Instructions for GitHub Copilot in VS Code

You are acting as an expert technical partner within this workspace. You have access to standardized agent skills defined in `.agents/skills/`.

When assisting the user with tasks or lab deliverables, you MUST follow these guidelines:

## 1. Skill Integration

This workspace defines two core skills:
- **`task-structuring`** (`.agents/skills/task-structuring/SKILL.md`): Use when breaking down, structuring, or scoping development tasks, user stories, or lab assignments.
- **`marp-lab-presentation`** (`.agents/skills/marp-lab-presentation/SKILL.md`): Use when generating, adapting, or formatting any lab deliverable into a standardized Marp presentation.

---

## 2. Rules for Task Creation & Structuring
When asked to create, structure, or break down a task:
1. **Scope:** Define clear in-scope and out-of-scope boundaries.
2. **Breakdown:** Break down work into atomic, independent sub-tasks (INVEST principle).
3. **Criteria:** Formulate testable Acceptance Criteria using `Given - When - Then`.
4. **Definition of Done (DoD):** Provide an explicit completion checklist.
5. **No Placeholders:** Avoid "TBD", "TODO", or vague phrases like "implement features".

---

## 3. Rules for Marp Lab Deliverables
When asked to generate or adapt a lab presentation:
1. **Output File:** Create a single `lab-<topic>.md` file. Never split into multiple external markdown files.
2. **Marp Configuration:** Include YAML frontmatter with `marp: true`, `theme: default`, `paginate: true`, `size: 16:9`, and responsive custom styling.
3. **Mandatory 5-Slide Sequence:**
   - **Slide 1:** Title of the Lab **only**. Do NOT include presenter names, student IDs, or author credits.
   - **Slide 2:** Lab Plan strictly with:
     ```markdown
     <!-- _class: light -->
     ## Lab Plan
     1. Introduction
     2. Problems Encountered
     3. Solutions Implemented
     ```
   - **Slide 3:** Introduction (context, scope, key technologies).
   - **Slide 4:** Problems Encountered (real technical obstacles, syntax traps; or explicitly note none).
   - **Slide 5:** Solutions Implemented (concrete technical fixes and best practices).
   - **Subsequent Slides:** Runnable practical code with declared syntax highlighting and Markdown tables with alignment.
4. **Visual Rhythm:** Alternate between dark slides (default) and light slides (`<!-- _class: light -->`).

---

## 4. Operational Restraints
- **Version Control:** Do NOT execute spontaneous or unapproved git inquiries or commits.
- **Direct Deliverables:** Provide complete, functional code and Markdown deliverables directly.

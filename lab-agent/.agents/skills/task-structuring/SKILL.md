---
name: task-structuring
description: Use when breaking down, structuring, or scoping development tasks, lab assignments, or complex user stories before implementation
---

# Task Structuring Skill

## Overview
Deconstruct any high-level objective, feature request, or lab assignment into clear, atomic, and testable tasks with explicit acceptance criteria and dependencies.

The core rule is: **A task is not ready to start until its boundaries, prerequisites, and Definition of Done (DoD) are explicitly defined.**

---

## When to Use

Use this skill when:
- Receiving an ambiguous or complex feature request or lab subject.
- Planning multi-step implementations or refactoring work.
- Decomposing assignments into sequential, parallel, or reviewable chunks.
- Defining precise acceptance criteria before touching code.

Do NOT use for:
- One-line trivial fixes (e.g. fixing a typo, updating a single variable name).
- Creating slide presentations (use `marp-lab-presentation` instead).

---

## Standard Task Structuring Framework (The 5-Step Process)

Whenever asked to structure a task, systematically apply this 5-step framework:

### 1. Scope & Objective Framing
- **Goal:** One clear sentence explaining the business or technical purpose.
- **In-Scope:** Explicit list of what is included and expected.
- **Out-of-Scope:** Explicit list of what will NOT be done (prevents scope creep).

### 2. Dependency & Prerequisite Mapping
- Identify required tools, libraries, environment configurations, or preceding tasks.
- Classify tasks as **Sequential** (Task B needs Task A) or **Parallel** (can run concurrently).

### 3. Atomic Breakdown
Break the work into small sub-tasks. Each sub-task must satisfy the **INVEST** principle:
- **I**ndependent (minimal overlap).
- **N**egotiable / Modular.
- **V**aluable (delivers a verifiable increment).
- **E**stimable / Scoped (clearly bounded).
- **S**mall (achievable in one focused session).
- **T**estable (clear pass/fail outcome).

### 4. Acceptance Criteria (Given - When - Then)
For each sub-task, provide unambiguous validation conditions:
- **Given** [initial state or preconditions].
- **When** [action or trigger occurs].
- **Then** [expected verifiable result].

### 5. Definition of Done (DoD)
Checklist that must pass before declaring the task complete:
- [ ] Code/implementation completed according to specifications.
- [ ] Edge cases handled and documented.
- [ ] Manual or automated verification executed with passing evidence.
- [ ] Documentation updated if relevant.

---

## Output Template

When outputting a structured task, produce the following Markdown structure:

```markdown
# [Task Title]

## 1. Context & Objectives
- **Objective:** <One-sentence summary>
- **Scope:**
  - ✅ In-Scope: <Items>
  - ❌ Out-of-Scope: <Items>

## 2. Prerequisites & Dependencies
- Prerequisites: <Tools, env, files needed>
- Blocked by: <Preceding tasks or None>

## 3. Sub-Task Breakdown
| ID | Sub-Task | Type | Prerequisites | Est. Complexity |
|:---|:---|:---:|:---|:---:|
| T1 | <Actionable name> | Core / Setup / Test | None | S / M / L |
| T2 | <Actionable name> | Core | T1 | S / M / L |
| T3 | <Actionable name> | Verification | T2 | S / M / L |

## 4. Detailed Tasks & Acceptance Criteria

### T1: <Sub-Task Name>
- **Description:** <What needs to be done>
- **Acceptance Criteria:**
  - Given <initial context>, When <action taken>, Then <expected result>.

### T2: <Sub-Task Name>
- **Description:** <What needs to be done>
- **Acceptance Criteria:**
  - Given <initial context>, When <action taken>, Then <expected result>.

## 5. Definition of Done (DoD)
- [ ] Criterion 1 verified
- [ ] Criterion 2 verified
- [ ] Output artifacts produced without placeholders
```

---

## Common Mistakes & Anti-Patterns

| Anti-Pattern | Why It Fails | Correction |
|:---|:---|:---|
| **Vague task names** ("Do auth") | Agent/Developer does not know where to stop. | Use action verbs + clear boundaries ("Implement JWT token validation middleware"). |
| **Monolithic task** | Too many points of failure, impossible to test incrementally. | Split into atomic subtasks with discrete verification points. |
| **Missing Out-of-Scope** | Leads to endless scope expansion and tangential work. | Explicitly list excluded features up front. |
| **No verification criteria** | "Done" becomes subjective and untested. | Enforce Given-When-Then criteria for each sub-task. |

---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

  section {
    background: #70020f;
    color: #ffe0e3;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 26px;
    padding: 50px 60px;
    text-transform: uppercase;
    justify-content: flex-start;
  }

  h1, h2 {
    font-family: 'Anton', Impact, 'Arial Narrow', sans-serif;
    font-weight: 400;
    color: #ffe0e3;
    line-height: 0.98;
    letter-spacing: -1px;
    margin: 0 0 28px 0;
  }

  h1 { font-size: 100px; }
  h2 { font-size: 68px; }

  h3 {
    font-size: 28px;
    margin: 0 0 10px 0;
    color: #e6d9dc;
  }

  p { margin: 0 0 12px 0; }

  section.light {
    background: #ffdde0;
    color: #70020f;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #70020f;
  }

  section.light p,
  section.light li {
    color: #111;
  }

  section.title {
    justify-content: space-between;
  }

  section.title h1 {
    font-size: 116px;
    margin-top: 8px;
  }

  section.title::before {
    content: "DEV\\A ENV";
    white-space: pre;
    position: absolute;
    right: -15px;
    bottom: 10px;
    font-family: 'Anton', Impact, sans-serif;
    font-size: 250px;
    line-height: 0.85;
    color: #5f0010;
    z-index: 0;
  }

  section.title h1,
  section.title .by {
    position: relative;
    z-index: 1;
  }

  .by {
    font-size: 20px;
    text-transform: none;
    margin-top: 20px;
  }

  .by strong {
    font-family: 'Anton', Impact, sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 27px;
    display: block;
  }

  ul, ol {
    font-size: 30px;
    line-height: 1.35;
  }

  li { margin-bottom: 12px; }

  code {
    background: rgba(255, 224, 227, 0.13);
    padding: 2px 7px;
    border-radius: 4px;
    text-transform: none;
  }

  section.light code {
    background: rgba(112, 2, 15, 0.09);
  }

  .subtitle {
    font-size: 25px;
    color: #e6d9dc;
    text-transform: none;
  }

  .small {
    font-size: 21px;
    line-height: 1.35;
    text-transform: none;
  }

  .step {
    font-family: 'Anton', Impact, sans-serif;
    font-size: 31px;
    color: #ffe0e3;
  }

  section.light .step {
    color: #70020f;
  }
---

<!-- _class: title -->

# Development<br>Environment

<div class="by">
  <strong>Etudiant : aziza elhamyani</strong>
  <strong>Prof :ES-SARRAJ Fouad</strong>
  Development Environment Lab
</div>

---
<!-- TODO: -->
<!-- _class: light -->

## Lab Plan

1. Problems encountered during the lab
2. Showing hidden files and folders
3. IDE & Extension Configuration


---

## Problems Encountered

- Hidden files and folders, such as `.git`, were not visible in the file explorer.
- The `README.md` file extention `.md` not displayed as expected.
- We sometimes forgot which lines of code needed to be modified.

---
<!-- FIXME: -->
<!-- _class: light -->

## Configure a VS Code Extension

### Solutions Implemented

### 01 — Show hidden files

Enabled the relevant file-explorer setting so hidden files and folders, including `.git`, could be seen.

### 02 — Display .md extention

Adjusted the relevant VS Code option/extension setting so `.md` appeared in the explorer.

### 03 — Remember code changes

Installed **Todo Lens** to highlight important comments and reminders in the code.

---

## 3. What Is an IDE?

An **IDE** (Integrated Development Environment) brings the tools for building software together in one workspace.

- **Editor:** write and organize code
- **Terminal:** run commands without leaving the workspace
- **Debugger:** find and fix problems
- **Extensions:** add tools for a language or task

<p class="small">Visual Studio Code is a code editor that becomes an IDE-like workspace through its built-in tools and extensions.</p>

---

<!-- _class: light -->

## Configure a VS Code Extension

1. Open **Extensions** with <code>Ctrl + Shift + X</code>.
2. Search for the extension you need and check its publisher and description.
3. Select **Install**, then follow any setup instructions.
4. Open the extension's page or **Settings** to adjust its options.
5. Choose **User** settings for your account or **Workspace** settings for this project.

<p class="small">Example: install Live Server, then use its extension page/settings to choose how it launches your local web page.</p>

---

## Keep Extensions Useful

- Install only extensions that support your work.
- Review an extension's settings after installing it.
- Disable or uninstall extensions you no longer use.
- Share project-specific settings with teammates when they improve consistency.

---
marp: true
theme: gaia
paginate: true
style: |
  section {
    font-size: 25px;
    padding: 50px;
  }
  h1 {
    color: #0077b6;
  }
  h2 {
    color: #bdc3cb;
  }
  section.cover {
    text-align: center;
    justify-content: center;
    background: #03045e;
    color: white;
  }
  section.cover h1 {
    color: white;
    font-size: 42px;
  }
  section.highlight {
    background: #caf0f8;
  }
---
<!-- Bonjour, aujourd'hui je vais vous présenter le Lab sur l'environnement de développement.-->
<!-- _class: cover -->

![width:120 OFPPT](images/ofppt.png)
![width:120 Solicode](images/solicode.png)

# Development<br>Environment

## Development Environent Lab

Réalisé par : aziza elhamyani

Encadré par : ES-SARRAJ Fouad

---
<!-- Dans ce Lab, nous allons voir les problèmes et les solutions dans VS Code -->
<!-- TODO: -->
<!-- _class: light -->

## Lab Plan

1. Problems encountered during the lab
2. Showing hidden files and folders
3. IDE & Extension Configuration


---
<!-- Pendant ce Lab, nous avons rencontré des problèmes avec les fichiers cachés et les extensions. -->
## Problems Encountered

- Hidden files and folders, such as `.git`, were not visible in the file explorer.
- The `README.md` file extention `.md` not displayed as expected.
- We sometimes forgot which lines of code needed to be modified.

---
<!-- Pour résoudre ces problèmes, nous avons affiché les fichiers cachés et installé Todo Lens. -->
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
<!-- Un IDE est un outil qui permet d'écrire, de tester et de corriger le code. -->
## 3. What Is an IDE?

An **IDE** (Integrated Development Environment) brings the tools for building software together in one workspace.

- **Editor:** write and organize code
- **Terminal:** run commands without leaving the workspace
- **Debugger:** find and fix problems
- **Extensions:** add tools for a language or task

<p class="small">Visual Studio Code is a code editor that becomes an IDE-like workspace through its built-in tools and extensions.</p>

---
<!-- Pour installer une extension, nous ouvrons VS Code, nous cherchons l'extension et nous cliquons sur Install. -->
<!-- _class: light -->

## Configure a VS Code Extension

1. Open **Extensions** with <code>Ctrl + Shift + X</code>.
2. Search for the extension you need and check its publisher and description.
3. Select **Install**, then follow any setup instructions.
4. Open the extension's page or **Settings** to adjust its options.
5. Choose **User** settings for your account or **Workspace** settings for this project.

<p class="small">Example: install Live Server, then use its extension page/settings to choose how it launches your local web page.</p>

---
<!-- Nous devons choisir les extensions utiles pour faciliter notre travail. -->
## Keep Extensions Useful

- Install only extensions that support your work.
- Review an extension's settings after installing it.
- Disable or uninstall extensions you no longer use.
- Share project-specific settings with teammates when they improve consistency.

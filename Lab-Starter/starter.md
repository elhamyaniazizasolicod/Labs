---
marp: true
theme: default
paginate: true
---

# Lab-Starter 2
## Préparer l’environnement de développement

**Objectif :** Installer et configurer Visual Studio Code et les outils nécessaires au développement Web sous Windows.

Présenté par : Oumaima Mahfoud  
SOLICODE

---

# 1. Objectifs du Lab

- Préparer un environnement de développement sous Windows.
- Installer et configurer Visual Studio Code.
- Installer les outils nécessaires au développement Web.
- Vérifier le bon fonctionnement des outils installés.

---

# 2. Installation de Visual Studio Code

Visual Studio Code est un éditeur de code utilisé pour développer des applications Web.

**Étapes :**

1. Télécharger VS Code depuis le site officiel.
2. Lancer le fichier d’installation.
3. Accepter les conditions d’utilisation.
4. Terminer l’installation.
5. Ouvrir Visual Studio Code.

Site officiel : https://code.visualstudio.com/

---

# 3. Installation de Git

Git est un système de gestion de versions qui permet de suivre les modifications du code.

**Étapes :**

1. Télécharger Git pour Windows.
2. Installer Git.
3. Ouvrir PowerShell.
4. Vérifier l’installation avec :

```bash
git --version
```

Site officiel : https://git-scm.com/

---

# 4. Installation de Node.js et npm

**Node.js** permet d’exécuter JavaScript en dehors du navigateur.

**npm** permet d’installer et de gérer les packages JavaScript.

**Vérification :**

```bash
node -v
npm -v
```

Téléchargement : https://nodejs.org/

---

# 5. Préparation de l’environnement PHP

PHP est un langage de programmation utilisé pour développer des applications Web côté serveur.

Pour travailler avec PHP sous Windows, on peut utiliser XAMPP, qui fournit notamment PHP, Apache et MariaDB.

**Étapes :**

1. Télécharger et installer XAMPP.
2. Vérifier la présence de PHP.
3. Démarrer Apache depuis le panneau de contrôle XAMPP si nécessaire.
4. Vérifier la version de PHP.

```bash
php -v
```

Sites officiels :

- https://www.php.net/
- https://www.apachefriends.org/

---

# 6. Configuration de Visual Studio Code

Les extensions permettent d'ajouter des fonctionnalités à VS Code.

Extensions recommandées :

- **PHP Intelephense** : assistance au développement PHP.
- **Prettier** : formatage du code.
- **Live Server** : lancement local des pages HTML.
- **ESLint** : analyse du code JavaScript.
 - **Todo Tree** : repérer et afficher les commentaires TODO et FIXME dans le code.

Pour installer une extension, ouvrir l'onglet Extensions et rechercher son nom.

---

# 7. Organisation du projet

Créer un dossier de travail pour les projets Web.

Exemple :

```text
MonProjet/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── script.js
└── README.md
```

Ouvrir le dossier dans Visual Studio Code avec :

```bash
code .
```

Cette organisation facilite la gestion des fichiers du projet.

---

# 8. Vérification de l'environnement

Ouvrir PowerShell et exécuter les commandes suivantes :

```bash
git --version
node -v
npm -v
php -v
code --version
```

*Remarque : la commande `php -v` nécessite que PHP soit accessible depuis le PATH.*



---

# Conclusion

La préparation de l'environnement est une étape essentielle avant de commencer un projet Web.

Un environnement correctement configuré permet de travailler efficacement, d'organiser son code et d'utiliser les outils adaptés au développement.

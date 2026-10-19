---
marp: true
theme: gaia
paginate: true
---

<!-- _class: lead -->

# Laravel

- Framework PHP pour le développement Web
- Son rôle • ses outils • ses usages

---

## Plan de la présentation

1. Qu’est-ce que Laravel ?
2. Son rôle dans une application Web
3. Le modèle MVC et le parcours d’une requête
4. Ses outils et ses avantages
5. Exemple de route
6. Cas d’utilisation et activité

---

## 1. Qu’est-ce que Laravel ?

- Framework **open source** écrit en **PHP**
- Structure et composants réutilisables
- Principalement utilisé côté serveur
- Pour créer des sites dynamiques, des applications métier et des API
- Laravel organise PHP ; il ne le remplace pas

---

## 2. Son rôle dans une application Web

- Recevoir les requêtes HTTP
- Appliquer les règles métier
- Lire ou modifier les données
- Renvoyer une page HTML ou des données JSON
- Organiser le code pour faciliter son évolution

---

## 3. Architecture MVC

| Composant | Rôle | Exemple Laravel |
|:--|:--|:--|
| **Model** | Représente et manipule les données | Eloquent |
| **View** | Présente l’information | Blade |
| **Controller** | Coordonne le traitement d’une requête | Contrôleur PHP |

---

## Parcours d’une requête

**Navigateur** → **Route** → **Contrôleur** → **Modèle / base de données**

- **Réponse :** vue HTML ou données JSON

- Une route associe une URL et une méthode HTTP à un traitement
- Le contrôleur applique la logique et coordonne les composants

---

## 4. Outils courants

- **Routage** — associer des URL à du code
- **Middleware** — filtrer les requêtes, par exemple pour l’authentification
- **Eloquent ORM** — manipuler les données avec des modèles PHP
- **Migrations** — versionner la structure de la base de données
- **Blade** — construire des vues HTML réutilisables
- **Tests, validation, cache et files d’attente** — outils intégrés à l’écosystème

---

## Pourquoi choisir Laravel ?

- Démarrer plus vite grâce aux composants prêts à l’emploi
- Garder une structure cohérente
- Réutiliser des conventions éprouvées
- Faciliter les tests et la maintenance
- Profiter d’un vaste écosystème PHP

- Le framework aide, mais ne remplace ni la conception ni les tests ni les bonnes pratiques de sécurité

---

## 5. Exemple : une route simple

```php
use Illuminate\Support\Facades\Route;

Route::get('/bonjour', function () {
    return 'Bonjour !';
});
```

- Fichier : `routes/web.php`
- Méthode HTTP : `GET`
- URL : `/bonjour`
- Résultat : réponse texte

---

## 6. Quand utiliser Laravel ?

- Sites Web avec contenu dynamique
- Applications métier avec utilisateurs et rôles
- Formulaires et gestion de données
- API pour applications mobiles ou front-end
- Projets PHP qui bénéficient d’une structure et d’outils communs

---

## Activité de recherche

- Ouvrir la documentation officielle de Laravel
- Identifier trois fonctionnalités et expliquer leur rôle
- Représenter le parcours d’une requête sous forme de schéma
- Comparer Laravel et du PHP sans framework
- Proposer un projet adapté à Laravel et justifier le choix

---

## Ressources

- [Documentation officielle Laravel](https://laravel.com/docs)
- [Site officiel Laravel](https://laravel.com/)
- [Manuel PHP en français](https://www.php.net/manual/fr/)

---

<!-- _class: lead -->

# À retenir

- Laravel est un framework PHP côté serveur
- MVC aide à organiser le code
- Routage • Eloquent • migrations • Blade
- Apprendre PHP et les bases du Web reste essentiel

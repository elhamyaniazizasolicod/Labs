---
marp: true
theme: default
paginate: true
style: |
  section {
    font-size: 26px;
    padding: 40px 60px;
  }
  h1 {
    color: #c2410c;
    font-size: 1.5em;
  }
  h2 {
    color: #c2410c;
    font-size: 1.3em;
  }
  code {
    font-size: 0.85em;
  }
  pre {
    font-size: 0.7em;
  }
  table {
    font-size: 0.85em;
  }
  section.small pre {
    font-size: 0.6em;
  }
---

# Qu'est-ce que l'architecture MVC ?

**MVC** signifie **Model–View–Controller** (Modèle–Vue–Contrôleur) : une façon de répartir le code en trois rôles.

- **Model (Modèle) :** les données et leur accès
- **View (Vue) :** ce que voit l'utilisateur
- **Controller (Contrôleur) :** traite la demande et coordonne les deux

Résultat : un code plus lisible et plus facile à faire évoluer.

<!--
MVC est une manière d'organiser le code. Au lieu de mettre toutes les responsabilités au même endroit, on sépare les données, l'affichage et le traitement des demandes. Nous allons suivre le même exemple d'articles pour voir le rôle de chaque partie.
-->

---

## Le Model (Modèle)

Avec Laravel, un modèle **Eloquent** facilite la lecture et la modification des données.

**`app/Models/Article.php`**

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
}
```

- Laravel associe ce modèle à la table `articles`
- Exemple : `Article::all()` récupère tous les articles

<!--
Le modèle décrit ici l'objet Article. Laravel s'appuie sur Eloquent pour relier ce modèle aux données stockées dans la table articles. Le contrôleur pourra lui demander les articles, sans avoir à écrire lui-même toute la requête SQL.
-->

---

<!-- _class: small -->

## La View (Vue)

Les vues Blade se trouvent dans `resources/views`.

**`resources/views/articles.blade.php`**

```html
<h1>Liste des articles</h1>

<ul>
    @forelse ($articles as $article)
        <li>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </li>
    @empty
        <li>Aucun article pour le moment.</li>
    @endforelse
</ul>
```

- `@forelse` parcourt la liste et gère le cas vide
- `{{ ... }}` affiche une valeur (échappée par défaut)

<!--
La vue s'occupe de l'affichage, pas de la recherche en base de données. Ici, Blade parcourt les articles reçus et construit une liste HTML. Les doubles accolades affichent le titre et le contenu en échappant les caractères spéciaux.
-->

---

<!-- _class: small -->

## Le Controller (Contrôleur)

**Route** (`routes/web.php`)

```php
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/articles', [ArticleController::class, 'index']);
```

**`app/Http/Controllers/ArticleController.php`**

```php
class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles', ['articles' => $articles]);
    }
}
```

1. La route relie `GET /articles` à `index`
2. `Article::all()` demande les articles au modèle
3. `view(...)` envoie la liste à `articles.blade.php`

<!--
Quand le navigateur demande /articles, la route appelle index. Le contrôleur demande au modèle tous les articles, puis les transmet à la vue Blade. Le contrôleur coordonne les deux autres composants, mais il ne construit pas lui-même le HTML.
-->

---

## Fonctionnement global de MVC

```text
Utilisateur ── GET /articles ──► Route ──► Controller
                                              │  ▲
                                              ▼  │
                                        Model ⇄ Base de données
                                              │
                                              ▼
Utilisateur ◄────── HTML ◄────────────── View (Blade)
```

| Composant | Rôle dans l'exemple |
| --- | --- |
| **Model** | Accède aux données avec Eloquent |
| **View** | Affiche les articles avec Blade |
| **Controller** | Coordonne la requête, le modèle et la vue |

**Conclusion :** MVC sépare les responsabilités et rend l'application plus claire à faire évoluer.

**Sources :** [laravel.com/docs](https://laravel.com/docs) (Eloquent, Vues, Contrôleurs)

<!--
Pour résumer, la route oriente la demande, le contrôleur coordonne le travail, le modèle accède aux données et la vue les affiche. En séparant ces rôles, MVC aide l'équipe à comprendre et à faire évoluer l'application plus facilement.
-->
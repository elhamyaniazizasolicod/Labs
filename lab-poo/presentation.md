---
marp: true
theme: default
paginate: true
---

# Programmation Orientée Objet (POO) en PHP

## Formation complète – De débutant à avancé

**Objectif :** Comprendre et maîtriser les concepts de la POO avant d'apprendre Laravel.

---

# Plan de la présentation

1. Introduction à la POO
2. Les classes et les objets
3. Les attributs et les méthodes
4. Le constructeur et le destructeur
5. Les getters et les setters
6. Les modificateurs d'accès
7. Les quatre piliers de la POO
8. Les mots-clés importants en PHP
9. Les concepts avancés

---

# 1. Introduction à la POO

## Définition

La Programmation Orientée Objet (POO) est une méthode de programmation qui consiste à organiser le code autour de classes et d'objets.

Un objet représente un élément du monde réel ou un concept informatique.

**Exemples :**
- Un étudiant.
- Une voiture.
- Un produit.
- Un utilisateur.
- Une matière.

La POO permet de structurer un programme de manière claire et organisée.

---

# Pourquoi utiliser la POO ?

La POO permet de :

- Organiser le code en plusieurs classes.
- Réutiliser le code.
- Éviter les répétitions.
- Faciliter la maintenance.
- Protéger les données.
- Développer des applications complexes.

**Exemple :**

Dans une application de gestion scolaire, nous pouvons créer des classes :

- `Etudiant`
- `Enseignant`
- `Matiere`
- `Classe`

Chaque classe possède ses propres données et fonctionnalités.

---

# Programmation procédurale vs POO

## Programmation procédurale

Le programme est organisé autour de fonctions et d'instructions.

```php
<?php

$nom = "Ahmed";

function afficherNom($nom) {
    echo $nom;
}

afficherNom($nom);
```

## Programmation orientée objet

Le programme est organisé autour de classes et d'objets.

```php
<?php

class Etudiant {

    public $nom;

    public function afficherNom() {
        echo $this->nom;
    }
}

$e = new Etudiant();
$e->nom = "Ahmed";
$e->afficherNom();
```

---

# Avantages de la POO

| Avantage | Explication |
|---|---|
| Réutilisation | Réutiliser le code |
| Organisation | Séparer les responsabilités |
| Encapsulation | Protéger les données |
| Maintenance | Modifier plus facilement le code |
| Héritage | Partager des fonctionnalités |
| Évolutivité | Ajouter de nouvelles fonctionnalités |

---

# 2. Les classes et les objets
## Définition d'une classe
Une classe est un modèle qui permet de créer des objets.
Elle définit :
- Les attributs : les données.
- Les méthodes : les actions.

**Exemple :**

Une classe `Voiture` peut contenir :

- Marque.
- Couleur.
- Vitesse.
- Démarrer.
- Accélérer.
---

# Définition d'un objet

Un objet est une instance d'une classe.

Il possède ses propres valeurs pour les attributs d'instance et peut utiliser les méthodes définies dans sa classe.

**Exemple :**

La classe `Voiture` représente le modèle.

Les objets peuvent être :

- Une voiture Renault rouge.
- Une voiture Peugeot noire.
- Une voiture Toyota blanche.

---

# Différence entre classe et objet

<image-placeholder />

| Classe | Objet |
|---|---|
| Modèle | Instance du modèle |
| Définit les attributs | Possède des valeurs |
| Définit les méthodes | Utilise les méthodes |

**Analogie :**

La classe est le plan d'une maison.

L'objet est la maison construite à partir de ce plan.

---

# Création d'une classe en PHP

Pour créer une classe, on utilise le mot-clé `class`.

```php
<?php

class Etudiant {

    public $nom;
    public $age;

}
```

Ici :

- `Etudiant` est le nom de la classe.
- `$nom` est un attribut.
- `$age` est un attribut.

---

# Instanciation d'un objet

L'instanciation consiste à créer un objet à partir d'une classe.

On utilise le mot-clé `new`.

```php
<?php

class Etudiant {

    public $nom;

}

$etudiant1 = new Etudiant();

$etudiant1->nom = "Ahmed";

echo $etudiant1->nom;
```

**Résultat :**

```text
Ahmed
```

---

# 3. Les attributs et les méthodes

## Les attributs (propriétés)

Les attributs représentent les informations ou les caractéristiques d'un objet.

**Exemple :**

```php
class Etudiant {

    public $nom;
    public $age;
    public $email;

}
```

Un étudiant possède un nom, un âge et une adresse email.

---

# Les méthodes

Les méthodes sont des fonctions définies à l'intérieur d'une classe.

Elles représentent les actions qu'un objet peut effectuer.

```php
class Etudiant {

    public $nom;

    public function afficherNom() {

        echo $this->nom;

    }
}
```

**Exemple d'utilisation :**

```php
$e = new Etudiant();

$e->nom = "Ahmed";

$e->afficherNom();
```

---

# La variable $this

## Définition

`$this` représente l'objet actuel à l'intérieur d'une méthode non statique.

Elle permet d'accéder aux attributs et aux méthodes de cet objet.

```php
class Etudiant {

    public $nom;

    public function afficher() {

        echo $this->nom;

    }
}
```

**Pourquoi utiliser `$this` ?**

Pour accéder aux données de l'objet sur lequel la méthode est appelée.

---

# Les méthodes d'instance

Une méthode d'instance est une méthode non statique qui s'utilise à partir d'un objet.

```php
class Voiture {

    public function demarrer() {

        echo "La voiture démarre";

    }
}

$voiture = new Voiture();

$voiture->demarrer();
```

**Résultat :**

```text
La voiture démarre
```

On utilise `->` pour appeler une méthode d'instance.

---

# 4. Le constructeur et le destructeur

## Le constructeur : __construct()

Le constructeur est une méthode spéciale appelée automatiquement lors de la création d'un objet.

Il permet d'initialiser les attributs de l'objet.

```php
class Etudiant {

    public $nom;

    public function __construct($nom) {

        $this->nom = $nom;

    }
}

$e = new Etudiant("Ahmed");

echo $e->nom;
```

**Résultat :**

```text
Ahmed
```

---

# Le destructeur : __destruct()

Le destructeur est une méthode spéciale appelée lorsque l'objet n'a plus de référence ou lorsque le script se termine.

```php
class Etudiant {

    public function __construct() {

        echo "Objet créé<br>";

    }

    public function __destruct() {

        echo "Objet détruit";

    }
}

$e = new Etudiant();
unset($e);
```

**Résultat :**

```text
Objet créé
Objet détruit
```

Le destructeur peut servir à effectuer un nettoyage de ressources.

---

# Initialisation des objets

L'initialisation consiste à donner des valeurs aux attributs lors de la création d'un objet.

```php
class Produit {

    public $nom;
    public $prix;

    public function __construct($nom, $prix) {

        $this->nom = $nom;
        $this->prix = $prix;

    }
}

$p = new Produit("Ordinateur", 5000);
```

L'objet est créé avec un nom et un prix.

---

# Passage des paramètres au constructeur

Le constructeur peut recevoir plusieurs paramètres.

```php
class Matiere {

    public $id;
    public $nom;
    public $description;

    public function __construct($id, $nom, $description) {

        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;

    }
}

$m = new Matiere(1, "PHP", "Langage de programmation");
```

Chaque paramètre permet d'initialiser un attribut.

---

# 5. Les getters et les setters

## Définition d'un Getter

Un Getter est une méthode qui permet de récupérer la valeur d'un attribut privé ou protégé.

```php
class Etudiant {

    private $nom;

    public function getNom() {

        return $this->nom;

    }
}
```

**Utilisation :**

```php
echo $etudiant->getNom();
```

---

# Définition d'un Setter

Un Setter est une méthode qui permet de modifier la valeur d'un attribut privé ou protégé.

```php
class Etudiant {

    private $nom;

    public function setNom($nom) {

        $this->nom = $nom;

    }
}
```

**Utilisation :**

```php
$etudiant->setNom("Ahmed");
```

---

# Accéder et modifier les attributs

Les getters et les setters permettent de contrôler l'accès aux attributs.

```php
class Etudiant {

    private $age;

    public function getAge() {

        return $this->age;

    }

    public function setAge($age) {

        if ($age > 0) {

            $this->age = $age;

        }

    }
}
```

---

# Validation des données

Les setters peuvent vérifier les valeurs avant de les enregistrer.

```php
class Produit {

    private $prix;

    public function setPrix($prix) {

        if ($prix < 0) {

            throw new InvalidArgumentException(
                "Le prix ne peut pas être négatif"
            );

        }

        $this->prix = $prix;

    }
}
```

**Avantage :**

Les données incorrectes sont refusées avant d'être enregistrées dans l'objet.

---

# 6. Les modificateurs d'accès

Les modificateurs d'accès définissent où les attributs et les méthodes peuvent être utilisés.

Il existe trois principaux niveaux :

- `public`
- `private`
- `protected`

---

# public

Un attribut ou une méthode `public` est accessible depuis l'intérieur et l'extérieur de la classe.

```php
class Etudiant {

    public $nom = "Ahmed";

}

$e = new Etudiant();

echo $e->nom;
```

**Résultat :**

```text
Ahmed
```

---

# private

Un attribut ou une méthode `private` est accessible uniquement à l'intérieur de la classe qui le déclare.

```php
class Etudiant {

    private $nom = "Ahmed";

    public function afficher() {

        echo $this->nom;

    }
}

$e = new Etudiant();

$e->afficher();
```

On ne peut pas accéder directement à `$nom` depuis l'extérieur.

---

# protected

Un attribut ou une méthode `protected` est accessible :

- Dans la classe qui le déclare.
- Dans les classes qui héritent de cette classe.

```php
class Personne {

    protected $nom = "Ahmed";

}

class Etudiant extends Personne {

    public function afficher() {

        echo $this->nom;

    }
}

$e = new Etudiant();

$e->afficher();
```

---

# Comparaison des modificateurs

| Modificateur | Dans la classe | Classe enfant | Extérieur |
|---|---|---|---|
| public | Oui | Oui | Oui |
| protected | Oui | Oui | Non |
| private | Oui | Non directement | Non |

**À retenir :**

- `public` : accessible partout.
- `protected` : accessible dans la classe et ses classes enfants.
- `private` : accessible uniquement dans la classe qui le déclare.

---

# 7. Les quatre piliers de la POO

La POO repose sur quatre grands principes :

1. Encapsulation.
2. Héritage.
3. Polymorphisme.
4. Abstraction.

Ces principes permettent de créer des applications structurées, évolutives et faciles à maintenir.

---

# 7.1 Encapsulation

## Définition

L'encapsulation consiste à protéger les données d'une classe et à contrôler leur accès.

On utilise principalement :

- `private`
- `protected`
- Getters
- Setters

## Exemple

```php
class CompteBancaire {

    private $solde = 1000;

    public function getSolde() {

        return $this->solde;

    }

    public function deposer($montant) {

        if ($montant > 0) {

            $this->solde += $montant;

        }

    }
}
```

**Avantage :** Les données sont protégées contre les modifications non contrôlées.

---

# 7.2 Héritage

## Définition

L'héritage permet à une classe enfant de récupérer les propriétés et les méthodes accessibles d'une classe parent.

On utilise le mot-clé `extends`.

## Exemple

```php
class Personne {

    public $nom;

    public function afficher() {

        echo $this->nom;

    }
}

class Etudiant extends Personne {

}

$e = new Etudiant();

$e->nom = "Ahmed";

$e->afficher();
```

**Avantage :** Réutiliser le code et éviter les répétitions.

---

# 7.3 Polymorphisme

## Définition

Le polymorphisme permet à différentes classes de proposer une même méthode avec des comportements différents.

## Exemple

```php
class Animal {

    public function faireDuBruit() {

        echo "Son de l'animal";

    }
}

class Chat extends Animal {

    public function faireDuBruit() {

        echo "Miaou";

    }
}

class Chien extends Animal {

    public function faireDuBruit() {

        echo "Wouf";

    }
}
```

Chaque classe possède sa propre version de `faireDuBruit()`.

---

# Polymorphisme : résultat

```php
$chat = new Chat();
$chien = new Chien();

$chat->faireDuBruit();
$chien->faireDuBruit();
```

**Résultat :**

```text
Miaou
Wouf
```

**Avantage :**

Utiliser une même interface de méthode avec des comportements adaptés à chaque classe.

---

# 7.4 Abstraction

## Définition

L'abstraction consiste à présenter les fonctionnalités essentielles et à cacher certains détails d'implémentation.

En PHP, elle peut être réalisée avec :

- Les classes abstraites (`abstract`).
- Les interfaces (`interface`).

## Exemple

```php
abstract class Animal {

    abstract public function seDeplacer();

}

class Oiseau extends Animal {

    public function seDeplacer() {

        echo "L'oiseau vole";

    }
}
```

La classe `Animal` définit une règle que la classe `Oiseau` doit respecter.

---

# 8. Les mots-clés importants en PHP

Les mots-clés permettent de contrôler les relations entre les classes et les objets.

Les principaux mots-clés sont :

- `static`
- `self`
- `parent`
- `final`
- `abstract`
- `interface`
- `implements`
- `extends`
- `instanceof`

---

# static

Permet de déclarer un attribut ou une méthode appartenant à la classe.

```php
class Etudiant {

    public static $ecole = "SOLICODE";

}

echo Etudiant::$ecole;
```

**Résultat :**

```text
SOLICODE
```

On utilise `::` pour accéder à un élément statique.

---

# self

Permet de faire référence à la classe actuelle.

```php
class Etudiant {

    public static $ecole = "SOLICODE";

    public static function afficher() {

        echo self::$ecole;

    }
}

Etudiant::afficher();
```

`self` permet d'accéder aux éléments de la classe actuelle.

---

# parent

Permet d'accéder aux méthodes ou au constructeur de la classe parent.

```php
class Personne {

    public function saluer() {

        echo "Bonjour";

    }
}

class Etudiant extends Personne {

    public function afficher() {

        parent::saluer();

    }
}
```

---

# final

Empêche l'héritage d'une classe ou la redéfinition d'une méthode.

```php
final class Personne {

}
```

Une classe ne peut pas hériter de `Personne`.

```php
class Animal {

    final public function dormir() {

        echo "Je dors";

    }
}
```

La méthode `dormir()` ne peut pas être redéfinie dans une classe enfant.

---

# abstract

Permet de créer une classe abstraite qui ne peut pas être instanciée directement.

```php
abstract class Animal {

    abstract public function crier();

}

class Chat extends Animal {

    public function crier() {

        echo "Miaou";

    }
}
```

La classe enfant doit implémenter la méthode abstraite.

---

# interface et implements

Une interface définit un contrat.

Le mot-clé `implements` permet à une classe de respecter ce contrat.

```php
interface Paiement {

    public function payer($montant);

}

class PaiementCarte implements Paiement {

    public function payer($montant) {

        echo "Paiement : " . $montant;

    }
}
```

---

# extends

Permet à une classe d'hériter d'une autre classe.

```php
class Personne {

    public $nom;

}

class Etudiant extends Personne {

    public $classe;

}
```

`Etudiant` hérite de la propriété accessible `$nom`.

---

# instanceof

Permet de vérifier si un objet appartient à une classe ou implémente une interface.

```php
class Etudiant {

}

$e = new Etudiant();

if ($e instanceof Etudiant) {

    echo "C'est un étudiant";

}
```

**Résultat :**

```text
C'est un étudiant
```

---

# 9. Les concepts avancés

Après avoir maîtrisé les bases de la POO, il est important d'étudier des concepts plus avancés :

- Association entre classes.
- Agrégation.
- Composition.
- Dependency Injection (DI).
- Type Hinting.
- Return Types.
- Gestion des exceptions.
- Namespace.
- Autoloading.
- Composer et PSR-4.

---

# Association entre classes

## Définition

L'association représente une relation entre deux classes.

Chaque classe peut exister indépendamment de l'autre.

## Exemple

Un étudiant peut être inscrit à plusieurs matières.

```php
class Etudiant {

    public $nom;

}

class Matiere {

    public $nom;

}
```

Un étudiant et une matière sont deux entités distinctes qui peuvent être liées.

---

# Agrégation

## Définition

L'agrégation est une relation de type « possède un ».

Un objet contient une référence vers un autre objet, mais les deux peuvent exister indépendamment.

## Exemple

Une équipe possède plusieurs joueurs.

```php
class Joueur {

    public $nom;

}

class Equipe {

    public $joueurs = [];

    public function ajouterJoueur(Joueur $joueur) {

        $this->joueurs[] = $joueur;

    }
}
```

Un joueur peut exister même si l'équipe est supprimée.

---

# Composition

## Définition

La composition est une relation forte entre deux objets.

Un objet est responsable de la création et du cycle de vie de ses composants.

## Exemple

Une maison possède des pièces.

```php
class Piece {

    public function __construct() {

        echo "Pièce créée";

    }
}

class Maison {

    private $piece;

    public function __construct() {

        $this->piece = new Piece();

    }
}
```

Dans cet exemple simplifié, la maison crée elle-même sa pièce.

---

# Différence entre association, agrégation et composition

| Concept | Relation | Cycle de vie |
|---|---|---|
| Association | Relation entre objets | Indépendant |
| Agrégation | Relation faible de possession | Indépendant |
| Composition | Relation forte de possession | Dépendant du propriétaire |

---

# Dependency Injection (DI)

## Définition

La Dependency Injection (injection de dépendances) consiste à fournir à une classe les objets dont elle a besoin depuis l'extérieur.

Cela évite qu'une classe crée directement toutes ses dépendances.

## Exemple

```php
class Moteur {

    public function demarrer() {

        echo "Moteur démarré";

    }
}

class Voiture {

    private $moteur;

    public function __construct(Moteur $moteur) {

        $this->moteur = $moteur;

    }
}

$moteur = new Moteur();

$voiture = new Voiture($moteur);
```

---

# Pourquoi utiliser la Dependency Injection ?

- Réduire le couplage entre les classes.
- Faciliter les tests.
- Faciliter la maintenance.
- Remplacer facilement une dépendance.
- Améliorer la réutilisation du code.

**Important :** L'injection de dépendances est un concept très utilisé dans Laravel.

---

# Type Hinting

## Définition

Le Type Hinting consiste à préciser le type de données attendu par un paramètre ou une propriété.

## Exemple

```php
class Etudiant {

    public function afficher(string $nom) {

        echo $nom;

    }
}

$e = new Etudiant();

$e->afficher("Ahmed");
```

Ici, le paramètre `$nom` doit être une chaîne de caractères.

---

# Return Types

## Définition

Les Return Types permettent de préciser le type de valeur qu'une méthode doit retourner.

On utilise `:` suivi du type.

## Exemple

```php
class Calcul {

    public function addition(int $a, int $b): int {

        return $a + $b;

    }
}

$c = new Calcul();

echo $c->addition(10, 20);
```

**Résultat :**

```text
30
```

Le type `int` indique que la méthode doit retourner un entier.

---

# Gestion des exceptions

## Définition

Les exceptions permettent de gérer les erreurs qui peuvent se produire pendant l'exécution du programme.

Les mots-clés principaux sont :

- `try`
- `catch`
- `throw`
- `finally`

---

# try et catch

- `try` : contient le code susceptible de provoquer une exception.
- `catch` : récupère et traite l'exception.

## Exemple

```php
try {

    $prix = -100;

    if ($prix < 0) {

        throw new Exception("Prix invalide");

    }

} catch (Exception $e) {

    echo $e->getMessage();

}
```

**Résultat :**

```text
Prix invalide
```

---

# throw et finally

- `throw` : permet de déclencher une exception.
- `finally` : permet d'exécuter un bloc de code après `try` et `catch`, qu'une exception ait été déclenchée ou non.

```php
try {

    throw new Exception("Une erreur est survenue");

} catch (Exception $e) {

    echo $e->getMessage();

} finally {

    echo "Fin du traitement";

}
```

---

# Namespace

## Définition

Un Namespace permet d'organiser les classes et d'éviter les conflits de noms dans un projet.

## Exemple

```php
<?php

namespace App\Models;

class Etudiant {

    public $nom;

}
```

Pour utiliser cette classe ailleurs :

```php
use App\Models\Etudiant;

$e = new Etudiant();
```

---

# Autoloading

## Définition

L'Autoloading permet de charger automatiquement les fichiers contenant les classes lorsqu'elles sont utilisées.

Sans Autoloading, il faudrait souvent écrire plusieurs instructions `require` ou `include`.

## Exemple

```php
spl_autoload_register(function ($class) {

    require_once $class . ".php";

});
```

Cette version est illustrative : dans un vrai projet, il faut généralement convertir le nom de classe en chemin de fichier.

---

# Composer

## Définition

Composer est un gestionnaire de dépendances pour PHP.

Il permet de :

- Installer des bibliothèques.
- Gérer les versions des dépendances.
- Charger automatiquement les classes.
- Organiser les projets PHP.

## Commande importante

```bash
composer install
```

Cette commande installe les dépendances définies dans `composer.json`.

---

# PSR-4

## Définition

PSR-4 est une norme PHP qui définit une manière standard de charger automatiquement les classes à partir de leur Namespace et de leur emplacement dans les dossiers.

## Exemple de composer.json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        }
    }
}
```

Après avoir configuré l'autoloading :

```bash
composer dump-autoload
```

Les classes du Namespace `App` seront chargées automatiquement selon leur chemin.

---

# Application pratique : Gestion des matières

## Objectif

Créer une petite application PHP orientée objet pour gérer les matières.

La classe `Matiere` contient :

- `id`
- `nom`
- `description`

Elle propose les méthodes :

- `getNom()`
- `setNom()`
- `afficher()`

---

# Exemple : Classe Matiere

```php
<?php

class Matiere {

    private int $id;
    private string $nom;
    private string $description;

    public function __construct(
        int $id,
        string $nom,
        string $description
    ) {

        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;

    }

    public function getNom(): string {

        return $this->nom;

    }

    public function setNom(string $nom): void {

        $this->nom = $nom;

    }
}
```

---

# Exercice pratique

## Sujet : Gestion des étudiants

Créer une application PHP orientée objet permettant de gérer les étudiants.

### Travail demandé

1. Créer une classe `Etudiant`.
2. Définir les attributs `id`, `nom` et `email`.
3. Ajouter un constructeur.
4. Définir les attributs en `private`.
5. Créer les getters et les setters.
6. Ajouter une méthode `afficher()`.
7. Créer deux objets étudiants.
8. Vérifier les données avant de les modifier.

---

# Questions de révision

1. Quelle est la différence entre une classe et un objet ?
2. Quel est le rôle de `$this` ?
3. À quoi sert le constructeur `__construct()` ?
4. Quelle est la différence entre `private` et `protected` ?
5. Quels sont les quatre piliers de la POO ?
6. Quelle est la différence entre `extends` et `implements` ?
7. Qu'est-ce que la Dependency Injection ?
8. À quoi sert un Namespace ?
9. Quel est le rôle de Composer ?
10. Qu'est-ce que PSR-4 ?

---

# Conclusion

La programmation orientée objet est une compétence fondamentale pour développer des applications PHP modernes.

Elle permet de :

- Organiser le code.
- Réutiliser les fonctionnalités.
- Protéger les données.
- Faciliter la maintenance.
- Développer des projets évolutifs.

**La maîtrise de la POO constitue une étape essentielle avant de commencer Laravel.**

---

# Merci pour votre attention !

## Des questions ?

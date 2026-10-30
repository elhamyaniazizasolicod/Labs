---
marp: true
paginate: true
theme: default
style: |
  section {
    --deep-twilight: #03045e;
    --french-blue: #023e8a;
    --bright-teal-blue: #0077b6;
    --blue-green: #0096c7;
    --turquoise-surf: #00b4d8;
    --sky-aqua: #48cae4;
    --frosted-blue: #90e0ef;
    --frosted-blue-2: #ade8f4;
    --light-cyan: #caf0f8;

    background-color: var(--light-cyan);
    background-image: linear-gradient(90deg, var(--deep-twilight), var(--bright-teal-blue), var(--sky-aqua));
    background-size: 100% 14px;
    background-repeat: no-repeat;
    color: var(--deep-twilight);
    font-size: 26px;
  }
  section h1 { color: var(--french-blue); }
  section h2 {
    color: var(--bright-teal-blue);
    border-bottom: 3px solid var(--sky-aqua);
    padding-bottom: 6px;
  }
  section strong { color: var(--french-blue); }
  section a { color: var(--blue-green); }
  section li::marker { color: var(--turquoise-surf); }
  section code {
    background: var(--frosted-blue-2);
    color: var(--deep-twilight);
    border-radius: 4px;
    padding: 0 4px;
  }
  section pre {
    font-size: 18px;
    background: #f1fbfe;
    border: 1px solid var(--frosted-blue);
    border-left: 6px solid var(--blue-green);
    border-radius: 6px;
  }
  section pre code { background: transparent; padding: 0; }
  table { font-size: 20px; border-collapse: collapse; }
  th { background: var(--french-blue); color: var(--light-cyan); }
  td, th { border: 1px solid var(--frosted-blue); padding: 6px 10px; }
  tr:nth-child(odd) td { background: var(--light-cyan); }
  tr:nth-child(even) td { background: var(--frosted-blue-2); }
  section::after { color: var(--bright-teal-blue); font-weight: bold; }

  section blockquote {
    background: var(--frosted-blue-2);
    border-left: 6px solid var(--turquoise-surf);
    color: var(--deep-twilight);
    font-size: 20px;
    padding: 4px 14px;
    margin: 0 0 14px 0;
  }
  section blockquote::before, section blockquote::after { content: none; }

  /* Title slide */
  section.lead {
    background-color: var(--deep-twilight);
    background-image: linear-gradient(135deg, var(--deep-twilight) 0%, var(--french-blue) 60%, var(--bright-teal-blue) 100%);
    background-size: 100% 100%;
    color: var(--light-cyan);
    justify-content: center;
  }
  section.lead h1 { color: var(--light-cyan); font-size: 52px; }
  section.lead h2 {
    color: var(--frosted-blue);
    border-bottom: 3px solid var(--sky-aqua);
  }
---

<!-- _class: lead -->
<!-- _paginate: false -->

# Lab: Object-Oriented Programming in PHP
## From Spaghetti Code to Clean Architecture
Ahmed El Morabiti

Formateur:ES-SARRAJ Fouad

---

## 1. Planning

- **Objectives**:
  - Explain which problems OOP solves compared to procedural PHP.
  - Master the basics: classes, objects, visibility, constructors, static.
  - Apply the four pillars: encapsulation, inheritance, polymorphism, abstraction.
  - Use advanced features: interfaces, traits, enums, readonly, dependency injection.
- **Prerequisites**: PHP syntax (variables, functions, arrays), PHP 8.1+ installed, a terminal.
- **Steps**:
  1. Spot the problems of procedural code.
  2. Learn the building blocks of OOP.
  3. Go further with advanced concepts and SOLID.
  4. Practice with 4 exercises.

---

## Study Status Legend

Each concept is tagged against the four tutorials already completed
(T.221.111, T.221.112, T.221.121, T.221.122):

- **✅ Studied**: covered in the tutorials.
- **🟡 Partial**: the basic version was covered, but part of the slide goes further. A note under the title says which part.
- **🆕 New**: not covered in the tutorials yet.

---

## 2. Introduction

- OOP organizes code around **objects**: data (properties) and behavior (methods) bundled together.
- PHP has supported OOP since PHP 5 and has improved it a lot with PHP 7 and 8 (typed properties, enums, readonly, attributes).
- Modern frameworks (Laravel, Symfony) and libraries are entirely built on OOP.
- Understanding it is the foundation for writing code that is maintainable, testable, and reusable.

---

## 3. Problem Statement

**How can we structure a growing PHP application so that it stays readable, safe, and easy to change?**

Typical problems of procedural code:

| Problem | Consequence |
|---|---|
| Global variables and shared state | Unpredictable bugs, hard to trace |
| Copy-pasted logic | One fix must be applied in many places |
| No data protection | Any code can put invalid data anywhere |
| Tight coupling | Changing one function breaks others |
| Hard to test | Functions depend on globals, DB, `$_POST` |

---

## 3. Problem Statement: Example

```php
<?php
// Procedural: balance is a global, anyone can break it
$balance = 100;

function withdraw($amount) {
    global $balance;
    $balance -= $amount;   // no validation!
}

withdraw(500);
echo $balance; // -400  (invalid state)
```

**OOP answer**: keep data and the rules that protect it in one place.

---

## 4. Definitions — 🟡 Partial

> ✅ Studied: class, object, property, method, encapsulation, inheritance, polymorphism · 🆕 New: abstraction

- **Class**: a blueprint describing properties and methods.
- **Object (instance)**: a concrete realization of a class, created with `new`.
- **Property**: a variable that belongs to an object.
- **Method**: a function that belongs to a class.
- **Encapsulation**: hiding internal state, exposing a controlled interface.
- **Inheritance**: a class reuses and extends another (`extends`).
- **Polymorphism**: different classes respond to the same interface in their own way.
- **Abstraction**: exposing what an object does, hiding how.

---

## 5. Theory: Classes and Objects — ✅ Studied

> 🆕 New here: constructor promotion, exceptions, `declare(strict_types=1)`

```php
<?php
declare(strict_types=1);

class BankAccount
{
    private float $balance = 0;

    public function __construct(private string $owner) {}

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Amount must be positive');
        }
        $this->balance += $amount;
    }

    public function getBalance(): float { return $this->balance; }
}

$account = new BankAccount('Ahmed');
$account->deposit(100);
echo $account->getBalance(); // 100
```

---

## 5. Theory: Visibility and `$this` — 🟡 Partial

> ✅ Studied: `public`, `private`, `protected`, `$this` · 🆕 New: constructor promotion

| Keyword | Accessible from |
|---|---|
| `public` | Everywhere |
| `protected` | The class and its subclasses |
| `private` | The class only |

- `$this` refers to the current object.
- **Constructor promotion** (PHP 8): `__construct(private string $owner)` declares and assigns the property in one line.
- **Rule of thumb**: start `private`, open up only when needed.

---

## 5. Theory: Static, Constants, Self — 🆕 New

```php
class Config
{
    public const VERSION = '1.0';
    private static int $instances = 0;

    public function __construct() { self::$instances++; }

    public static function count(): int { return self::$instances; }
}

new Config(); new Config();
echo Config::count();    // 2
echo Config::VERSION;    // 1.0
```

- `static` members belong to the **class**, not to an instance.
- Use `self::` or `static::` (not `$this`) to reach them.
- Use sparingly: static state brings back the global-state problem.

---

## 5. Theory: Inheritance — ✅ Studied

> 🆕 New here: `final` and single inheritance

```php
class Animal
{
    public function __construct(protected string $name) {}

    public function speak(): string { return "{$this->name} makes a sound"; }
}

class Dog extends Animal
{
    public function speak(): string
    {
        return parent::speak() . ' : Woof!';
    }
}

echo (new Dog('Rex'))->speak();
```

- `extends` reuses code; `parent::` calls the parent version.
- `final class` / `final method` forbids extension or overriding.
- PHP has **single inheritance** only.

---

## 5. Theory: Abstract Classes and Interfaces — 🆕 New

```php
interface Payable
{
    public function pay(float $amount): bool;
}

abstract class Shape
{
    abstract public function area(): float;

    public function describe(): string
    {
        return static::class . ' with area ' . $this->area();
    }
}
```

- **Interface**: a contract (what), no state, a class can implement many.
- **Abstract class**: partial implementation plus shared state, cannot be instantiated.
- Interface when you define a capability, abstract class when you share code.

---

## 5. Theory: Polymorphism — 🟡 Partial

> ✅ Studied: polymorphism through inheritance and overriding · 🆕 New: polymorphism through interfaces

```php
interface Logger { public function log(string $msg): void; }

class FileLogger implements Logger {
    public function log(string $msg): void { file_put_contents('app.log', $msg . PHP_EOL, FILE_APPEND); }
}
class EchoLogger implements Logger {
    public function log(string $msg): void { echo $msg . PHP_EOL; }
}

function process(Logger $logger): void {
    $logger->log('Processing...');   // works with ANY Logger
}

process(new FileLogger());
process(new EchoLogger());
```

The caller depends on the **interface**, not on a concrete class.

---

## 6. Advanced: Traits — 🆕 New

```php
trait Timestamps
{
    public ?DateTimeImmutable $createdAt = null;

    public function touch(): void
    {
        $this->createdAt = new DateTimeImmutable();
    }
}

class Article { use Timestamps; }
class Comment { use Timestamps; }
```

- Traits let you **reuse methods across unrelated classes** (a workaround for single inheritance).
- Beware: they can hide dependencies and cause name conflicts. Prefer composition when possible.

---

## 6. Advanced: Magic Methods — 🟡 Partial

> ✅ Studied: `__construct` · 🆕 New: `__get`, `__set`, `__call`, `__toString`, `__invoke`, `__clone`

| Method | Triggered when |
|---|---|
| `__construct` / `__destruct` | Object created / destroyed |
| `__get` / `__set` | Reading / writing inaccessible property |
| `__call` / `__callStatic` | Calling an undefined method |
| `__toString` | Object used as a string |
| `__invoke` | Object called like a function |
| `__clone` | Object cloned (`clone $obj`) |

```php
class Money {
    public function __construct(private int $cents) {}
    public function __toString(): string { return number_format($this->cents / 100, 2) . ' €'; }
}
echo new Money(1999); // 19.99 €
```

---

## 6. Advanced: Readonly and Enums — 🆕 New

```php
enum Status: string
{
    case Draft = 'draft';
    case Published = 'published';

    public function label(): string
    {
        return ucfirst($this->value);
    }
}

final class Post
{
    public function __construct(
        public readonly string $title,
        public readonly Status $status = Status::Draft,
    ) {}
}

$post = new Post('Hello');
// $post->title = 'x';  // Error: Cannot modify readonly property
```

- `readonly` (8.1) gives **immutable** objects. `enum` (8.1) replaces magic strings and constants.

---

## 6. Advanced: Late Static Binding — 🆕 New

```php
class Model
{
    public static function create(): static
    {
        return new static();      // the class that was CALLED
    }
}

class User extends Model {}

var_dump(User::create());   // object(User), not Model
```

- `self` = the class where the code is **written**.
- `static` = the class that was **called** at runtime.

---

## 6. Advanced: Exceptions — 🆕 New

```php
class InsufficientFunds extends DomainException {}

class Account
{
    public function withdraw(float $amount): void
    {
        if ($amount > $this->balance) {
            throw new InsufficientFunds("Balance too low");
        }
        $this->balance -= $amount;
    }
}

try {
    $account->withdraw(500);
} catch (InsufficientFunds $e) {
    echo $e->getMessage();
} finally {
    // always runs
}
```

Create **custom exceptions** so callers can react to specific failures.

---

## 6. Advanced: Namespaces and Autoloading — 🟡 Partial

> ✅ Studied: `require_once` · 🆕 New: namespaces, PSR-4, Composer autoloading

```php
<?php
// src/Service/Mailer.php
namespace App\Service;

class Mailer { /* ... */ }
```

```json
// composer.json
{ "autoload": { "psr-4": { "App\\": "src/" } } }
```

```php
require 'vendor/autoload.php';
use App\Service\Mailer;

$mailer = new Mailer();
```

- **Namespaces** avoid name collisions. **PSR-4** maps namespaces to folders, so no more manual `require`.

---

## 6. Advanced: Dependency Injection — 🟡 Partial

> ✅ Studied: dependency between classes (controller → manager) · 🆕 New: injecting through the constructor, interfaces

```php
// Bad: hard-coded dependency
class OrderService {
    private MySqlDatabase $db;
    public function __construct() { $this->db = new MySqlDatabase(); }
}

// Good: dependency injected through the constructor
class OrderService {
    public function __construct(private DatabaseInterface $db) {}
}

$service = new OrderService(new MySqlDatabase());   // production
$service = new OrderService(new InMemoryDatabase()); // tests
```

- Decouples classes, makes **testing** easy, and lets you swap implementations.

---

## 6. Advanced: SOLID Principles — 🆕 New

| Letter | Principle | In short |
|---|---|---|
| **S** | Single Responsibility | One class, one reason to change |
| **O** | Open/Closed | Extend behavior without editing existing code |
| **L** | Liskov Substitution | A subclass must be usable wherever the parent is |
| **I** | Interface Segregation | Many small interfaces beat one big one |
| **D** | Dependency Inversion | Depend on abstractions, not concretions |

**Also remember**: favor **composition over inheritance**.

---

## 6. Advanced: Design Patterns (Overview) — 🆕 New

- **Factory**: centralize object creation.
- **Strategy**: swap algorithms through an interface (payment methods, shipping rules).
- **Repository**: hide data access behind a collection-like interface.
- **Observer**: notify listeners when something happens (events).
- **Singleton**: one instance only. Often considered an **anti-pattern** (hidden global state).

---

## 7. Practical Part: Exercise 1 (Basics) — ✅ Studied

Create a `Product` class with:
- private `name` and `price`, set via constructor promotion,
- a method `applyDiscount(float $percent): void` that rejects values outside 0 to 100,
- a getter `getPrice()`.

**Test**: a 100 € product with a 20% discount must cost 80 €. A 150% discount must throw an exception.

---

## 7. Practical Part: Exercise 2 (Inheritance) — 🟡 Partial

> ✅ Studied: `extends`, overriding · 🆕 New: abstract classes

Given the abstract class `Shape` with `abstract area(): float`:
- Implement `Circle` (radius) and `Rectangle` (width, height).
- Write a function `totalArea(Shape ...$shapes): float`.

**Test**: `totalArea(new Circle(1), new Rectangle(2, 3))` returns about `9.14`.

---

## 7. Practical Part: Exercise 3 (Interfaces and DI) — 🆕 New

- Define `interface Notifier { public function send(string $to, string $msg): void; }`.
- Implement `EmailNotifier` and `SmsNotifier` (printing is enough).
- Create `UserRegistration` that receives a `Notifier` in its constructor and notifies on `register()`.

**Test**: switch notifier without changing `UserRegistration`.

---

## 7. Practical Part: Exercise 4 (Advanced) — 🆕 New

Build an **immutable** `Order` class:
- `readonly` properties: `id`, `items`, `status` (an `enum OrderStatus`: Pending, Paid, Shipped).
- A method `withStatus(OrderStatus $s): static` that returns a **new** instance.
- A custom exception `InvalidTransition` when going from `Shipped` back to `Pending`.

---

## 7. Practical Part: Solution Exercise 1 — ✅ Studied

```php
class Product
{
    public function __construct(
        private string $name,
        private float $price,
    ) {}

    public function applyDiscount(float $percent): void
    {
        if ($percent < 0 || $percent > 100) {
            throw new InvalidArgumentException('Discount must be between 0 and 100');
        }
        $this->price -= $this->price * $percent / 100;
    }

    public function getPrice(): float { return $this->price; }
}

$p = new Product('Book', 100);
$p->applyDiscount(20);
echo $p->getPrice(); // 80
```

---

## 7. Practical Part: Solution Exercise 4 — 🆕 New

```php
enum OrderStatus { case Pending; case Paid; case Shipped; }

class InvalidTransition extends DomainException {}

final class Order
{
    public function __construct(
        public readonly int $id,
        public readonly array $items,
        public readonly OrderStatus $status = OrderStatus::Pending,
    ) {}

    public function withStatus(OrderStatus $new): static
    {
        if ($this->status === OrderStatus::Shipped && $new === OrderStatus::Pending) {
            throw new InvalidTransition('Cannot revert a shipped order');
        }
        return new static($this->id, $this->items, $new);
    }
}
```

Solutions for exercises 2 and 3 follow the same pattern (abstract class with `area()`, interface injected through the constructor).

---

## Study Progress Recap

| Status | Concepts | Tutorials |
|---|---|---|
| ✅ Studied | Classes and objects, `new`, properties, methods, `$this`, `__construct`, `public` / `private` / `protected`, getters and setters, typing, `extends`, `parent::`, overriding, polymorphism through inheritance, dependency between classes | T.221.111, 112, 121, 122 |
| 🟡 Partial | Definitions, constructor promotion, polymorphism with interfaces, magic methods, namespaces, dependency injection, Exercise 2 | Basics only |
| 🆕 New | `static` and constants, abstract classes, interfaces, traits, `readonly`, enums, late static binding, exceptions, SOLID, design patterns, Exercises 3 and 4 | Not yet covered |

The interface tutorials ("Programmer avec des abstractions") were not among the four shared, so interface content is marked New.

---

## 8. Results: Procedural vs OOP

| Aspect | Procedural | OOP |
|---|---|---|
| Data protection | None (globals) | Encapsulation with visibility |
| Reuse | Copy-paste | Inheritance, traits, composition |
| Extending | Edit existing code | Add a new class (Open/Closed) |
| Testing | Hard (global state) | Easy (dependency injection) |
| Organization | Long files of functions | Namespaces and one class per file |
| Validation | Scattered | Centralized in the class |

---

## 8. Results: Pillars at a Glance

| Pillar | PHP tool | Problem it solves |
|---|---|---|
| Encapsulation | `private`, `protected`, `readonly` | Invalid or corrupted state |
| Inheritance | `extends`, `abstract`, `trait` | Duplicated code |
| Polymorphism | `interface`, method overriding | Rigid `if/else` chains |
| Abstraction | `interface`, `abstract class` | Tight coupling to details |

---

## 9. Conclusion

- **Skills acquired**: model a problem with classes, protect state, reuse code properly, and design decoupled, testable components.
- **Best practices**: type everything (`declare(strict_types=1)`), keep classes small, prefer composition, depend on interfaces, and make objects immutable when possible.
- **Next steps**: PHPUnit tests, PSR standards, Laravel or Symfony, design patterns.
- **Expected deliverable**: a single `php-oop-lab.md` presentation plus the PHP source files of the 4 exercises, each runnable with `php file.php`.

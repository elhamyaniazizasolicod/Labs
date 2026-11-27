<?php

declare(strict_types=1);

class Category
{
    public function __construct(protected readonly string $name)
    {
    }

    public function title(): string
    {
        return $this->name;
    }
}

final class FeaturedCategory extends Category
{
    public function title(): string
    {
        return 'À la une : ' . parent::title();
    }
}

/**
 * @param list<Category> $categories
 */
function displayCategoryTitles(array $categories): void
{
    foreach ($categories as $category) {
        if (!$category instanceof Category) {
            throw new InvalidArgumentException('Chaque élément doit être une catégorie.');
        }

        $title = $category->title();
        if ($title === '') {
            throw new UnexpectedValueException('Le titre d’une catégorie ne peut pas être vide.');
        }

        echo $title . PHP_EOL;
    }
}

displayCategoryTitles([
    new Category('PHP'),
    new FeaturedCategory('Laravel'),
]);

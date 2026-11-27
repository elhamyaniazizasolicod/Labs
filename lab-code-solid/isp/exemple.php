<?php

declare(strict_types=1);

final class Category
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
    ) {
    }
}

interface CategoryReader
{
    /**
     * @return list<Category>
     */
    public function all(): array;
}

interface CategoryCreator
{
    public function add(Category $category): void;
}

final class InMemoryCategoryStore implements CategoryReader, CategoryCreator
{
    /**
     * @param list<Category> $categories
     */
    public function __construct(private array $categories = [])
    {
    }

    public function all(): array
    {
        return $this->categories;
    }

    public function add(Category $category): void
    {
        $this->categories[] = $category;
    }
}

final class CategoryPage
{
    public function __construct(private readonly CategoryReader $categories)
    {
    }

    public function render(): string
    {
        $lines = array_map(
            static fn (Category $category): string => $category->name . ' — ' . $category->description,
            $this->categories->all(),
        );

        return implode(PHP_EOL, $lines);
    }
}

$store = new InMemoryCategoryStore();
$store->add(new Category('PHP', 'Langage utilisé côté serveur.'));

echo (new CategoryPage($store))->render() . PHP_EOL;

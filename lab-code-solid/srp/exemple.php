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

final class CategoryRepository
{
    /**
     * @return list<Category>
     */
    public function all(): array
    {
        return [
            new Category('PHP', 'Apprendre les bases du langage PHP.'),
            new Category('Laravel', 'Créer des applications avec Laravel.'),
        ];
    }
}

final class CategoryListFormatter
{
    /**
     * @param list<Category> $categories
     */
    public function format(array $categories): string
    {
        $lines = array_map(
            static fn (Category $category): string => '- ' . $category->name . ': ' . $category->description,
            $categories,
        );

        return implode(PHP_EOL, $lines);
    }
}

$categories = (new CategoryRepository())->all();
$formattedList = (new CategoryListFormatter())->format($categories);

echo $formattedList . PHP_EOL;

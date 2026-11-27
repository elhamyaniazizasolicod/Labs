<?php

declare(strict_types=1);

final class Category{
    public function __construct(
        public readonly string $name,
        public readonly bool $published,
    ) {
    }
}

interface CategoryFilter{
    public function matches(Category $category): bool;
}

final class PublishedCategoryFilter implements CategoryFilter{
    public function matches(Category $category): bool
    {
        return $category->published;
    }
}

final class CategoryNameFilter implements CategoryFilter{
    public function __construct(private readonly string $search){
    }

    public function matches(Category $category): bool
    {
        return stripos($category->name, $this->search) !== false;
    }
}

final class CategoryCatalog{
    /**
     * @param list<Category> $categories
     */
    public function __construct(private readonly array $categories)
    {
    }

    /**
     * @return list<Category>
     */
    public function filter(CategoryFilter $filter): array
    {
        return array_values(array_filter(
            $this->categories,
            static fn (Category $category): bool => $filter->matches($category),
        ));
    }
}

$catalog = new CategoryCatalog([
    new Category('PHP', true),
    new Category('Laravel', true),
    new Category('Brouillon', false),
]);

$publishedCategories = $catalog->filter(new PublishedCategoryFilter());
$phpCategories = $catalog->filter(new CategoryNameFilter('php'));

echo 'Catégories publiées : ' . implode(', ', array_map(
    static fn (Category $category): string => $category->name,
    $publishedCategories,
)) . PHP_EOL;
echo 'Résultat du nouveau filtre : ' . implode(', ', array_map(
    static fn (Category $category): string => $category->name,
    $phpCategories,
)) . PHP_EOL;

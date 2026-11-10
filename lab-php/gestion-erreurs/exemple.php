<?php

declare(strict_types=1);

final class CategoryNotFoundException extends RuntimeException
{
}

/**
 * @param array<int, array{id: int, name: string}> $categories
 * @return array{id: int, name: string}
 */
function findCategoryById(array $categories, int $id): array
{
    if ($id <= 0) {
        throw new InvalidArgumentException('L’identifiant doit être positif.');
    }

    foreach ($categories as $category) {
        if ($category['id'] === $id) {
            return $category;
        }
    }

    throw new CategoryNotFoundException("La catégorie {$id} n’existe pas.");
}

$categories = [
    ['id' => 1, 'name' => 'Programmation'],
    ['id' => 2, 'name' => 'Développement Web'],
];

try {
    $category = findCategoryById($categories, 8);
    echo "Catégorie trouvée : {$category['name']}" . PHP_EOL;
} catch (InvalidArgumentException | CategoryNotFoundException $exception) {
    echo 'Impossible d’afficher la catégorie : ' . $exception->getMessage() . PHP_EOL;
}

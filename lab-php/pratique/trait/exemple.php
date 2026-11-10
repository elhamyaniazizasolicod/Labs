<?php

declare(strict_types=1);

namespace App\Domain {
    trait HasDisplayLabel
    {
        public function displayLabel(): string
        {
            return $this->type . ' : ' . $this->name;
        }
    }

    final class Category
    {
        use HasDisplayLabel;

        private string $type = 'Catégorie';

        public function __construct(private string $name)
        {
        }
    }

    final class Course
    {
        use HasDisplayLabel;

        private string $type = 'Cours';

        public function __construct(private string $name)
        {
        }
    }
}

namespace {
    $category = new \App\Domain\Category('Développement Web');
    $course = new \App\Domain\Course('Gestion des exceptions');

    echo $category->displayLabel() . PHP_EOL;
    echo $course->displayLabel() . PHP_EOL;
}

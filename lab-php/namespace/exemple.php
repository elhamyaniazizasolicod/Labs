<?php

declare(strict_types=1);

namespace App\Domain {
    final class Category
    {
        public function __construct(private string $name)
        {
        }

        public function name(): string
        {
            return $this->name;
        }
    }
}

namespace App\Admin {
    final class Category
    {
        public function __construct(private string $name)
        {
        }

        public function name(): string
        {
            return $this->name;
        }
    }
}

namespace {
    $publicCategory = new \App\Domain\Category('Développement Web');
    $adminCategory = new \App\Admin\Category('Développement Web');

    echo 'Catalogue public : ' . $publicCategory->name() . PHP_EOL;
    echo 'Espace admin : ' . $adminCategory->name() . PHP_EOL;
}

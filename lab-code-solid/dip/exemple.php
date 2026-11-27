<?php

declare(strict_types=1);

interface CategoryProvider
{
    /**
     * @return list<string>
     */
    public function names(): array;
}

final class InMemoryCategoryProvider implements CategoryProvider
{
    /**
     * @param list<string> $names
     */
    public function __construct(private readonly array $names)
    {
    }

    public function names(): array
    {
        return $this->names;
    }
}

final class CategoryListService
{
    public function __construct(private readonly CategoryProvider $provider)
    {
    }

    public function render(): string
    {
        return implode(PHP_EOL, array_map(
            static fn (string $name): string => '- ' . $name,
            $this->provider->names(),
        ));
    }
}

$provider = new InMemoryCategoryProvider(['PHP', 'Laravel']);
$service = new CategoryListService($provider);

echo $service->render() . PHP_EOL;

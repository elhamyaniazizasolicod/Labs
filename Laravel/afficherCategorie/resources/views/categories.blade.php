<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des catégories</title>
</head>
<body>
    <h1>Liste des catégories</h1>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <p>{{ $category->description }}</p>
        <hr>
    @endforeach
</body>
</html>
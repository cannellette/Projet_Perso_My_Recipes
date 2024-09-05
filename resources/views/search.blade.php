<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voici le résultat de la recherche</h1>

    @if (count($results) > 0)
        <ul>
            @foreach ($results as $recipe)
                <li>
                    <a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title }}</a>
                    <!-- Ajouter d'autres informations sur la recette ici -->
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun résultat trouvé.</p>
    @endif


</body>
</html>
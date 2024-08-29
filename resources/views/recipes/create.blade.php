<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Recette</title>
</head>
<body>
    <h1>Ajouter une Recette pour {{ $cookbook->title }}</h1>
    <form action="{{ route('recipes.store', $cookbook->id) }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="page">Numéro de page</label>
            <input type="text" name="page" id="page"
        </div>
        <div>
            <label for="ingredient1">Ingrédient 1</label>
            <input type="text" name="ingredient1" id="ingredient1">
        </div>
        <div>
            <label for="ingredient2">Ingrédient 2</label>
            <input type="text" name="ingredient2" id="ingredient2">
        </div>
        <div>
            <label for="ingredient3">Ingrédient 3</label>
            <input type="text" name="ingredient3" id="ingredient3">
        </div>
        <div>
            <label for="ingredient4">Ingrédient 4</label>
            <input type="text" name="ingredient4" id="ingredient4">
        </div>
        <div>
            <label for="ingredient5">Ingrédient 5</label>
            <input type="text" name="ingredient5" id="ingredient5">
        </div>
        <button type="submit">Ajouter</button>
    </form>
    <a href="{{ route('cookbooks.index') }}">Retour à l'accueil</a>
</body>
</html>
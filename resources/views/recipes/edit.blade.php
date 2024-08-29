<!DOCTYPE html>
<html>
<head>
    <title>Modifier une Recette</title>
</head>
<body>
    <h1>Modifier une Recette </h1>
    <form action="{{ route('recipes.update', ['cookbook' => $recipe->cookbook_id, 'recipe' => $recipe->id]) }}" method="POST">
        @csrf
        <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="{{ $recipe->title }}" required>
        </div>
        <div>
            <label for="page">Numéro de page</label>
            <input type="text" name="page" id="page" value="{{ $recipe->page }}"
        </div>
        <div>
            <label for="ingredient1">Ingrédient 1</label>
            <input type="text" name="ingredient1" id="ingredient1" value="{{ $recipe->ingredient1 }}">
        </div>
        <div>
            <label for="ingredient2">Ingrédient 2</label>
            <input type="text" name="ingredient2" id="ingredient2" value="{{$recipe->ingredient2 }}">
        </div>
        <div>
            <label for="ingredient3">Ingrédient 3</label>
            <input type="text" name="ingredient3" id="ingredient3" value="{{$recipe->ingredient3 }}">
        </div>
        <div>
            <label for="ingredient4">Ingrédient 4</label>
            <input type="text" name="ingredient4" id="ingredient4" value="{{$recipe->ingredient4 }}">
        </div>
        <div>
            <label for="ingredient5">Ingrédient 5</label>
            <input type="text" name="ingredient5" id="ingredient5" value="{{$recipe->ingredient5 }}">
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
    <a href="{{ route('recipes.index') }}">Retour à la liste des recettes</a>
</body>
</html>
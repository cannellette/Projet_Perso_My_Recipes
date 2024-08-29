<!DOCTYPE html>
<html>
<head>
    <title>Toutes les recettes</title>
    
</head>
<body>
<h1>Toutes les recettes</h1>
<div>
<ul>
        @foreach ($recipes as $recipes)
            <li>
                {{ $recipes->title }} 
                <form action="{{ route('recipes.edit', $recipes->id) }}" method="GET" style="display: inline;">  
                    <button type="submit" >Modifier</button>
                </form>
                <form action="{{ route('recipes.destroy', $recipes->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette recette ?')">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>

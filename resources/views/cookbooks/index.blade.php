
<!DOCTYPE html>
<html>
<head>
    <title>Livres de Recettes</title>
    
</head>
<body>
    <h1>Livres de Recettes</h1>
    <a href="{{ route('cookbooks.create') }}">Ajouter un nouveau livre de recettes</a>
    
    <ul>
        @foreach ($cookbooks as $cookbook)
        
        <li>
            <a href="{{ route('cookbooks.show', $cookbook->id) }}">{{ $cookbook->title }}</a>
                <a href="{{ route('cookbooks.edit', $cookbook->id) }}" style="display: inline;">Modifier</a>
                <!-- Formulaire pour la suppression -->
                <form action="{{ route('cookbooks.destroy', $cookbook->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">Supprimer</button>
                </form>

            </li>
        @endforeach
    </ul>
</body>
</html>

<ul>
    @foreach ($cookbooks as $cookbook)
        
    @endforeach
</ul>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Livre de Recettes</title>
</head>
<body>
    <h1>Modifier un Livre de Recettes</h1>
    <form action="{{ route('cookbooks.update', $cookbook->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="{{ $cookbook->title }}" required>
        </div>
        <div>
            <label for="writer">Auteur</label>
            <input type="text" name="writer" id="writer" value="{{ $cookbook->writer }}" required>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
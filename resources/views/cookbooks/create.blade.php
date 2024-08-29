<!DOCTYPE html>
<html>
<head>
    <title>Créer un Livre de Recettes</title>
</head>
<body>
    <h1>Créer un Livre de Recettes</h1>
    <form action="{{ route('cookbooks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="writer">Auteur</label>
            <input type="text" name="writer" id="writer" required>
        </div>
        <button type="submit">Créer</button>
    </form>
</body>
</html>
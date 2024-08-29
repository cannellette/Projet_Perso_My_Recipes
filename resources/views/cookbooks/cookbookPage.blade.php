<h1>{{ $cookbook->title }}</h1>
<h2>{{ $cookbook->writer }}</h2>

<a href="{{ route('recipes.create', $cookbook->id) }}"> Ajouter une nouvelle recette</a>

<ul>
    @foreach ($recipes as $recipe)
        <li><a href="{{ route('cookbooks.recipes.index', $recipe->id) }}">{{ $recipe->title }}</a></li>
    @endforeach
</ul>
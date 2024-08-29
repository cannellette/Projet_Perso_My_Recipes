<h1>Recettes du livre de cuisine : {{ $cookbook->title }}</h1>

<ul>
    @foreach ($recipes as $recipe)
        <li><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title }}</a></li>
    @endforeach
</ul>
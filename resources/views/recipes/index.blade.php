<h2>Recepten</h2>

<a href="{{ route('recipes.create') }}">Maak een nieuw recept</a>

<ul>
    @foreach  ($recipes as $recipe)
        <li><a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a></li>
    @endforeach
</ul>
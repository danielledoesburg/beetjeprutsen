<h2>{{ $recipe->title }}</h2>

<ul>
    @foreach  ($recipe->recipeIngredients as $recipeIngredient)
        <li>{{ $recipeIngredient->amount }} {{ $recipeIngredient->unitName }} {{ $recipeIngredient->ingredient->name }}</li>
    @endforeach
</ul>
<p>{{ $recipe->instructions }}</p>
<a href="{{ $recipe->external_url }}">Ga naar het originele recept</a>
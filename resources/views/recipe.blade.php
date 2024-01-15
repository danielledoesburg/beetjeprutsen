<p>recipe.blade.php</p>
<p>{{ $recipe->title }}</p>
<ul>
    @foreach  ($recipe->recipeIngredients as $recipeIngredient)
        <li>{{ $recipeIngredient->amount }} {{ $recipeIngredient->unitName() }} {{ $recipeIngredient->ingredient->name }}</li>
    @endforeach
</ul>

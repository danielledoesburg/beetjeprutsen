<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

/**
 * Recipe controller.
 */
class RecipeController extends Controller
{
    /**
     * Show recipe index.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory @todo check types
     */
    public function index() // @todo
    {
        return view('recipes');
    }

    /**
     * Show recipe by id.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory @todo check types
     */
    public function show(int $id) // @todo
    {
        if (!$recipe = Recipe::find($id)) {
            return abort(404, 'recipe not found');
        }

        return view(
            'recipe',
            ['recipe' => $recipe]
        );
    }
}

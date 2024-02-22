<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecipeController extends Controller
{
    /**
     * Display a listing of the recipes.
     */
    public function index(): View
    {
        return view(
            'recipes.index',
            ['recipes' => Recipe::all()]
        );
    }

    /**
     * Show the form for creating a new recipe.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created recipe in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'instructions' => 'string',
            'external_url' => 'url',
            'tested' => 'nullable|boolean',
        ]);
 
        $recipe = Recipe::create($validated);
 
        return redirect(route('recipes.show', [$recipe]));
    }

    /**
     * Display the specified recipe.
     */
    public function show(string $id)
    {
        return view(
            'recipes.show',
            ['recipe' => Recipe::findOrFail($id)]
        );
    }

    /**
     * Show the form for editing the specified recipe.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified recipe in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified recipe from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Cookbook;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }
    
    public function create(Cookbook $cookbook)
    {
        return view('recipes.create', compact('cookbook'));
    }

    public function store(Request $request, Cookbook $cookbook)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'page' => 'nullable',
            'ingredient1' => 'nullable',
            'ingredient2' => 'nullable',
            'ingredient3' => 'nullable',
            'ingredient4' => 'nullable',
            'ingredient5' => 'nullable',
            

        ]);

        $cookbook->recipes()->create($validatedData);

        return redirect()->route('recipes.create', ['cookbook' => $cookbook->id])->with('success', 'Recette ajoutée avec succès.');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'page' => 'nullable',
            'ingredient1' => 'nullable',
            'ingredient2' => 'nullable',
            'ingredient3' => 'nullable',
            'ingredient4' => 'nullable',
            'ingredient5' => 'nullable',
        ]);

        $recipe->update($validatedData);

        return redirect()->route('recipes.index')->with('success', 'Recette mise à jour avec succès.');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Recette supprimée avec succès.');
    }
    public function showRecipes(Cookbook $cookbook)
    {
        $recipes = $cookbook->recipes;
        return view('cookbooks.cookbookPage', compact('cookbook', 'recipes'));
    }
}

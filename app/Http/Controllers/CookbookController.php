<?php

namespace App\Http\Controllers;

use App\Models\Cookbook;
use Illuminate\Http\Request;

class CookbookController extends Controller
{
    public function index()
    {
        $cookbooks = Cookbook::all();
        return view('cookbooks.index', compact('cookbooks'));
    }
    public function create()
    {
        return view('cookbooks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
        ]);

        $cookbook = Cookbook::create($request->all());

        return redirect()->route('recipes.create',['cookbook' => $cookbook])->with('success', 'Livre de recettes créé avec succès.');
    }

    public function edit(Cookbook $cookbook)
    {
        return view('cookbooks.edit', compact('cookbook'));
    }

    public function update(Request $request, Cookbook $cookbook)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
        ]);

        $cookbook->update($request->all());

        return redirect()->route('cookbooks.index')->with('success', 'Livre de recettes mis à jour avec succès.');
    }

    public function destroy(Cookbook $cookbook)
    {
        $cookbook->delete();

        return redirect()->route('cookbooks.index')->with('success', 'Livre de recettes supprimé avec succès.');
    }

    
}
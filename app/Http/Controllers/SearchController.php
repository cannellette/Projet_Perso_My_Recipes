<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class SearchController extends Controller
{
    public function search(Request $request){

    $query = $request->input ('query');

    $recipeResults = Recipe::query()
        ->where ('title', 'like', "%$query%")
        ->orWhere('ingredient1', 'like', "%$query%")
        ->orWhere('ingredient2', 'like', "%$query%")
        ->orWhere('ingredient3', 'like', "%$query%")
        ->orWhere('ingredient4', 'like', "%$query%")
        ->orWhere('ingredient5', 'like', "%$query%")
        ->get();

    return view('search', ['results' => $recipeResults]);
}}

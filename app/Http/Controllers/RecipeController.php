<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::latest()->paginate(20);
        return view('recipe.index', [
            'recipes' => $recipe
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = [
        'cookbook_id', 
        'title', 
        'page', 
        'ingredient1', 
        'ingredient2', 
        'ingredient3', 
        'ingredient4', 
        'ingredient5'];

    // Définir la relation avec le livre de cuisine
    public function cookbook()
    {
        return $this->belongsTo(Cookbook::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookbook extends Model
{
    use HasFactory;

    protected $table = 'cookbooks';

    protected $fillable = ['title', 'writer'];

    // Définir la relation avec les recettes
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}

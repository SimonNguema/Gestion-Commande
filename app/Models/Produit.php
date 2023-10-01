<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Produit extends Model
{
    protected $fillable = ['nom', 'description', 'prix','image', 'categorie_id'];




    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categorie_id', 'id');
    }
}

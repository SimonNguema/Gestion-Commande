<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Categories extends Model
{
   protected $fillable = ['nom', 'image'];

   protected $table = 'categories';

   public function produits()
   {
       return $this->hasMany(Produit::class, 'categorie_id', 'id');
   }
    
}

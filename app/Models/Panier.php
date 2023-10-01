<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{ 
	protected $table = 'panier';
    protected $fillable = ['produit_id', 'quantite', 'users_id'];

    public static function add($produitId, $quantite, $userId)
{
    $panierItem = self::where('produit_id', $produitId)->where('users_id', $userId)->first();

    if ($panierItem) {
        // Le produit existe déjà dans le panier de cet utilisateur, mettez à jour la quantité
        $panierItem->quantite += $quantite;
        $panierItem->save();
    } else {
        // Ajouter un nouveau produit au panier de cet utilisateur
        $panierItem = new self();
        $panierItem->produit_id = $produitId;
        $panierItem->quantite = $quantite;
        $panierItem->users_id = $userId;
        $panierItem->save();
    }
}


    

    public function produits()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'users_id');
    }

    public static function remove($produitId)
    {
        // Rechercher le produit dans le panier
        $panierItem = self::where('produit_id', $produitId)->first();
    
        if ($panierItem) {
            // Vérifier s'il existe des commandes liées à ce produit du panier
            $commandeCount = Commande::where('panier_id', $panierItem->id)->count();
    
            if ($commandeCount > 0) {
                // Le produit du panier est lié à des commandes, ne le supprimez pas
                return false;
            }
    
            // Le produit existe dans le panier et n'est pas lié à des commandes, donc nous pouvons le supprimer
            $panierItem->delete();
            return true;
        }
    
        return false;
    }

    public static function clearUserPanier($userId)
    {
        self::where('users_id', $userId)->delete();
    }

    


   
    
}

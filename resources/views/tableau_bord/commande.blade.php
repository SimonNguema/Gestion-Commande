@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">



<body>


    <section class="produits">
    <h1>Liste des commandes</h1>
    
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>

               
               
                <th>Produits</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commande  as $commandes)
           
              
                <tr>
                    <td>{{$commandes->id}}</td>
                    <td>{{$commandes->user->name}}</td>
                    <td>{{$commandes->user->adresse}}</td>
                    <td>{{$commandes->user->telephone}}</td>
                    <td>{{$commandes->produit->nom}}</td>
                    <td>{{$commandes->panier->quantite}}</td>
                   
                   
                   
                   
                    
                    <td>{{$commandes->montant}}</td>
                    <td>{{$commandes->status}}</td>
                    <td>{{$commandes->date_commande}}</td>
                    
                    <td>
                        <a href="#"><i class="fas fa-edit text-warning"></i> </a>
                        <form action="{{route('tableau_bord.destroyCommande', $commandes) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"><i class="fas fa-trash-alt text-danger"></i></button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>

 

</body>

</html>

@endsection
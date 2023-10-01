@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">



<body>


    <section class="produits">
    <h1>Liste des produits</h1>
    <a href="{{ route('produits.create') }}" class="btn btn-primary">Ajouter un produit</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Categories</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->categorie->nom }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>
                        <a href="{{ route('produits.edit', $produit) }}" ><i class="fas fa-edit text-warning"></i></a>
                        <form action="{{ route('produits.destroy', $produit) }}" method="POST" class="d-inline">
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
@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">


<body>
 
<!-- resources/views/produits/edit.blade.php -->


    <h1>Modifier le produit</h1>
    <form action="{{ route('produits.update', $produit) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $produit->nom }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $produit->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" step="0.01" value="{{ $produit->prix }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>

@endsection
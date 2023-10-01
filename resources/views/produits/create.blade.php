@extends('layouts.body_tableau_bord')
@section('content')
<!DOCTYPE html>
<html>

<body>

<!-- resources/views/produits/create.blade.php -->


    <h1>Ajouter un produit</h1>
    <form action="{{ route('produits.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" step="0.01" required>
        </div>

         <div class="form-group">
            <label for="role"> Categorie</label>
            <select name="categorie_id" id="role" class="form-control">
                @foreach($categorie as $categories)
                 <option value="{{$categories->id}}">{{$categories->nom}}</option>
                @endforeach
             </select>
        </div>

         <div class="mb-3">
                <label for="formFileSm" class="form-label">Charger une image</label>
                <input class="form-control form-control-sm" id="formFileSm" type="text" name="image">
            </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


</body>
</html>
@endsection
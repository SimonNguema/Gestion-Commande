@extends('layouts.body_tableau_bord')
@section('content')
<!DOCTYPE html>
<html>

<body>

<!-- resources/views/produits/create.blade.php -->


    <h1>Ajouter une categorie</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
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
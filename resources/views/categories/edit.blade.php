@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">


<body>
 
<!-- resources/views/produits/edit.blade.php -->


    <h1>Modifier une categorie</h1>
    <form action="{{ route('categories.update', $categorie) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $categorie->nom }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>

@endsection

@extends('layouts.body_tableau_bord')
@section('content')
<!DOCTYPE html>
<html>

<body>

<!-- resources/views/produits/create.blade.php -->


    <h1>Ajouter un utilisateur</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="name" id="nom" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="mail" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" required>
        </div>
        
        <div class="form-group">
                  <label class="form-label" for="form1Example2">Mot de passe</label>
                  <input type="password" name="password" id="form1Example2" class="form-control" />
                  
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                 <option value="Client">Client</option>
                <option value="Admin">Administrateur</option>
             </select>
        </div>


        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


</body>
</html>
@endsection
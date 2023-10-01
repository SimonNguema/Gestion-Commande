@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 
<!-- resources/views/produits/edit.blade.php -->


    <h1>Modifier le l'utilisateur</h1>
    <form action="{{ route('user.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
           <label for="nom">Nom</label>
            <input type="text" name="name" id="nom" class="form-control" value="{{ $user->name }}" required>

        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="mail" class="form-control" step="0.01" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
             <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $user->adresse }}" required>
 
         </div>

         <div class="form-group">
            <label for="telephone">Telephone</label>
             <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $user->telephone }}" required>
 
         </div>

        <div class="form-group">
                  <label class="form-label" for="form1Example2">Mot de passe</label>
                  <input type="password" name="password" id="form1Example2" class="form-control" value="{{ $user->password }}" />
                  
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" value="{{ $user->role}}" >
                 <option value="Client">Client</option>
                <option value="Admin">Administrateur</option>
             </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>


</body>

</html>
@endsection
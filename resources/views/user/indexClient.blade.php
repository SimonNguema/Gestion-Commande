@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">


<body>
    <h1>Liste des Clients</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary">Ajouter un utilisateur</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($client as $clients)
                <tr>
                    <td>{{ $clients->name}}</td>
                    <td>{{ $clients->email}}</td>
                    <td>{{ $clients->adresse}}</td>
                    <td>{{ $clients->telephone}}</td>
                    <td>{{ $clients->role }}</td>
                    <td>
                         <a href="{{ route('user.edit', $clients) }}" class=""><i class="fas fa-edit text-warning"></i></a> 
                        

                        <form action="{{ route('user.destroy', $clients) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"> <i class="fas fa-trash-alt text-danger"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
@endsection
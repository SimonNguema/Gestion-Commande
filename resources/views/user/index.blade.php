@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">



<body>
    <h1>Liste des Administrateurs</h1>
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
            @foreach($admin as $admins)
                <tr>
                    <td>{{ $admins->name}}</td>
                    <td>{{ $admins->email}}</td>
                    <td>{{ $admins->adresse}}</td>
                    <td>{{ $admins->telephone}}</td>
                    <td>{{ $admins->role }}</td>
                    <td>
                         <a href="{{ route('user.edit', $admins) }}" ><i class="fas fa-edit text-warning"></i></a> 

                        <form action="{{ route('user.destroy', $admins) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')"><i class="fas fa-trash-alt text-danger"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
@endsection
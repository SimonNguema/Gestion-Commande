@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">



<body>
    <h1>Tous les messages</h1>
    
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $contacts)
                <tr>
                    <td>{{ $contacts->nom}}</td>
                    <td>{{ $contacts->email}}</td>
                    <td>{{ $contacts->sujet }}</td>
                    <td>{{ $contacts->message }}</td>
                    <td>
                        

                        <form action="{{ route('tableau_bord.destroy', $contacts) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
@endsection
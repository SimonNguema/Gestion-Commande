@extends('layouts.body_tableau_bord')
@section('content')
<!doctype html>
<html lang="en">



<body>


    <section class="produits">
    <h1>Liste des   Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter une categorie</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorie as $categories)
                <tr>
                    <td>{{ $categories->nom }}</td>
                   
                    <td>
                        <a href="{{ route('categories.edit', $categories) }}"><i class="fas fa-edit text-warning"></i></a>
                        <form action="{{ route('categories.destroy', $categories) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"><i class="fas fa-trash-alt text-danger"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

 

</body>

</html>

@endsection
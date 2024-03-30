@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>

<div>
    <a href="{{ route('books.create') }}" class="btn btn-lg btn-success">ajoutre</a>

</div>

<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date de publication</th>
            <th>Nombre de pages</th>
            <th>Éditeur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)

        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->publication_date }}</td>
            <td>{{ $book->number_of_pages }}</td>
            <td>{{ $book->publisher }}</td>
            <td>
                <!-- botton de affichage-->
                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-primary">Voir</a>
                <!-- botton de modification-->
                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Modifier</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <!-- botton de supprimer-->
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-end">

</div>
@endsection
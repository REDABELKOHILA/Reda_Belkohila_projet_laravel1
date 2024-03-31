@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/traiter" method="POST" enctype="multipart/form-data" class="my-5">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <label for="fichier">Fichier</label>
            <input type="file" class="form-control-file" id="fichier" name="fichier">
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance">
        </div>
        <div class="form-group">
            <label for="abonne">Abonné:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="abonne" id="abonne_oui" value="oui">
                <label class="form-check-label" for="abonne_oui">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="abonne" id="abonne_non" value="non">
                <label class="form-check-label" for="abonne_non">Non</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
@endsection
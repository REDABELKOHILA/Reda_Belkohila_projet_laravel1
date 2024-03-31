<!-- affichage_session.blade.php -->

<h1>Données de session</h1>
@foreach(session('arganiers') as $key => $value)
    <p>{{ $key }}: {{ $value }}</p>
@endforeach

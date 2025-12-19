@extends('layouts.app')

@section('content')
    <div class="bloc-error">
        <h1>Page non trouvée.</h1>
        <a href="{{ route('home') }}" class="link-blue">Retour à l'accueil</a>
    </div>
@endsection